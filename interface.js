// Assuming you have a backend API that returns borrowed/lent items
fetch('/api/borrowed-items')
  .then(response => response.json())
  .then(data => {
    const borrowedItemsList = document.getElementById('borrowed-items-list');
    data.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.name}</td>
        <td>${item.lender}</td>
        <td>${item.returnDate}</td>
        <td><button>Return</button></td>
      `;
      borrowedItemsList.appendChild(row);
    });
  })
  .catch(error => console.error(error));