<!-- delete_charge.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $charge_id = $_POST['charge_id'];

    // Delete charge
    $sql = "DELETE FROM charges WHERE charge_id = $charge_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Charge deleted successfully.";
    } else {
        echo "Error deleting charge: " . $conn->error;
    }
}
?>
