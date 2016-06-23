var gulp      = require('gulp');
var config    = require('../config').content;

gulp.task('content', function () {
  return gulp.src( config.source )
    .pipe( gulp.dest( config.dest ));
});
