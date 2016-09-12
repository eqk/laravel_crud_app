var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var jsmin = require('gulp-jsmin');
var concat = require('gulp-concat');

var base_path = {
	src: './resources/assets',
	dst: './public/assets'
}

var path = {
	'src' : {
		css: base_path.src + '/scss/style.scss',
		js: base_path.src + '/js/**/*.js',
	},
	'dst' : {
		css: base_path.dst + '/css/',
		js: base_path.dst + '/js/',
	},
};

gulp.task('js', function () {
    return gulp.src(path.src.js)
    	.pipe(gulp.dest(path.dst.js))
    	.pipe(concat('scripts.js'))
    	.pipe(gulp.dest(path.dst.js))
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(path.dst.js));
});

gulp.task('sass', function () {
  return gulp.src(base_path.src + '/scss/**/*')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
          browsers: ['last 1 versions'],
          cascade: false
        }))
	    .pipe(gulp.dest(path.dst.css))
	    .pipe(cssmin())
	    .pipe(rename({suffix: '.min'}))
	    .pipe(gulp.dest(path.dst.css));
});

gulp.task('watch', function(){
  gulp.watch('./resources/assets/scss/*', ['sass']);
  gulp.watch(path.src.js, ['js']);
});


gulp.task('default', ['sass', 'js', 'watch']);



