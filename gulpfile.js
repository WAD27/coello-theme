"use strict";

const { series, parallel } = require('gulp')
const gulp = require("gulp")
const autoprefixer = require("autoprefixer")
const browsersync = require("browser-sync").create()
const cp = require("child_process")
const cssnano = require("cssnano")
const del = require("del")
const eslint = require("gulp-eslint")
const plumber = require("gulp-plumber")
const postcss = require("gulp-postcss")
const rename = require("gulp-rename")
const sass = require("gulp-sass")
const webpack = require("webpack")
const webpackconfig = require("./webpack.config.js")
const webpackstream = require("webpack-stream")
//
function browserSync(done) {
  browsersync.init({
    proxy: 'http://localhost/coello',
    options: {
      reloadDelay: 250
    },
    port: 3000
  });
  done();
}
// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}
function css() {
  return gulp
  .src("./scss/**/*.scss")
  .pipe(plumber())
  .pipe(sass({ outputStyle: "expanded" }))
  .pipe(gulp.dest("./assets/css/"))
  .pipe(rename({ suffix: ".min" }))
  .pipe(postcss([autoprefixer(), cssnano()]))
  .pipe(gulp.dest("./assets/css/"))
  .pipe(browsersync.stream())

  console.log("Sass Compiled!")

}

// Lint scripts
function scriptsLint() {
  return gulp
    .src(["./js/**/*", "./gulpfile.js"])
    .pipe(plumber())
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError());

    console.log("JavaScript Compiled!")
}

// Transpile, concatenate and minify scripts
function scripts() {
  return (
    gulp
      .src(["./js/**/*"])
      .pipe(plumber())
      .pipe(webpackstream(webpackconfig, webpack))
      .pipe(gulp.dest("./assets/js/"))
      .pipe(browsersync.stream())
  )
}

function php() {
  return gulp
  .src("./**/*.php")
  .pipe(browsersync.stream())
  console.log("PHP file Saved!");
}

// Watch
function watchFiles() {
  gulp.watch("./scss/**/*", css)
  gulp.watch("./js/**/*", series(scriptsLint, scripts))
  gulp.watch("./**/*.php", php)
}

//complex tasks
const js = series(scriptsLint, scripts)
const build = series(css, js, php)
const watch = parallel(watchFiles, browserSync)

// export tasks
exports.css = css
exports.js = js
exports.php = php
exports.build = build
exports.watch = watch
exports.default = series(build, watch)
