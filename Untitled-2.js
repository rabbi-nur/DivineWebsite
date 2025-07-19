// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', () => {
    console.log('Product page loaded and ready.');

    const addToCartButton = document.getElementById('add-to-cart-btn');

    if (addToCartButton) {
        addToCartButton.addEventListener('click', function() {
            // Retrieve product name from data attribute
            const productName = this.dataset.productName;
            alert(productName + " added to cart!");
            // In a real app, this would be an AJAX call
            console.log('Item added.');
        });
    }
});