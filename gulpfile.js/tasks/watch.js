var gulp        = require('gulp');
var config      = require('../config').watch;
var livereload  = require('gulp-livereload');

gulp.task('watch', function(){
  livereload.listen();
  gulp.watch( config.livereload ).on('change', livereload.changed);
  gulp.watch( config.files, ['files']);
  gulp.watch( config.site, ['site']);
  gulp.watch( config.content, ['content']);
  gulp.watch( config.styles, ['styles'] );
  gulp.watch( config.javascript, ['lint','scripts'] );
  gulp.watch( config.images, ['images'] );
});
