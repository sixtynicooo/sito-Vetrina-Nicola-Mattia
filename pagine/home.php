<?php
// Includi header e navigazione
include  '../include/header.php';
include  '../include/nav.php';
?>
<main class="home-page">
    <section class="title-section">
        <h1>Benvenuto nel nostro sito!</h1>
        <p>Esplora contenuti unici e scopri di più su di noi. Qui troverai informazioni interessanti, immagini spettacolari e tanto altro.</p>
    </section>
    <?php
    // galleria
    include  '../include/galleria.php';
    ?>
    <script>
        const images = [{
                src: "../img/home/1.jpg",
                title: "Immagine 1",
                description: "Questa è la descrizione della prima immagine."
            },
            {
                src: "../img/home/2.jpg",
                title: "Immagine 2",
                description: "Questa è la descrizione della prima immagine."
            },
            {
                src: "../img/home/3.jpg",
                title: "Immagine 2",
                description: "Questa è la descrizione della seconda immagine."
            },
            {
                src: "../img/home/4.jpg",
                title: "Immagine 3",
                description: "Questa è la descrizione della terza immagine."
            }
        ];
    </script>
    <!-- metto codice js per galleria -->
    <script src="../js/galleria.js" defer></script>
</main>
<?php
// Includi header e navigazione
include  '../include/footer.php';
?>