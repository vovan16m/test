const { src, dest, parallel, watch } = require('gulp'),
	pug = require('gulp-pug'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	concat = require('gulp-concat'),
	// uglify = require('gulp-uglify'),
	uglify = require('gulp-uglify-es').default,
	imagemin = require('gulp-imagemin'),
	webp = require('gulp-webp'),
	sourcemaps = require('gulp-sourcemaps'),
	rename = require('gulp-rename'),
	fontmin = require('gulp-fontmin-woff2'),
	browserSync = require('browser-sync').create()

sass.compiler = require('node-sass')

/*function browserSyncInit() {
 browserSync.init({
 server: './www/prod'
 })
 }
 
 function browserSyncReload(done) {
 browserSync.reload()
 done()
 }*/

/*
 function html() {
 return src('www/dev/html/!*.pug')
 .pipe(pug())
 .pipe(dest('www/prod'))
 .pipe(browserSync.stream())
 }
 */

function css() {
	return src('sass/**/*.s+(a|c)ss')
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', sass.logError))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(concat('style.css'))
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('./'))
		.pipe(sass({
			outputStyle: 'compressed'
		}).on('error', sass.logError))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('./'))
		//.pipe(browserSync.stream())
}

function cssBlocks() {
	return src('sass/block/*.s+(a|c)ss')
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', sass.logError))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('blocks/css'))
}

/*function cssNotMinify() {
 return src('www/dev/css/!*.s+(a|c)ss')
 .pipe(sourcemaps.init())
 .pipe(sass({
 outputStyle: 'expanded'
 }).on('error', sass.logError))
 .pipe(autoprefixer({
 cascade: false
 }))
 .pipe(sourcemaps.write({
 addComment: false
 }))
 .pipe(dest('www/prod/css'))
 .pipe(browserSync.stream())
 }*/

function js() {
	return src('js/dev/*.js')
		.pipe(sourcemaps.init())
		.pipe(concat('scripts.js'))
		.pipe(uglify())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('js/'))
		//.pipe(browserSync.stream())
}

/*function jsNotMinify() {
 return src('www/dev/js/!**!/!*.js')
 .pipe(sourcemaps.init())
 //.pipe(concat('scripts.min.js'))
 .pipe(sourcemaps.write({
 addComment: false
 }))
 .pipe(dest('www/prod/js'))
 .pipe(browserSync.stream())
 }*/

function imagesCompress() {
	return src('img/dev/**/*')
		.pipe(sourcemaps.init())
		.pipe(imagemin())
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('img/'))
}

function imagesToWebP() {
	return src('img/dev/**/*')
		.pipe(sourcemaps.init())
		.pipe(webp())
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('img/'))
}

function fonts() {
	return src('fonts/dev/**/*.*')
		.pipe(sourcemaps.init())
		.pipe(fontmin())
		.pipe(sourcemaps.write({
			addComment: false
		}))
		.pipe(dest('fonts/'))
		//.pipe(browserSync.stream())
}

exports.js = js
//exports.js = jsNotMinify
exports.css = css
exports.cssBlocks = cssBlocks
//exports.cssNotMinify = cssNotMinify
exports.imagesCompress = imagesCompress
exports.imagesToWebP = imagesToWebP
exports.fonts = fonts
//exports.html = html
//exports.browserSyncInit = browserSyncInit

exports.default = function() {
	//browserSyncInit()
	
	watch([
		'sass/**/*.*',
		'js/dev/*.*',
		'img/dev/**/*.*',
		'fonts/dev/**/*.*'
	], parallel(
		//html,
		css,
		cssBlocks,
		//cssNotMinify,
		js,
		//jsNotMinify,
		imagesCompress,
		imagesToWebP,
		fonts//,
		//browserSyncReload
	))
}
