var elixir = require('laravel-elixir');
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

//script paths
var jsFiles = 'resources/assets/angular/**/**/*.js';
var jsDest = 'public/dist/js';
var htmlFiles = 'resources/assets/views/**/*.html';
var htmlDest = 'public/dist/views';

// Tarea que agrupa todos los scripts en un solo archivo y
// los minifica.
gulp.task('scripts', function() {
  return gulp.src(jsFiles)
    .pipe(concat('app.js'))
    .pipe(gulp.dest(jsDest))
    .pipe(rename('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(jsDest));
});

gulp.task('views', function() {
  return gulp.src(htmlFiles)
    .pipe(gulp.dest(htmlDest));
});

gulp.task('sass', function(){
  return gulp.src('resources/assets/sass/app.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('public/css'))
});

gulp.task('watch', function(){
  gulp.watch('resources/assets/sass/**.scss', ['sass']);
  gulp.watch(jsFiles, ['scripts']);
  gulp.watch(htmlFiles, ['views']);
});

