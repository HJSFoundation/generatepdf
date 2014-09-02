var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('get-bootstrap-css', function() {
    gulp.src('components/bootstrap/less/bootstrap.less')
        .pipe(less())
        .pipe(gulp.dest('public/css'));
});

gulp.task('get-bootstrap-theme-css', function() {
    gulp.src('components/bootstrap/css/bootstrap-theme.css')
    .pipe(gulp.dest('public/css'));
});

gulp.task('get-bootstrap-js', function() {
    gulp.src('components/bootstrap/js/bootstrap.js')
        .pipe(gulp.dest('public/js'));
});

gulp.task('get-bootstrap-fonts', function() {
    gulp.src('components/bootstrap/fonts/glyphicons-halflings-regular.*')
        .pipe(gulp.dest('public/fonts'));
});

gulp.task('get-jquery', function() {
    gulp.src('components/jquery/jquery.js')
        .pipe(gulp.dest('public/js'));
});

gulp.task('default', [
    'get-jquery',
    'get-bootstrap-css', 
    'get-bootstrap-theme-css', 
    'get-bootstrap-js', 
    'get-bootstrap-fonts', 
]);