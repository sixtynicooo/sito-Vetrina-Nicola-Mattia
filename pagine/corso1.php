<?php
// Includi header e navigazione
include  '../include/header.php';
include  '../include/nav.php';
?>
<div class="corso1">
    <div class="contenitore-corso">
        <h1>Benvenuto al Corso 1</h1>
        <p>
            Questo corso è progettato per fornirti le conoscenze necessarie su [argomento del corso].
            Approfondiremo insieme le seguenti tematiche:
        </p>
        <ul>
            <li>Introduzione all'argomento</li>
            <li>Concetti base e fondamentali</li>
            <li>Strumenti e risorse utili</li>
            <li>Pratica e progetti reali</li>
        </ul>
    </div>

    <!-- Galleria - Aggiungi qui la tua galleria -->
    <?php
    // galleria
    include  '../include/galleria.php';
    ?>
    <script>
        // modifica immagini
        const images = [{
                src: "../img/page1/1.jpg",
                title: "Immagine 1",
                description: "Questa è la descrizione della prima immagine."
            },
            {
                src: "../img/page1/2.jpg",
                title: "Immagine 2",
                description: "Questa è la descrizione della prima immagine."
            },
            {
                src: "../img/page1/3.jpg",
                title: "Immagine 2",
                description: "Questa è la descrizione della seconda immagine."
            },
            {
                src: "../img/page1/4.jpg",
                title: "Immagine 3",
                description: "Questa è la descrizione della terza immagine."
            }
        ];
    </script>
    <!-- metto codice js per galleria -->
    <script src="../js/galleria.js"></script>


    <div class="sezione-testimonianze">
        <h2>Cosa dicono i partecipanti</h2>
        <div class="testimonianza">
            <p>"Il corso è stato fantastico! Ho imparato tantissimo e mi sento molto più sicuro delle mie capacità."</p>
            <span>- Mario Rossi</span>
        </div>
        <div class="testimonianza">
            <p>"Insegnanti eccellenti e materiali utili. Lo consiglio a chiunque voglia migliorare le proprie competenze."</p>
            <span>- Anna Bianchi</span>
        </div>
    </div>

    <div class="sezione-iscrizione">
        <h2>Iscriviti al Corso</h2>
        <p>Non perdere l'opportunità di far parte di questa esperienza formativa unica. Prenota il tuo posto oggi stesso!</p>

    </div>
</div>


<?php
// Includi header e navigazione
include  '../include/footer.php';
?>