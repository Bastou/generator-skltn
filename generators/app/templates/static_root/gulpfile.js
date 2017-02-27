const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const $ = gulpLoadPlugins();
const gutil = require('gulp-util'); //fonctions utilitaires pour les plugins Gulp

// Option autoprefixer
const autoprefixerOptions = {
    browsers: ['last 12 versions', '> 1%', 'Explorer >= 8', 'ie >= 8']
};

//Option Sass
const sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded', //nested, expanded, compact, compressed
};

gulp.task('sass', function () {
  return gulp.src('./sass/main.scss')
    .pipe($.sourcemaps.init())
    .pipe($.sass(sassOptions).on('error', $.sass.logError))
    .pipe($.autoprefixer(autoprefixerOptions))
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest('./css'))
    .on('end', function(){
        gutil.log('La tâche SASS est terminée.');
    });
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('jslint', function () {
    return gulp.src(['./js//**/*.js'])
            .pipe($.jslint({ /* this object represents the JSLint directives being passed down */ }))
            .pipe($.jslint.reporter( 'default' ));
});

gulp.task('images', function ()  {
  return gulp.src('./images/**/*')
    .pipe($.cache($.imagemin()))
    .pipe(gulp.dest('./images'));
});