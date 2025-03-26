<?php
include 'asconnect.php';

// SQL query to fetch all products
$sql = "SELECT item_name, item_image, item_price FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Display</title>
    <link rel="stylesheet" href="show_PRODUCT.css"> <!-- Optional: Link to external CSS file -->
</head>
<body>
    <div class="container">
        <h1>Available Products</h1>
        <div class="products-grid">
        <?php
            if ($result->num_rows > 0) {
                // Output data for each product
                while ($row = $result->fetch_assoc()) {
                    $imagePath = htmlspecialchars($row["item_image"]); 
                    echo '<div class="product-card">';
                    echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row["item_name"]) . '">'; 
                    echo '<h2>' . htmlspecialchars($row["item_name"]) . '</h2>';
                    echo '<p><strong style="color: black;">Price: ₹</strong> <strong style="color: blue;">' . htmlspecialchars($row["item_price"]) . '</strong></p>';
                    // Updated to include only one booking button
                    echo '<button class="book-button">Book Now</button>';
                    echo '</div>'; // End of product-card
                }
            } else {
                echo '<p>No products found.</p>';
            }
        ?>
        </div>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
