<?php
// Includi header e navigazione
include  '../include/header.php';
include  '../include/nav.php';
?>
<main class="home-page">
    <section class="hero">
        <h1>Benvenuto nel nostro sito!</h1>
        <p>Esplora contenuti unici e scopri di più su di noi. Qui troverai informazioni interessanti, immagini spettacolari e tanto altro.</p>
    </section>






    <section class="gallery">
        <h2>Galleria con Descrizione</h2>
        <div class="gallery-container">
            <div class="gallery-item">
                <div class="image">
                    <img src="../img/1.jpg" alt="Descrizione immagine 1">
                </div>
                <div class="description">
                    <h3>Immagine 1</h3>
                    <p>Questa è la descrizione della prima immagine. Può essere un testo informativo o descrittivo.</p>
                </div>
            </div>
            <div class="controls">
                <button class="prev">← Precedente</button>
                <button class="next">Successivo →</button>
            </div>
        </div>
    </section>


    <script>
        let currentIndex = 0;
        const images = [{
                src: "../img/1.jpg",
                title: "Immagine 1",
                description: "Questa è la descrizione della prima immagine."
            },
            {
                src: "../img/2.jpg",
                title: "Immagine 2",
                description: "Questa è la descrizione della prima immagine."
            },
            {
                src: "../img/3.jpg",
                title: "Immagine 2",
                description: "Questa è la descrizione della seconda immagine."
            },
            {
                src: "../img/4.jpg",
                title: "Immagine 3",
                description: "Questa è la descrizione della terza immagine."
            }
        ];

        const imageElement = document.querySelector(".gallery-item .image img");
        const titleElement = document.querySelector(".gallery-item .description h3");
        const descriptionElement = document.querySelector(".gallery-item .description p");

        const prevButton = document.querySelector(".controls .prev");
        const nextButton = document.querySelector(".controls .next");

        function updateGallery() {
            const image = images[currentIndex];
            console.log(image)
            console.log(imageElement)

            imageElement.src = image.src;
            titleElement.textContent = image.title;
            descriptionElement.textContent = image.description;
        }

        prevButton.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length; // Naviga verso la precedente
            updateGallery();
        });

        nextButton.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % images.length; // Naviga verso la successiva
            updateGallery();
        });

        // Inizializza la galleria
        updateGallery();
    </script>


</main>
<?php
// Includi header e navigazione
include  '../include/footer.php';
?>