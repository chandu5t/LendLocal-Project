<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Share Resources Locally</title>
    <link rel="stylesheet" href="adv_afterlogin.css">
    <link rel="icon" href="favicon 192.png" type="image/x-icon">
    <script>
        function searchItems() {
            const searchQuery = document.getElementById('search').value.toLowerCase();
            const productCards = document.querySelectorAll('.product-card');
            const serviceCards = document.querySelectorAll('.offering-card');
            let found = false; // To track if any items are found

            // Filter products
            productCards.forEach(card => {
                const itemName = card.querySelector('h3').textContent.toLowerCase();
                if (itemName.includes(searchQuery)) {
                    card.style.display = 'block';
                    found = true; // Mark as found
                } else {
                    card.style.display = 'none';
                }
            });

            // Filter services
            serviceCards.forEach(card => {
                const serviceName = card.querySelector('h4').textContent.toLowerCase();
                if (serviceName.includes(searchQuery)) {
                    card.style.display = 'block';
                    found = true; // Mark as found
                } else {
                    card.style.display = 'none';
                }
            });

            // Display message based on search result
            const messageElement = document.getElementById('search-message');
            if (found) {
                messageElement.textContent = 'Search successful! Items found.';
                messageElement.style.color = 'green';
            } else {
                messageElement.textContent = 'No items matched your search.';
                messageElement.style.color = 'red';
            }
        }
    </script>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><strong><big>LendLocal</big></strong></div>
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search for resources..." onkeyup="searchItems()">
                <button onclick="searchItems()">Search</button>
            </div>

            <ul class="nav-links">
                <li><a href="#services">Services</a></li>
                <li><a href="10aboutus.html">About Us</a></li>
                <li><a href="12contactus.html">Contact Us</a></li>
                <li><a href="switch_lendertype.html">Switch to Lending</a></li>
                <li><a href="">Log out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero">
            <h1>Welcome to LendLocal</h1>
            <p>Your local platform for sharing and lending resources.</p>
            <a href="#services" class="btn">Explore Services</a>
        </section>

        <!-- Add a placeholder for the search result message -->
        <p id="search-message" style="text-align: center; font-weight: bold;"></p>

        <section id="offerings">
            <h2>Popular Services</h2>
            <div class="offerings-list">
                <div class="offering-card offering-card7">
                    <h4>Farming Equipments</h4>
                    <img src="popular services images/Framing Equipments.jpg" alt="Farming Equipments" class="offering-image">
                </div>
                <div class="offering-card offering-card1">
                    <h4>Books</h4>
                    <img src="popular services images/Book Exchange.jpg" alt="Book Exchange" class="offering-image">
                </div>
                <div class="offering-card offering-card6">
                    <h4>Gardening Tools</h4>
                    <img src="popular services images/Gardening tools.jpg" alt="Gardening tools" class="offering-image">
                </div>
                <div class="offering-card offering-card2">
                    <h4>Furniture</h4>
                    <img src="popular services images/Furniture Lending.jpg" alt="Furniture Lending" class="offering-image">
                </div>
                <div class="offering-card offering-card3">
                    <h4>Outdoor Gear</h4>
                    <img src="popular services images/Outdoor Gear Rental.jpg" alt="Outdoor Gear Rental" class="offering-image">
                </div>
                <div class="offering-card offering-card4">
                    <h4>Craft Supply</h4>
                    <img src="popular services images/Craft Supply Sharing.jpg" alt="Craft Supply Sharing" class="offering-image">
                </div>
                <div class="offering-card offering-card5">
                    <h4>Tutoring Services</h4>
                    <img src="popular services images/Tutoring Services.jpg" alt="Tutoring Services" class="offering-image">
                </div>
            </div>
        </section>

        <section id="services">
            <h2>Available Services</h2>
            <div class="service-list">
                <div class="service-item">
                    <img src="lend image.jpg" alt="Tool Lending" class="service-image">
                    <h2>Tool Lending</h2>
                    <p>Borrow tools from your neighbors and save money on your projects.</p>
                </div>
                <div class="service-item">
                    <img src="skill sharing image.jpg" alt="Skill Sharing" class="service-image">
                    <h2>Skill Sharing</h2>
                    <p>Share your skills and learn from others in your community.</p>
                </div>
                <div class="service-item">
                    <img src="appliance sharing.jpg" alt="Appliance Rental" class="service-image">
                    <h2>Appliance Rental</h2>
                    <p>Rent appliances for special occasions without the hassle of ownership.</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
