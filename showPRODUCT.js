// // JavaScript for filtering items based on search and category
// function filterItems() {
//     const searchInput = document.getElementById('search').value.toLowerCase();
//     const categoryFilter = document.getElementById('category-filter').value;
//     const itemsContainer = document.getElementById('items-container');
//     const productCards = itemsContainer.getElementsByClassName('product-card');

//     for (let i = 0; i < productCards.length; i++) {
//         const productName = productCards[i].querySelector('h2').textContent.toLowerCase();
//         const productCategory = productCards[i].dataset.category.toLowerCase();

//         const matchesSearch = productName.includes(searchInput);
//         const matchesCategory = categoryFilter === 'all' || productCategory === categoryFilter;

//         if (matchesSearch && matchesCategory) {
//             productCards[i].style.display = 'block'; // Show matching cards
//         } else {
//             productCards[i].style.display = 'none'; // Hide non-matching cards
//         }
//     }
// }



// JavaScript for filtering items based on search and category
function filterItems() {
    const searchInput = document.getElementById('search').value.toLowerCase();
    const categoryFilter = document.getElementById('category-filter').value;
    const itemsContainer = document.getElementById('items-container');
    const productCards = itemsContainer.getElementsByClassName('product-card');

    for (let i = 0; i < productCards.length; i++) {
        const productName = productCards[i].querySelector('h2').textContent.toLowerCase();
        const productCategory = productCards[i].dataset.category.toLowerCase();

        const matchesSearch = productName.includes(searchInput);
        const matchesCategory = categoryFilter === 'all' || productCategory === categoryFilter;

        if (matchesSearch && matchesCategory) {
            productCards[i].style.display = 'block';
        } else {
            productCards[i].style.display = 'none';
        }
    }
}
