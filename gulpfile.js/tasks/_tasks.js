var gulp = require('gulp');

gulp.task('build', ['lint','files','site','content','images','styles','scripts','modernizr']);
gulp.task('default', ['build','watch','connect']);
