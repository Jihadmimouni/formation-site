<!-- create_formation_charge.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formation_id = $_POST['formation_id'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Insert new formation charge
    $sql = "INSERT INTO formation_charges (formation_id, name, amount) VALUES ($formation_id, '$name', $amount)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Formation Charge created successfully.";
    } else {
        echo "Error creating formation charge: " . $conn->error;
    }
}
?>
