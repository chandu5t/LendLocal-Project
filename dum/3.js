function filterItems() {
    const searchInput = document.getElementById('search').value.toLowerCase();
    const categoryFilter = document.getElementById('category-filter').value;
    const items = document.querySelectorAll('.item');

    items.forEach(item => {
        const title = item.querySelector('h3').innerText.toLowerCase();
        const category = item.getAttribute('data-category');

        if ((title.includes(searchInput) || searchInput === '') && (category === categoryFilter || categoryFilter === 'all')) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

function borrowItem() {
    alert('Item added to your borrow list!');
}
