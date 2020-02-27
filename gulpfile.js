var gulp = require('gulp');
var uglify = require('gulp-uglify');
var pump = require('pump');
var uglifycss = require('gulp-uglifycss');

gulp.task('css', function (css) {
  gulp.src('design/gulp/css/*.css')
    .pipe(uglifycss({
      "uglyComments": true
    }))
    .pipe(gulp.dest('design/css/'));
    css();
});

gulp.task('compress', function (cp) {
  pump([
        gulp.src('design/gulp/js/*.js'),
        uglify(),
        gulp.dest('design/js/')
    ],
   cp
  );
});

gulp.task('watch', function(){
    gulp.watch('design/gulp/css/*.css')
    .on('change', function(path, stats) {
        console.log(path);
        /* start css task */
	gulp.task('css', function (cp) {
	  gulp.src('design/gulp/css/*.css')
	    .pipe(uglifycss({
	      "uglyComments": true
	    }))
	    .pipe(gulp.dest('design/css/'));
	    cp
	});
	/* end css task */
    })
    .on('unlink', function(path, stats) {
        console.log(path);
        // code to execute on delete
    });
    gulp.watch('design/gulp/js/*.js')
    .on('change', function(path, stats) {
        console.log(path,stats);
        /* start js compress */
	gulp.task('compress', function (cp) {
	  pump([
		gulp.src('design/gulp/js/*.js'),
		uglify(),
		gulp.dest('design/js/')
	    ],
	   cp
	  );
	});
	/* end js compress */
    })
    .on('unlink', function(path, stats) {
        console.log(path, stats);
        // code to execute on delete
    });
});
