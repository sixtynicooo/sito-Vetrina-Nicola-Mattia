const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create();

// Percorsi dei file SCSS, CSS e JavaScript
const paths = {
    scss: './scss/**/*.scss',  // Cartella e tutti i file SCSS
    css: './css/',              // Cartella di destinazione per i file CSS compilati
    php: './**/*.php',          // Osserva anche tutti i file PHP
    js: './js-scritto/**/*.js', // JavaScript personalizzati
    jsDist: './js/'             // Cartella di destinazione per i file JavaScript minificati
};

// Task per compilare SCSS e minificare CSS
gulp.task('sass', function () {
    return gulp.src(paths.scss)      // Sorgente dei file SCSS
        .pipe(sass().on('error', sass.logError))  // Compilazione SCSS in CSS
        .pipe(cleanCSS())  // Minifica il CSS
        .pipe(gulp.dest(paths.css))   // Salva il file CSS compilato nella cartella 'css'
        .pipe(browserSync.stream()); // Invia il CSS compilato a BrowserSync per aggiornare la pagina
});

// Task per minificare JavaScript
gulp.task('minify-js', function () {
    return gulp.src(paths.js)         // Sorgente dei file JavaScript
        .pipe(terser())               // Minifica il JavaScript
        .pipe(gulp.dest(paths.jsDist)); // Salva il file minificato nella cartella 'js'
});

// Task per avviare il server e osservare i file
gulp.task('serve', function (done) {
    browserSync.init({
        proxy: 'http://localhost:3000',
        notify: false
    });

    gulp.watch(paths.scss, gulp.series('sass'));
    gulp.watch(paths.js, gulp.series('minify-js', function (innerDone) {
        browserSync.reload();
        innerDone();
    }));
    gulp.watch(paths.php).on('change', browserSync.reload);

    done();
});


// Task di default
gulp.task('default', gulp.series('sass', 'minify-js', 'serve')); // Esegui sass, minify-js e poi il server
