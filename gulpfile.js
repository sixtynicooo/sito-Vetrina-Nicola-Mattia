const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const browserSync = require('browser-sync').create();

// Percorsi dei file SCSS e CSS
const paths = {
    scss: './scss/**/*.scss',  // Cartella e tutti i file SCSS
    css: './css/',              // Cartella di destinazione per i file CSS compilati
    php: './**/*.php'          // Osserva anche tutti i file PHP
};

// Task per compilare SCSS e minificare CSS
gulp.task('sass', function () {
    return gulp.src(paths.scss)      // Sorgente dei file SCSS
        .pipe(sass().on('error', sass.logError))  // Compilazione SCSS in CSS
        .pipe(cleanCSS())  // Minifica il CSS
        .pipe(gulp.dest(paths.css))   // Salva il file CSS compilato nella cartella 'css'
        .pipe(browserSync.stream()); // Invia il CSS compilato a BrowserSync per aggiornare la pagina
});

// Task per avviare il server e osservare i file PHP
gulp.task('serve', function () {
    // Avvia il server di BrowserSync
    browserSync.init({
        proxy: 'http://localhost:3000', // Cambia con l'URL del tuo server PHP
        notify: false   // Disabilita le notifiche di BrowserSync nel browser
    });

    // Osserva i file SCSS e PHP per le modifiche
    gulp.watch(paths.scss, gulp.series('sass')); // Guarda i file SCSS per modifiche
    gulp.watch(paths.php).on('change', browserSync.reload); // Ricarica la pagina quando un file PHP viene modificato
});

// Task di default
gulp.task('default', gulp.series('sass', 'serve')); // Esegui sass e poi il server
