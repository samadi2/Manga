import './bootstrap';

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
    $(".add-to-cart-button").click(function() {
        var articleId = $(this).data("article");
        
        // Effectuez une requête AJAX pour ajouter l'article au panier, par exemple :
        // $.post('/cart/add', { article_id: articleId }, function(response) {
        //     // Affichez le popup avec le message de succès
        //     $("#cart-popup").fadeIn().delay(2000).fadeOut();
        // });
        
        // Pour l'exemple, affichons simplement le popup sans requête AJAX
        $("#cart-popup").fadeIn().delay(2000).fadeOut();
    });
});