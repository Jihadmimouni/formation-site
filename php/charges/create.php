<!-- create_charge.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Insert new charge
    $sql = "INSERT INTO charges (name, amount) VALUES ('$name', $amount)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Charge created successfully.";
    } else {
        echo "Error creating charge: " . $conn->error;
    }
}
?>
