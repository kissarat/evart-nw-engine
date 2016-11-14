"use strict";
const gulp = require('gulp'),
    plugin = require('gulp-load-plugins')(),
    config = require("./projectConfig.json");

/*******************************************************************
 ******************* Development Mode Setup ************************
 *******************************************************************/

process.env.NODE_ENV = process.env.NODE_ENV ? process.env.NODE_ENV.trim() : config.mode;
var DevMode;
if(!process.env.NODE_ENV || process.env.NODE_ENV == 'development' || process.env.NODE_ENV == 'dev'){
    DevMode = true;
    process.env.NODE_ENV = 'development';
} else{
    DevMode = false;
    process.env.NODE_ENV = 'production';
}

/*******************************************************************
 ******************* Build Tasks ***********************************
 *******************************************************************/


gulp.task('image:build', function () {
    return gulp.src(config.src.img)
        .pipe(plugin.newer(config.build.img))
        .pipe(plugin.imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [require('imagemin-pngquant')()],
            interlaced: true
        }))
        .pipe(gulp.dest(config.build.img))
});

gulp.task('js:build', function () {
    return gulp.src(config.src.js)
        .pipe(plugin.rigger())
        .pipe(plugin.if(config.lint, plugin.eslint()))
        .pipe(plugin.if(config.lint, plugin.eslint.format()))
        .pipe(plugin.if(config.sourcemaps, plugin.sourcemaps.init()))
        .pipe(plugin.if(!DevMode, plugin.uglify().on('error', (e)=>{console.log(e.message);})))
        .pipe(plugin.if(config.sourcemaps, plugin.sourcemaps.write()))
        .pipe(gulp.dest(config.build.js))
});


gulp.task('fonts:build', () => {
    return gulp.src(config.src.fonts, {since: gulp.lastRun('fonts:build')})
        .pipe(plugin.newer(config.build.fonts))
        .pipe(plugin.ttf2eot({clone:true}))
        .pipe(plugin.ttf2woff({clone:true}))
        .pipe(plugin.ttf2woff2({clone:true}))
        .pipe(gulp.dest(config.build.fonts));
});

gulp.task('fonts:copy', () => {
    return gulp.src(config.copy.fonts, {since: gulp.lastRun('fonts:build')})
        .pipe(gulp.dest(config.build.fonts));
});

gulp.task('style:build', () => {
    return gulp.src(config.src.style)
        .pipe(plugin.if(config.sourcemaps, plugin.sourcemaps.init()))
        .pipe(plugin.sass().on('error', plugin.sass.logError))
        .pipe(plugin.if(config.lint, plugin.sassLint()))
        .pipe(plugin.if(config.lint, plugin.sassLint.format()))
        .pipe(plugin.postcss([
            require("postcss-import")(),
            require('autoprefixer')({
                browsers: config.autoprefixer_browsers,
                cascade: false
            })
        ]))
        .pipe(plugin.if(!DevMode, plugin.cssnano()))
        .pipe(plugin.if(config.sourcemaps, plugin.sourcemaps.write()))
        .pipe(gulp.dest(config.build.css));
});



/*******************************************************************
 ******************* Global Tasks **********************************
 ********************************************************************/

gulp.task('watch', () =>{
    gulp.watch(config.watch.img, gulp.series('image:build'));
    gulp.watch(config.watch.js, gulp.series('js:build'));
    gulp.watch(config.watch.fonts, gulp.series('fonts:build'));
    gulp.watch(config.watch.style, gulp.series('style:build'));
});

gulp.task('build', gulp.parallel(
    'js:build',
    'style:build',
    'fonts:build',
    'fonts:copy',
    'image:build'
));


gulp.task('default', gulp.series('build', gulp.parallel('watch')));