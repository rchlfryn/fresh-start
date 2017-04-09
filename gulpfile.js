var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('browserSync', function() {
  browserSync.init({
  	port: 9000,
    server: {
      baseDir: 'assets'
    },
  })
});

gulp.task('sass', function(){
  return gulp
    .src('./library/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./library/css/'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('library/scss/**/*.scss', ['sass']); 
  // Other watchers
  gulp.watch('assets/*.html', browserSync.reload); 
  gulp.watch('assets/js/**/*.js', browserSync.reload); 
});

gulp.task('default', ['sass', 'watch' /*, possible other tasks... */]);