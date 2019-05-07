const { series, parallel } = require('gulp');

// The `clean` function is not exported so it can be considered a private task.
// It can still be used within the `series()` composition.
function clean(param) {
  console.log("I'm inside clean Function")
  param()
}

// The `build` function is exported so it is public and can be run with the `gulp` command.
// It can also be used within the `series()` composition.
function build(param) {
  console.log("I'm inside build Function")
  param()
}

// function defaultTask(cb) {
//   // place code for your default task here
//   cb()
// }

// exports.default = defaultTask
// exports.build = build
exports.default = series(clean, build)
// exports.default = parallel(clean, build)
