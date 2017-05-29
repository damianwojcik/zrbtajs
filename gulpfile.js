var gulp = require("gulp");
var browserSync = require("browser-sync");
var sass = require("gulp-sass");
var autoprefixer = require('gulp-autoprefixer');

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
});

gulp.task("sass", function() {
    return gulp.src("assets/css/**/*.+(scss|sass)")
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer({
            browsers: ['> 1%']
        }))
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

gulp.task("default", ["serve"]);