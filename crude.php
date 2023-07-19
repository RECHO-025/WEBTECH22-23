<?php
// Establish database connection
$servername = "localhost"; // Replace with your database server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "ecommerce"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
// Add more fields as needed

// Insert new product into database
$sql = "INSERT INTO products (product_name, category_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $product_name, $category_id);
$result = $stmt->execute();
$stmt->close();

if ($result) {
    echo "Product added successfully.";
} else {
    echo "Error adding product: " . $conn->error;
}

$conn->close();
?>

<?php
// Establish database connection
$servername = "localhost"; // Replace with your database server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "ecommerce"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
// Add more fields as needed

// Update product in database
$sql = "UPDATE products SET product_name = ?, category_id = ? WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $product_name, $category_id, $product_id);
$result = $stmt->execute();
$stmt->close();

if ($result) {
    echo "Product updated successfully.";
} else {
    echo "Error updating product: " . $conn->error;
}

$conn->close();
?>

<?php
// Establish database connection
$servername = "localhost"; // Replace with your database server name
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "ecommerce"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$product_id = $_POST['product_id'];

// Delete product from database
$sql = "DELETE FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$result = $stmt->execute();
$stmt->close();

if ($result) {
    echo "Product deleted successfully.";
} else {
    echo "Error deleting product: " . $conn->error;
}

$conn->close();
?>
