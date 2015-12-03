'use strict';

var browserSync = require('browser-sync').create();
var gulp        = require('gulp');
var less        = require('gulp-less');

// Static server
gulp.task('serve', ['template'], function() {
    browserSync.init({
        open: false,
        server: {
            baseDir: "./dist/"
        }
    });

    gulp.watch("style/**/*.less", ['style']);
    gulp.watch("**/*.hbs", ['template']).on('change', browserSync.reload);
});

gulp.task('style', function () {
    return gulp.src('style/**/*.less')
        .pipe(less())
        .pipe(gulp.dest('./dist/css'));
});

gulp.task('default', ['serve']);
