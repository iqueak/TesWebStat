'use strict';

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var csso = require('gulp-csso');
var sass = require('gulp-sass');
var dedupe = require('gulp-dedupe');
var imagemin = require('gulp-imagemin');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');
var plumber = require('gulp-plumber');
var del = require('del');
var st = require('st');
var fs = require('fs');
var opn = require('opn');

var merge = require('merge-stream');
var concat = require('gulp-concat');
var header = require('gulp-header');
var replace = require('gulp-replace');
var newer = require('gulp-newer');

var http = require('http');

var paths = {
    scripts: ['src/js/**/*.js'],
    css: [
        'src/css/jquery.bxslider.css',
        'src/css/style.css',
        'src/css/**/*.css'
    ],
    sass: ['src/css/**/*.{scss,sass}'],
    images: ['src/img/**/*.{png,jpg}'],
    vendor: ['vendor/jquery/dist/jquery.min.js', 'vendor/bootstrap/dist/**/*']
};

var server = {
    port: '8000'
};

/** Clean **/
gulp.task('clean', function () {
    return del(['dist']);
});

/** Developer example **/
gulp.task('example-dist', [], function () {
    gulp.src(['tests/2dist/**/*'])
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(newer('dist'))
        .pipe(gulp.dest('dist'))
        .pipe(livereload());

    gulp.src(paths.vendor)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(newer('dist/vendor'))
        .pipe(gulp.dest('dist/vendor'))
        .pipe(livereload());
});

gulp.task('js-scripts', [], function () {
    gulp.src(paths.scripts)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(concat('application.js'))
        .pipe(uglify())
        //.pipe(header(fs.readFileSync('src/header.js', 'utf8')))
        .pipe(sourcemaps.write('./'))
        .pipe(rename(function (path) {
            if (path.basename.substr(path.basename.length - 4) !== '.min' && path.extname === '.js') {
                path.basename += '.min';
            }
            if (path.basename.substr(path.basename.length - 3) === '.js' && path.extname === '.map') {
                path.basename = path.basename.slice(0, path.basename.length - 3) + '.min';
            }
        }))
        .pipe(replace('.js.map', '.min.map'))
        .pipe(gulp.dest('dist/js'));

    gulp.src(['tests/2dist/js/bxslider/jquery.bxslider-4.1.2.js'])
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(uglify({preserveComments: 'license'}))
        .pipe(sourcemaps.write('./'))
        .pipe(rename(function (path) {
            if (path.basename.substr(path.basename.length - 4) !== '.min' && path.extname === '.js') {
                path.basename += '.min';
            }
            if (path.basename.substr(path.basename.length - 3) === '.js' && path.extname === '.map') {
                path.basename = path.basename.slice(0, path.basename.length - 3) + '.min';
            }
        }))
        .pipe(replace('.js.map', '.min.map'))
        .pipe(gulp.dest('dist/js/bxslider'));
});

/** CSS Style **/
gulp.task('styles', [], function () {
    var sassStream,
        cssStream;

    sassStream = gulp.src(paths.sass)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sass());

    cssStream = gulp.src(paths.css);

    return merge(cssStream, sassStream)
        .pipe(newer('dist/css'))
        .pipe(concat('application.css'))
        //.pipe(dedupe())
        .pipe(csso())
        .pipe(rename(function (path) {
            path.extname = ".min.css"
        }))
        .pipe(gulp.dest('dist/css'))
        .pipe(livereload());
});

/** Images **/
gulp.task('images', [], function () {
    return gulp.src(paths.images)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(newer('dist/img'))
        .pipe(imagemin({optimizationLevel: 5}))
        .pipe(gulp.dest('dist/img'))
        .pipe(livereload());
});

/** Watcher **/
gulp.task('watch', ['default', 'server'], function () {
    livereload.listen({basePath: 'dist'});
    gulp.watch(paths.scripts, ['js-scripts']);
    gulp.watch(paths.css, ['styles']);
    gulp.watch(paths.sass, ['styles']);
    gulp.watch(paths.images, ['images']);

    gulp.watch('tests/2dist/**/*', ['example-dist']);
});

/** Server for watcher **/
gulp.task('server', function (done) {
    http.createServer(
        st({path: __dirname + '/dist', index: 'index.html', cache: false})
    ).listen(server.port, done);
    console.log('Listening on port ' + server.port);
});

/** Open browser **/
gulp.task('browser-chrome', function () {
    opn('http://127.0.0.1:' + server.port, {app: 'chrome'});
});

gulp.task('browser-firefox', function () {
    opn('http://127.0.0.1:' + server.port, {app: 'firefox'});
});

/** Make **/
gulp.task('make', ['clean'], function () {
    gulp.start('js-scripts');
    gulp.start('styles');
    gulp.start('images');
    gulp.start('example-dist');
});

/** Default **/
gulp.task('default', ['make']);
