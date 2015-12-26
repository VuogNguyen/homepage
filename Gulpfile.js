var gulp = require('gulp'),
    gutil = require('gulp-util'),
    jshint = require('gulp-jshint'),
    browserify = require('gulp-browserify'),
    concat = require('gulp-concat'),
    clean = require('gulp-clean'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifyCss = require('gulp-minify-css');;


// Styles task
gulp.task('styles', function() {
  gulp.src('assets/scss/style.scss')
  // The onerror handler prevents Gulp from crashing when you make a mistake in your SASS
  .pipe(sass({onError: function(e) { console.log(e); } }))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(minifyCss())
  // These last two should look familiar now :)
  .pipe(gulp.dest('dist/css/'));
});

// JSLint task
gulp.task('hint', function() {
  gulp.src('assets/js/*.js')
  .pipe(jshint())
  .pipe(jshint.reporter('default'));
});

// Browserify task
gulp.task('browserify', function() {
  gulp.src(['assets/js/main.js'])
  .pipe(browserify({
    insertGlobals: true,
    debug: true
  }))
  // Bundle to a single file
  .pipe(concat('bundle.js'))
  // Output it to dist/js folder
  .pipe(gulp.dest('dist/js'));
});

// Watch task
gulp.task('watch', ['hint','views','styles'], function() {
  // Watch our scripts
  gulp.watch(['assets/js/*.js', 'assets/js/**/*.js'],[
    'hint',
    'browserify'
  ]);

  gulp.watch(['assets/images/*'], [
    'views'
  ]);

  gulp.watch(['assets/scss/*.scss', 'assets/scss/**/*.scss'], [
    'styles'
  ]);
});

// Views task
gulp.task('views', function() {
  gulp.src('assets/images/*')
  .pipe(gulp.dest('dist/images/'));
  gulp.src('assets/fonts/*')
  .pipe(gulp.dest('dist/fonts'));
});


// Dev task
gulp.task('dev', function() {
  // Run the watch task, to keep taps on changes
  gulp.run('watch');
});
