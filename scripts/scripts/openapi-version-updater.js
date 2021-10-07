// openapi-version-updater.js
const yaml = require('js-yaml')

module.exports.readVersion = function (contents) {
    const doc = yaml.load(contents)
    return doc.info.version;
}

module.exports.writeVersion = function (contents, version) {
    const doc = yaml.load(contents)
    doc.info.version = version
    return yaml.dump(doc)
}