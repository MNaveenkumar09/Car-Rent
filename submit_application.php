<?php
// Include database connection
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $carModel = $conn->real_escape_string($_POST['carModel']);
    $price = $conn->real_escape_string($_POST['price']);

    // SQL query to insert data into the applications table
    $sql = "INSERT INTO carrental (name, email, carModel, price) 
            VALUES ('$name', '$email', '$carModel', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>


