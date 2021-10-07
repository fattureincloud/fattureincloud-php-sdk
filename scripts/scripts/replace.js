var fs = require("fs")

process.argv.slice(2).forEach((val, _) => replacePHPComments(val))

function replacePHPComments(dir) {  files = fs.readdirSync(dir)

  files.forEach(function (file) {
    if (fs.statSync(dir + file).isDirectory()) {
      replacePHPComments(dir + file + "/")
    } else {
      fs.readFile(dir + file, "utf8", function (err, data) {
        if (err) {
          return console.log(err)
        }
        var result = data.replace(
          /@link.*/g,
          "@link     https://fattureincloud.it"
        )
        result = result.replace(
          /@author.*/g,
          "@author   Fatture In Cloud API team"
        )
        console.log(dir + file + " replaced succesfully")
        fs.writeFile(dir + file, result, "utf8", function (err) {
          if (err) return console.log(err)
        })
      })
    }
  })
}