<?php
// Connect to the database (same as above)
$host = 'localhost';
$username = 'root';
$password = '';

$database = 'mcms_2080';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Remove a product from the inventory
if (isset($_GET['delete_inventory'])) {
    $product_id = $_GET['delete_inventory'];

    $sql = "DELETE FROM inventory WHERE id = $inventory_id";

    if ($conn->query($sql) === TRUE) {
        echo "Product removed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

  $conn->close();
?>

<!-- HTML code for displaying and removing products -->
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Management</title>
</head>
<body>
    <h1>Inventory Management</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
        // Retrieve and display products from the database
        $sql = "SELECT * FROM inventory";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td><a href='?delete_inventory=" . $row['id'] . "'>Remove</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No inventory</td></tr>";
        }
        ?>
    </table>
</body>
</html>