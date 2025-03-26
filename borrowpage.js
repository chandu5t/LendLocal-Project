// Function to filter items based on search input and category
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

// Function to add item to borrow list with a message
function borrowItem() {
    alert('Item added to your borrow list!');
}

// Function to handle visibility of items on scroll
function handleScroll() {
    const items = document.querySelectorAll('.item');
    const windowHeight = window.innerHeight;
    const offset = 150; // Offset to start animation before item is fully in view

    items.forEach(item => {
        const itemTop = item.getBoundingClientRect().top;
        if (itemTop < windowHeight - offset) {
            item.classList.add('visible');
        }
    });
}

// Initial call to handleScroll and add event listener for scroll
window.addEventListener('scroll', handleScroll);

// Initial call to handleScroll to ensure items are shown on page load
handleScroll();
