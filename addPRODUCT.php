<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Add Product</title>
    <link rel="stylesheet" href="lenditemform.css">
    <style>
        .success-message {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>



<?php

include 'asconnect.php';

$success_message = "";
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'lendlocal');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File upload path
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["item-image"]["name"]);

    // Move uploaded file to the target directory
    if (move_uploaded_file($_FILES["item-image"]["tmp_name"], $target_file)) {
        // Prepare the SQL insert statement
        $stmt = $conn->prepare("INSERT INTO products (item_name, item_image, item_price,item_condition, item_Category,  lending_terms, lending_duration, special_requirements) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Bind parameters to the SQL statement
        $stmt->bind_param("ssdsssss", $item_name, $item_image, $item_price, $item_condition, $item_Category, $lending_terms, $lending_duration, $special_requirements);

        // Get input values from form
        $item_name = $_POST['item-name'];
        $item_image = $target_file;
        $item_price = $_POST['item-price'];
        $item_condition = $_POST['item-condition'];
        $item_Category = $_POST['item_Category'];
        $lending_terms = $_POST['lending-terms'];
        $lending_duration = $_POST['lending-duration'];
        $special_requirements = $_POST['special-requirements'];

        // Execute the statement
        if ($stmt->execute()) {
            // Set success message
            $success_message = "Your product has been added successfully.";
        } else {
            // Set error message
            $error_message = "Error: Could not add your product. Please try again.";
        }

        // Close statement
        $stmt->close();
    } else {
        $error_message = "Sorry, there was an error uploading your file.";
    }

    // Close connection
    $conn->close();
}
?>





<div class="container">

    <!-- Display success or error message -->
    <?php if (!empty($success_message)): ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php elseif (!empty($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <br><br><br>


    <h1>Resource Information</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <!-- List of Items Available for Lending -->
        <div id="items-section">
            <h2>List of Items Available for Lending</h2>
            <div class="item-group">
                <label for="item-name">Item Name:</label>
                <input type="text" id="item-name" name="item-name" placeholder="Enter the item name" required>

                <label for="item-image">Upload Image:</label>
                <input type="file" id="item-image" name="item-image" accept="image/*" required>

                <label for="item-price">Set Price:</label>
                <input type="number" id="item-price" name="item-price" placeholder="Enter the price" required>

                <button type="button" onclick="addItem()">Add Another Item</button>
            </div>
        </div>

        <!-- Condition of Items -->
        <div class="form-section">
            <label for="item-condition">Condition of Items:</label>
            <select id="item-condition" name="item-condition" required>
                <option value="" disabled selected>Select the condition</option>
                <option value="new">New</option>
                <option value="good">Good</option>
                <option value="fair">Fair</option>
                <option value="needs-repair">Needs Repair</option>
                <option value="used">Used</option>
            </select>
        </div>

       <!-- category of the items -->
       <div class="form-section">
            <label for="item_Category">Category of Item:</label>
            <select id="item-condition" name="item_Category" required>
            <option value="all">All Categories</option>
        <option value="books">Books</option>
        <option value="farming equipments">Farming Equipments</option>
        <option value="gardening tools">Gardening Tools</option>
        <option value="furniture">Furniture</option>
        <option value="outdoor gears">Outdoor Gears</option>
        <option value="craft supply">Craft Supply</option>
        <option value="tutoring services">Tutoring Services</option>
        <option value="other">Other</option>
            </select>
        </div>
        
        <!-- Lending Terms -->
        <div class="form-section">
            <label for="lending-terms">Lending Terms:</label>
            <textarea id="lending-terms" name="lending-terms" rows="4" placeholder="Enter the lending terms"></textarea>
        </div>

        <!-- Preferred Lending Duration -->
        <div class="form-section">
            <label for="lending-duration">Preferred Lending Duration:</label>
            <select id="lending-duration" name="lending-duration" required>
                <option value="" disabled selected>Select the duration</option>
                <option value="1-day">1 Day</option>
                <option value="1-week">1 Week</option>
                <option value="1-month">1 Month</option>
                <option value="3-months">3 Months</option>
                <option value="6-months">6 Months</option>
                <option value="1-year">1 Year</option>
            </select>
        </div>

        <!-- Special Requirements or Instructions -->
        <div class="form-section">
            <label for="special-requirements">Special Requirements or Instructions:</label>
            <textarea id="special-requirements" name="special-requirements" rows="4" placeholder="Enter any special requirements or instructions"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
