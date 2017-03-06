var elixir = require('laravel-elixir');
var gulp = require('gulp');
var sass = require('gulp-sass');

elixir(function(mix) {

    // Application Scripts
    mix.scripts([
        '../../../resources/scripts/app.js'
    ], 'public/js/app.js');

});

gulp.task('sass', function(){
  return gulp.src('resources/assets/sass/app.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('public/css'))
});

gulp.task('watch', function(){
  gulp.watch('resources/assets/sass/**.scss', ['sass']);
});

