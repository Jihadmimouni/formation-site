<!-- delete_monthly_charge.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monthly_charge_id = $_POST['monthly_charge_id'];

    // Delete monthly charge
    $sql = "DELETE FROM monthly_charges WHERE monthly_charge_id = $monthly_charge_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Monthly Charge deleted successfully.";
    } else {
        echo "Error deleting monthly charge: " . $conn->error;
    }
}
?>
