var gulp      = require('gulp');
var config    = require('../config').site;

gulp.task('site', function () {
  return gulp.src( config.source )
    .pipe( gulp.dest( config.dest ));
});
