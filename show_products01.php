<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Share Resources Locally</title>
    <link rel="stylesheet" href="adv_afterlogin.css">
    <link rel="stylesheet" href="show_PRODUCT.css"> <!-- Added stylesheet link -->
    <link rel="icon" href="favicon 192.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <div class="logo"><strong>LendLocal</strong></div>
            <div class="search-bar">
                <input type="text" placeholder="Search for resources...">
                <button>Search</button>
            </div>
            <ul class="nav-links">
                <li><a href="#services">Services</a></li>
                <li><a href="10aboutus.html">About Us</a></li>
                <li><a href="12contactus.html">Contact Us</a></li>
                <li><a href="switch_lendertype.html">Switch to Lending</a></li>
                <li><a href="#">Log out</a></li> <!-- Added placeholder link -->
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero">
            <h1>Welcome to LendLocal</h1>
            <p>Your local platform for sharing and lending resources.</p>
            <a href="#services" class="btn">Explore Services</a>
        </section>

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

        <h1>Borrow Items</h1>
        <div class="filter-bar">
            <input type="text" id="search" placeholder="Search for items...">
            <button onclick="filterItems()">Search</button>
            <select id="category-filter" onchange="filterItems()">
                <option value="all">All Categories</option>
                <option value="books">Books</option>
                <option value="farming equipments">Farming Equipments</option>
                <option value="gardening tools">Gardening Tools</option>
                <option value="furniture">Furniture</option>
                <option value="outdoor gears">Outdoor Gears</option>
                <option value="craft supply">Craft Supply</option>
                <option value="tutoring services">Tutoring Services</option>
            </select>
        </div>

        <div class="items-container" id="items-container">
            <?php        
                include 'asconnect.php';

                // SQL query to fetch all products
                $sql = "SELECT item_name, item_image, item_price FROM products";
                $result = $conn->query($sql);
            ?>
            <div class="container">
                <h1>Available Products</h1>
                <div class="products-carousel">
                    <?php
                    if ($result->num_rows > 0) {
                        // Output data for each product
                        while ($row = $result->fetch_assoc()) {
                            $imagePath = htmlspecialchars($row["item_image"]); 
                            echo '<div class="product-card">';
                            echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row["item_name"]) . '">'; 
                            echo '<h2>' . htmlspecialchars($row["item_name"]) . '</h2>';
                            echo '<p><strong style="color: black;">Price: ₹</strong> <strong style="color: blue;">' . htmlspecialchars($row["item_price"]) . '</strong></p>';
                            echo '<button class="book-button">Book Now</button>';
                            echo '</div>'; // End of product-card
                        }
                    } else {
                        echo '<p>No products found.</p>';
                    }
                    ?>
                </div>
                <button class="carousel-button prev">❮</button>
                <button class="carousel-button next">❯</button>
            </div>
            <?php $conn->close(); ?>
        </div>
    </main>

    <br><br>

    <footer>
        <nav>
            <div class="logo"><strong>LendLocal</strong></div>
            <div class="nav-section">
                <ul class="nav-links">
                    <li><a href="#services">Services</a></li>
                    <li><a href="10aboutus.html">About Us</a></li>
                    <li><a href="12contactus.html">Contact Us</a></li>
                </ul>
            </div>
            <p>&copy; 2024 LendLocal. All rights reserved.</p>
        </nav>
    </footer>

    <script src="borrowpage.js"></script>
    <script src="showPRODUCT.js"></script> 
    <script>
        // JavaScript for carousel functionality
        const carousel = document.querySelector('.products-carousel');
        const nextButton = document.querySelector('.carousel-button.next');
        const prevButton = document.querySelector('.carousel-button.prev');

        nextButton.addEventListener('click', () => {
            carousel.scrollBy({ left: 220, behavior: 'smooth' }); // Adjust scroll amount based on card width
        });

        prevButton.addEventListener('click', () => {
            carousel.scrollBy({ left: -220, behavior: 'smooth' }); // Adjust scroll amount based on card width
        });
    </script>
</body>

</html>  

