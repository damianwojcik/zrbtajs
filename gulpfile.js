var gulp = require("gulp");
var browserSync = require("browser-sync");
var sass = require("gulp-sass");
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var minify = require('gulp-minify');
var rename = require('gulp-rename');

gulp.task("reload", function() {
    browserSync.reload();
});

gulp.task("serve", ["sass"], function() {
    browserSync({
        server: {
            baseDir: "./"
        }
    });
    gulp.watch("*.html", ["reload"]);
    gulp.watch("assets/css/**/*.+(scss|sass)", ["sass"]);
    gulp.watch("assets/js/scripts.js", ["compressjs"]);
});

gulp.task("sass", function() {
    gulp.src("assets/css/**/*.+(scss|sass)")
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer({
            browsers: ['> 1%']
        }))
        .pipe(gulp.dest("./"))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

gulp.task('compressjs', function() {
    gulp.src('assets/js/scripts.js')
        .pipe(minify({
            ext:{
                min:'.min.js'
            },
            noSource: true,
            exclude: ['tasks'],
            ignoreFiles: ['.combo.js', '-min.js', '*.min.js']
        }))
        .pipe(gulp.dest("./"))
});

gulp.task("default", ["serve"]);