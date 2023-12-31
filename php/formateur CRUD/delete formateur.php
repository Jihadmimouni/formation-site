<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formateur_id = $_POST['formateur_id'];

    $sql = "DELETE FROM formateur WHERE formateur_id=$formateur_id";

    if ($conn->query($sql) === TRUE) {
        echo "Formateur deleted successfully";
    } else {
        echo "Error deleting formateur: " . $conn->error;
    }
}
?>
