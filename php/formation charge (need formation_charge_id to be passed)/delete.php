<!-- delete_formation_charge.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formation_charge_id = $_POST['formation_charge_id'];

    // Delete formation charge
    $sql = "DELETE FROM formation_charges WHERE formation_charge_id = $formation_charge_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Formation Charge deleted successfully.";
    } else {
        echo "Error deleting formation charge: " . $conn->error;
    }
}
?>
