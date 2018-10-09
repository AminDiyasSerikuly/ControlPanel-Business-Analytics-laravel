var gulp =  require('gulp');
var minifycss =  require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');


gulp.task('css',function(){
    return gulp.src('public/css/inworker-header.css')
        .pipe(autoprefixer('last 50 version'))
        .pipe(minifycss())
        .pipe(gulp.dest('public/css/min'))
        .pipe(notify({message:'Allhamdullilah all done Amin'}));
});
gulp.task('default',function(){
    gulp.run('css');
    gulp.watch('public/css/*.css' , function (){
       gulp.run('css');
    });
});