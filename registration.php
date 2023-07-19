<?php
// establish database connection
$servername = "localhost"; // Replace with your database server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "laptop_store"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Server-side validation
$errors = array();

if (empty($fullname)) {
    $errors[] = "Full Name is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($password)) {
    $errors[] = "Password is required.";
}

// If there are validation errors, display them and exit
if (!empty($errors)) {
    echo "Validation Errors:<br>";
    foreach ($errors as $error) {
        echo "- " . $error . "<br>";
    }
    exit;
}
// Insert data into the database
$sql = "INSERT INTO customers (first_name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $fullname, $email, $password);

if ($stmt->execute()) {
    echo "Registration successful.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
