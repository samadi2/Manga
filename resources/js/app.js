import './bootstrap';
import './nav';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//  Carousel //
let slideIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');

function showSlide(n) {
    if (n >= slides.length) {
        slideIndex = 0;
    } else if (n < 0) {
        slideIndex = slides.length - 1;
    }

    slides.forEach((slide) => (slide.style.display = 'none'));
    slides[slideIndex].style.display = 'block';
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}

showSlide(slideIndex); 


setInterval(nextSlide, 3000);

// barre de recherche //


document.addEventListener("DOMContentLoaded", function () {
    const searchIcon = document.getElementById("search-icon");
    const searchFormContainer = document.getElementById("search-form-container");

    // Écoutez le clic sur l'icône de recherche
    searchIcon.addEventListener("click", function () {
        if (searchFormContainer.style.display === "none" || searchFormContainer.style.display === "") {
            searchFormContainer.style.display = "block";
        } else {
            searchFormContainer.style.display = "none";
        }
    });
});


// Cart  //


const updateButtons = document.querySelectorAll('.update-quantity');
updateButtons.forEach(button => {
    button.addEventListener('click', function () {
        const itemId = this.getAttribute('data-id');
        const newQuantity = this.previousElementSibling.value;
    });
});
$(document).ready(function() {
    // Écoutez le changement de la quantité
    $('.quantity-input').on('input', function() {
        // Obtenez la nouvelle quantité
        var newQuantity = $(this).val();

        // Mettez à jour la quantité dans le DOM ou envoyez la nouvelle quantité au serveur
        // ...

        // Mettez à jour le total en fonction de la nouvelle quantité
        updateTotal();
    });

    // Fonction pour mettre à jour le total
    function updateTotal() {
        var total = 0;

        // Calculez le nouveau total en parcourant toutes les lignes de la table
        // ...

        // Mettez à jour le total dans le DOM
        $('#total-amount').text(total);
    }

    // Écoutez le clic sur le bouton "Mettre à jour"
    $('.update-quantity').on('click', function() {
        // Obtenez l'ID de l'élément associé à ce bouton
        var itemId = $(this).data('id');

        // Mettez à jour la quantité côté serveur ou dans le DOM
        // ...

        // Mettez à jour le total en fonction de la nouvelle quantité
        updateTotal();
    });
});
