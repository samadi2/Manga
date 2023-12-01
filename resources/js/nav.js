document.addEventListener("DOMContentLoaded", function () {
    const searchIcon = document.getElementById("search-icon1");
    const searchFormContainer = document.getElementById("search-form-container1");

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
document.addEventListener("DOMContentLoaded", function () {
    const quantityActions = document.querySelectorAll('.quantity-action');
    const grandTotalElement = document.getElementById('grand-total');

    quantityActions.forEach(function (action) {
        action.addEventListener('click', function () {
            const productId = this.dataset.id;
            const actionType = this.dataset.action;
            const quantityElement = document.querySelector(`.product-row[data-id="${productId}"] .quantity-value`);
            const price = parseFloat(document.querySelector(`.product-row[data-id="${productId}"]`).dataset.price);

            let quantity = parseInt(quantityElement.textContent);
            let oldTotal = price * quantity;

            if (actionType === 'increment') {
                quantity++;
            } else if (actionType === 'decrement' && quantity > 1) {
                quantity--;
                oldTotal = price * (quantity + 1); // Utilisez la quantité avant la décrémentation
            }

            quantityElement.textContent = quantity;

            // Mettez à jour le total du produit
            const totalElement = document.querySelector(`.product-row[data-id="${productId}"] td:last-child`);
            const newTotal = price * quantity;
            totalElement.textContent = newTotal.toFixed(2);

            // Mettez à jour le sous-total
            grandTotalElement.textContent = (parseFloat(grandTotalElement.textContent) - oldTotal + newTotal).toFixed(2);
        });
    });
});



// Description //

document.addEventListener("DOMContentLoaded", function () {
    const descriptionParagraph = document.getElementById("description");
    const toggleButton = document.getElementById("toggleButton");

    // Ajoutez un gestionnaire d'événements au bouton de bascule
    toggleButton.addEventListener("click", function () {
        // Basculez la visibilité du paragraphe
        if (descriptionParagraph.style.display === "none" || descriptionParagraph.style.display === "") {
            descriptionParagraph.style.display = "block";
        } else {
            descriptionParagraph.style.display = "none";
        }
    });
});