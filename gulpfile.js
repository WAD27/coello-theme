const { series, parallel } = require('gulp')
const browsersync = require("browser-sync").create()
const sass = require("gulp-sass")
//
function browserSync(done) {
  browsersync.init({
    proxy: 'http://localhost/coellotrejo',
    options: {
      reloadDelay: 250
    },
  });
  done();
}

function styles(param) {
  // console.log("I'm inside sass Function")
  param()
}
//
// exports.build = build
exports.browsersSync = browserSync
exports.default = series(browserSync)
// exports.default = parallel(clean, build)
