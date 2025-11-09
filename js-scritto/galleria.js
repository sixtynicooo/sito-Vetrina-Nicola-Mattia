let currentIndex = 0;

// scroll
let startX = 0;
let endX = 0;

const galleryContainer=document.querySelector(".gallery-container");
const imageElement = document.querySelector(".gallery-item .image img");
const titleElement = document.getElementById("title-description-img");
const descriptionElement = document.getElementById("description-img");

const prevButton = document.querySelector(".controls .prev");
const nextButton = document.querySelector(".controls .next");

const dotPiccoliSchermi= document.getElementById("dot-container-piccoli-schermi");


function updateGallery() {
    const image = images[currentIndex];
    imageElement.src = image.src;
    imageElement.alt='Immagine non disponibile'
    titleElement.textContent = image.title;

    descriptionElement.textContent = image.description;
    updateDots()
}

prevButton.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length; // Naviga verso la precedente
    updateGallery();
});

nextButton.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % images.length; // Naviga verso la successiva
    updateGallery();
});

galleryContainer.addEventListener('touchstart', (e) => {
    startX = e.changedTouches[0].screenX;
});

galleryContainer.addEventListener('touchend', (e) => {
    endX = e.changedTouches[0].screenX;

    const deltaX = endX - startX;
    if (Math.abs(deltaX) > 50) { // soglia minima per swipe
        if (deltaX < 0) {
            // swipe verso sinistra → avanti
            currentIndex = (currentIndex + 1) % images.length;
        } else {
            // swipe verso destra → indietro
            currentIndex = (currentIndex - 1 + images.length) % images.length;
        }
        updateGallery();
    }
});

/* gestione piccoli schermi */
function initDot(){
    const numeroDiSlide = images.length; // numero totale di immagini / slide
    for (let i = 0; i < numeroDiSlide; i++) {
        const dot = document.createElement("span");
        dot.classList.add("dot");
        dot.addEventListener("click", () => {
            currentIndex = i;
            updateGallery();
        });
        dotPiccoliSchermi.appendChild(dot);
  }
   updateDots()
}

/*  aggiorno colori per quello selezionato */
function updateDots() {
  const dots = dotPiccoliSchermi.querySelectorAll(".dot");
  dots.forEach((dot, index) => {
    if(index === currentIndex){
      dot.classList.add("active");
    } else {
      dot.classList.remove("active");
    }
  });
}

// Inizializza la galleria e dot
updateGallery();
initDot();