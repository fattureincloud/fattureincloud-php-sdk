const axios = require('axios')
const fs = require('fs')
const semver = require('semver')
const yaml = require('js-yaml')



var baseUrl = 'https://dash.readme.com'
var versionPath = '/api/v1/version'
var specificationPath = '/api/v1/api-specification'
var apiKey = process.argv[2]
var yamlFile = "../openapi.yaml"

function main() {
	var bumpVersion = retrieveVersionFromOpenApi(yamlFile)

	var result = {}

	if (bumpVersion != null) {

		var versionId = null
		var major = semver.major(bumpVersion)
		var minor = semver.minor(bumpVersion)
		var apiVersion = `v${major}.${minor}`
		result['api_version'] = apiVersion

		listVersions(apiKey, function lv(lvResponse) {
			var versionList = lvResponse.data
			var lastVersion = null
			var compareVersion = semver.coerce(apiVersion).version

			for (var elem in versionList) {

				var elemVersion = versionList[elem]['version']
				var v = semver.coerce(elemVersion).version

				if (semver.eq(v, compareVersion)) {
					versionId = versionList[elem]['_id']
				}
				if (lastVersion == null || semver.lt(lastVersion, v)) {
					lastVersion = v
				}

			}

			if (versionId == null) {

				createVersion(apiVersion, lastVersion, apiKey, function cv(cvResponse) {

					versionId = cvResponse.data['_id']
					if (versionId == null) {
						throw "VersionId not found!!!"
					} else {
						getSpecificationMetadata(apiVersion, apiKey, function gsm(gsmResponse) {
							//  should have only one spec in the newly created version
							var specList = gsmResponse.data
							if (specList.length != 1) {
								throw "Something strange happened!!!"
							} else {
								var specId = specList[0]['_id']
								deleteSpecification(specId, apiKey, function ds() {
									result['version_id'] = versionId
									printResult(result)
								})
							}

						})
					}
				})

			} else {
				result['version_id'] = versionId
				printResult(result)
			}
		})

	} else {
		throw "OpenAPI version ID not found!!!"
	}

}

main()

//-----------------------------------------------------------------------------------------------

function printResult(result) {
	console.log(yaml.dump(result))
}

function retrieveVersionFromOpenApi(contents) {

	const openapi = yaml.load(fs.readFileSync(contents, 'utf8'))
	return openapi.info.version

}

//-----------------------------------------------------------------------------------------------

function listVersions(apiKey, callback) {

	var url = baseUrl + versionPath

	restGet(url, apiKey, callback)
}

function getVersion(version, apiKey, callback) {

	var url = baseUrl + versionPath + '/' + version

	restGet(url, apiKey, callback)
}


function createVersion(version, lastVersion, apiKey, callback) {

	var url = baseUrl + versionPath

	var payload = {
		'version': version,
		'from': lastVersion,
		'is_stable': false,
		'is_hidden': true
	}

	restPost(url, payload, apiKey, callback)

}

function getSpecificationMetadata(version, apiKey, callback) {

	var url = baseUrl + specificationPath

	var headers = {
		'x-readme-version': version
	}

	restGet(url, apiKey, callback, headers)
}

function deleteSpecification(specId, apiKey, callback) {

	var url = baseUrl + specificationPath + '/' + specId

	restDelete(url, apiKey, callback)
}

//-----------------------------------------------------------------------------------------------

function restGet(url, apiKey, callback, additionalHeaders = null) {
	const config = {
		headers: getHeaders(apiKey, additionalHeaders)
	}

	axios.get(url, config)
		.then(function (response) {
			callback(response)
		})
		.catch(function (error) {
			console.error(error)
		})
}

function restPost(url, data, apiKey, callback, additionalHeaders = null) {
	const config = {
		headers: getHeaders(apiKey, additionalHeaders)
	}

	axios.post(url, data, config)
		.then(function (response) {
			callback(response)
		})
		.catch(function (error) {
			console.error(error)
		})
}

function restDelete(url, apiKey, callback, additionalHeaders = null) {
	const config = {
		headers: getHeaders(apiKey, additionalHeaders)
	}

	axios.delete(url, config)
		.then(function (response) {
			callback(response)
		}).catch(function (error) {
			console.error(error)
		})
}

function getHeaders(apiKey, additionalHeaders) {
	var base = getBaseHeaders(apiKey)
	if (additionalHeaders) {
		return { ...base, ...additionalHeaders }
	} else {
		return base
	}

}

function getBaseHeaders(apiKey) {
	var apiKeyB64 = Buffer.from(apiKey).toString('base64')

	var headers = {
		'Accept': 'application/json',
		'Content-Type': 'application/json',
		'Authorization': 'Basic ' + apiKeyB64
	}

	return headers
}