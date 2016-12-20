/*jslint node: true */
'use strict';

// Default Gulp
var gulp = require('gulp');

// Sass Compiler and Maps
var sass = require('gulp-sass');
var maps = require('gulp-sourcemaps');

gulp.task('compileSass', function() {
  gulp.src("scss/style.scss")
      .pipe(maps.init())
      .pipe(sass())
      .pipe(maps.write('./'))
      .pipe(gulp.dest('css'));
});


// Gulp Default Task. Run it and all dependent tasks in brackets with the `gulp` command.
gulp.task('default', ['compileSass']);
