<!-- create_monthly_charge.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Insert new monthly charge
    $sql = "INSERT INTO monthly_charges (name, amount) VALUES ('$name', $amount)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Monthly Charge created successfully.";
    } else {
        echo "Error creating monthly charge: " . $conn->error;
    }
}
?>
