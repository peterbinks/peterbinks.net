var gulp      = require('gulp');
var config    = require('../config').files;

gulp.task('files', function () {
  return gulp.src( config.source )
    .pipe( gulp.dest( config.dest ));
});
