<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formation_id = $_POST['formation_id'];

    $sql = "DELETE FROM formation WHERE formation_id=$formation_id";

    if ($conn->query($sql) === TRUE) {
        echo "Formation deleted successfully";
    } else {
        echo "Error deleting formation: " . $conn->error;
    }
}
?>
