<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Share Resources Locally</title>
    <link rel="stylesheet" href="adv_afterlogin.css">
    <link rel="icon" href="favicon 192.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <div class="logo"><strong><big>LendLocal</big></strong></div>
            <div class="search-bar">
                <input type="text" placeholder="Search for resources...">
                <button>Search</button>
            </div>

            <ul class="nav-links">
                <li><a href="#services">Services</a></li>
                <li><a href="10aboutus.html">About Us</a></li>
                <li><a href="12contactus.html">Contact Us</a></li>
                <li><a href="switch_lendertype.html">Switch to Lending</a></li>
                <!--log out work remain-->
                <li><a href=""></a>Log out</li>
                
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
                    <img src="popular services images/Framing Equipments.jpg" alt="Farming Equipments"
                        class="offering-image">
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
                    <img src="popular services images/Furniture Lending.jpg" alt="Furniture Lending"
                        class="offering-image">
                </div>

                <div class="offering-card offering-card3">
                    <h4>Outdoor Gear </h4>
                    <img src="popular services images/Outdoor Gear Rental.jpg" alt="Outdoor Gear Rental"
                        class="offering-image">
                </div>

                <div class="offering-card offering-card4">
                    <h4>Craft Supply </h4>
                    <img src="popular services images/Craft Supply Sharing.jpg" alt="Craft Supply Sharing"
                        class="offering-image">
                </div>

                <div class="offering-card offering-card5">
                    <h4>Tutoring Services</h4>
                    <img src="popular services images/Tutoring Services.jpg" alt="Tutoring Services"
                        class="offering-image">
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

    <main>
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




        <!-- <div class="items-container" id="items-container">

            <div class="item" data-category="books">
                <img src="books images/A Man Called Ove.webp" alt="A Man Called Ove">
                <h3>A Man Called Ove</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/death-an-inside-story-original.webp" alt="death-an-inside-story-original">
                <h3>death-an-inside-story-original</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/The Art of Laziness.webp" alt="The Art of Laziness">
                <h3>The Art of Laziness</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/The Art of War.webp" alt="The Art of War">
                <h3>The Art of War</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/The Mountain Is You.webp" alt="The Mountain Is You">
                <h3>The Mountain Is You</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/The Psychology of Money.webp" alt="The Psychology of Money">
                <h3>The Psychology of Money</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/YOU ONLY LIVE ONCE.webp" alt="YOU ONLY LIVE ONCE">
                <h3>The Mountain Is You</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="books">
                <img src="books images/Ayushyache Dhade Girvtana.jpg" alt="Ayushyache Dhade Girvtana">
                <h3>Ayushyache Dhade Girvtana</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>


            <div class="item" data-category="farming equipments">
                <img src="farming images/crop cultivator.jpeg" alt="crop cultivator">
                <h3>Crop Cultivator</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="farming equipments">
                <img src="farming images/cultivator.jpeg" alt="cultivator">
                <h3>cultivator</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="farming equipments">
                <img src="farming images/plough.jpeg" alt="plough">
                <h3>plough</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="farming equipments">
                <img src="farming images/power tiller.jpeg" alt="power tiller">
                <h3>power tiller</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="farming equipments">
                <img src="farming images/rotavator.jpg" alt="rotavator">
                <h3>rotavator</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="farming equipments">
                <img src="farming images/seed drill.jpeg" alt="seed drill">
                <h3>seed drill</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>

          
            <div class="item" data-category="furniture">
                <img src="furniture images/Desk Chair.jpg" alt="Desk Chair">
                <h3>Desk Chair</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="furniture">
                <img src="furniture images/Desk Lamp.jpg" alt="Desk Lamp">
                <h3>Desk Lamp</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="furniture">
                <img src="furniture images/Rocking Chair.webp" alt="Rocking Chair">
                <h3>Rocking Chair</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="furniture">
                <img src="furniture images/Sofas.webp" alt="Sofas">
                <h3>Sofas</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="furniture">
                <img src="furniture images/Study Tables.webp" alt="Study Tables">
                <h3>Study Tables</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>
            <div class="item" data-category="furniture">
                <img src="furniture images/Wardrobes.webp" alt="Wardrobes">
                <h3>Wardrobes</h3>
                <p>Available to borrow</p>
                <button onclick="borrowItem()">Borrow</button>
            </div>




        </div> -->




        <!-- Display Product here -->
        
        <div class="products-container">
            <div class="products-grid">
                <?php
                // Connect to your database
                include 'asconnect.php';


                // Fetch products from the database
                $sql = "SELECT item_name, item_image, item_price, lending_duration FROM products"; // Ensure your table name and column names are correct
                $result = $conn->query($sql);

                // Check if there are products
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="product-card">';
                        echo '<img src="' . $row['item_image'] . '" alt="' . $row['item_name'] . '" class="product-image">';
                        echo '<h2>' . $row['item_name'] . '</h2>';
                        // echo '<p>Price: ₹' . $row['item_price'] . '</p>'; // Display item price
                        echo '<p><strong style="color: black;">Price: ₹</strong> <strong style="color: blue;">' . htmlspecialchars($row["item_price"]) . '</strong></p>';
                        echo '<p> Duration: ' . $row['lending_duration'] . '</p>'; // Display lending duration
                        // echo '<button class="book-button onclick="window.location.href=\'payment.html\' ">Book Now</button>'; // Add a borrow button
                        echo '<button class="book-button" onclick="location.href=\'payment.html\'">Book Now</button>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No products found.</p>';
                }

                // Close connection
                $conn->close();
                ?>
            </div>
        </div>






        <!-- Display Services here -->
<!-- Display Services here -->
<div class="services-container">
    <h1 class="service-title">Our Skill Services</h1> <!-- Add a title for the services section -->
    <div class="services-grid">
        <?php
        // Connect to your database
        include 'asconnect.php';

        // Fetch services from the database
        $sql = "SELECT Certication, Service_name, Service_Price, Schedule FROM services";
        $result = $conn->query($sql);

        // Check if query execution was successful
        if (!$result) {
            // If query fails, print error message
            echo '<p>Error: ' . mysqli_error($conn) . '</p>';
            exit;
        }

        // Check if there are services in the result
        if ($result->num_rows > 0) {
            // Fetch and display each service
            while ($row = $result->fetch_assoc()) {
                echo '<div class="service-card">';
                echo '<img src="' . htmlspecialchars($row["Certication"]) . '" alt="Certification Image" class="service-image">'; // Display image with class for styling
                echo '<h2>' . htmlspecialchars($row["Service_name"]) . '</h2>'; // Display service name
                echo '<p><strong>Price:</strong> ₹' . htmlspecialchars($row["Service_Price"]) . '</p>'; // Display service price
                echo '<p><strong>Schedule:</strong> ' . htmlspecialchars($row["Schedule"]) . '</p>'; // Display schedule
                echo '<button class="book-button">Book Now</button>'; // Add a "Book Now" button
                echo '</div>';
            }
        } else {
            // If no services found
            echo '<p>No services found.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</div>



                
    </main>



    <footer>
        <nav>
            <div class="logo"><strong><big>LendLocal</big></strong></div>

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
    <script src="script.js"></script>
</body>

</html>