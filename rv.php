<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $adhaar = isset($_POST['adhaar']) ? $_POST['adhaar'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;}

    // Check if all required fields are filled
    if ($name && $adhaar && $email && $password) {
        // Database connection
        $conn = new mysqli("localhost", "username", "", "register");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO users (name, adhaar, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $adhaar, $email, $password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        
        $stmt->close();
        $conn->close();
    }
    ?>