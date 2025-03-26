<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LendLocal - Skills or Service Provider Form</title>
    <link rel="stylesheet" href="skillshareform.css">
    <style>
        .success-message {
            color: green;
            font-weight: bold;
        }
        .error-message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Skills or Service Provider</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Database connection
            include 'asconnect.php';

            $experience = $_POST['experience'];
            $schedule = $_POST['availability'];
            $skills = $_POST['skills'];
            $prices = $_POST['prices'];
            $certifications = $_FILES['certifications'];

            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO Services (Service_name, Certication, Service_Price, Experience, Schedule) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $service_name, $certification_file, $price, $experience, $schedule);

            $totalSkills = count($skills);
            $isSuccessful = true; // Flag for overall success

            // Loop through each skill and insert into the database
            for ($i = 0; $i < $totalSkills; $i++) {
                $service_name = $skills[$i];
                $price = $prices[$i];

                // File handling for certifications
                if (!empty($certifications['name'][$i])) {
                    $certification_file = 'uploads/' . basename($certifications['name'][$i]);
                    move_uploaded_file($certifications['tmp_name'][$i], $certification_file);
                } else {
                    $certification_file = null; // If no certification is provided
                }

                // Execute the prepared statement for each skill/service
                if (!$stmt->execute()) {
                    $isSuccessful = false; // Set flag to false if there's an error
                    break; // Exit the loop on error
                }
            }

            // Check for successful submission
            if ($isSuccessful && $stmt->affected_rows > 0) {
                echo "<p class='success-message'>Services have been successfully submitted.</p>";
                // Redirect to the same page after successful submission
                header("Refresh: 2; url=" . $_SERVER['PHP_SELF']);
                exit(); // Terminate the script to avoid further processing
            } else {
                echo "<p class='error-message'>There was an error submitting your information. Please try again.</p>";
            }

            // Close the connection and statement
            $stmt->close();
            $conn->close();
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Skills or Services Offered Section -->
            <fieldset>
                <legend>Skills or Services Offered</legend>

                <div class="item-list">
                    <div class="skill-item">
                        <label for="skill1">Skill/Service:</label>
                        <input type="text" id="skill1" name="skills[]" required>

                        <label for="certification1">Certification or Proof (optional) (only jpeg, jpg):</label>
                        <input type="file" id="certification1" name="certifications[]">

                        <label for="price1">Price for Service:</label>
                        <input type="number" id="price1" name="prices[]" placeholder="Enter price in your currency" required>
                    </div>
                </div>

                <button type="button" class="add-skill-btn">Add More Skills/Services</button>
            </fieldset>

            <!-- Experience Level Section -->
            <fieldset>
                <legend>Experience Level</legend>

                <label for="experience">Select Experience Level:</label>
                <select id="experience" name="experience" required>
                    <option value="" disabled selected>Select your experience level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                    <option value="expert">Expert</option>
                </select>
            </fieldset>

            <!-- Availability Schedule Section -->
            <fieldset>
                <legend>Availability Schedule</legend>

                <label for="availability">Enter Your Availability:</label>
                <textarea id="availability" name="availability" placeholder="e.g., Monday to Friday, 9 AM to 5 PM" required></textarea>
            </fieldset>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <script>
        document.querySelector('.add-skill-btn').addEventListener('click', function () {
            const itemList = document.querySelector('.item-list');
            const newSkillItem = document.createElement('div');
            newSkillItem.classList.add('skill-item');
            newSkillItem.innerHTML = `
                <label for="skill">Skill/Service:</label>
                <input type="text" name="skills[]" required>

                <label for="certification">Certification or Proof (optional):</label>
                <input type="file" name="certifications[]">

                <label for="price">Price for Service:</label>
                <input type="number" name="prices[]" placeholder="Enter price in your currency" required>
            `;
            itemList.appendChild(newSkillItem);
        });
    </script>
</body>
</html>
