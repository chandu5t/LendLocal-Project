window.addEventListener('load', function() {
    const container = document.querySelector('.container');
    const items = container.querySelectorAll('.gallery-item');
    
    function adjustItemHeight() {
        // Reset the height of all items
        items.forEach(item => item.style.height = 'auto');
        
        // Get bounding boxes and calculate the max height for each row
        const rowHeights = [];
        items.forEach(item => {
            const rect = item.getBoundingClientRect();
            const row = Math.floor(rect.top / (rect.height + 15)); // Adjust for the gap
            if (!rowHeights[row]) {
                rowHeights[row] = 0;
            }
            rowHeights[row] = Math.max(rowHeights[row], rect.bottom);
        });

        // Set the height for each item based on the max height in its row
        items.forEach(item => {
            const rect = item.getBoundingClientRect();
            item.style.height = rowHeights[Math.floor(rect.top / (rect.height + 15))] - rect.top + 'px';
        });
    }
    
    adjustItemHeight();
    window.addEventListener('resize', adjustItemHeight); // Adjust on resize
});
