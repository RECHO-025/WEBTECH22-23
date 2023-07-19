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

// Retrieve category_id from query string
$category_id = $_GET['category_id'];

// Retrieve products by category from database
$sql = "SELECT * FROM products WHERE category_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $category_id);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

// Display products
while ($row = $result->fetch_assoc()) {
    echo "Product ID: " . $row['product_id'] . "<br>";
    echo "Product Name: " . $row['product_name'] . "<br>";
    // Display more product details as needed
    echo "<br>";
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

// Retrieve product_id from query string
$product_id = $_GET['product_id'];

// Retrieve product details from database
$sql = "SELECT * FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

// Display product details
if ($row = $result->fetch_assoc()) {
    echo "Product ID: " . $row['product_id'] . "<br>";
    echo "Product Name: " . $row['product_name'] . "<br>";
    // Display more product details as needed
} else {
    echo "Product not found.";
}

$conn->close();
?>
