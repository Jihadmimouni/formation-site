<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $etudiant_id = $_POST['etudiant_id'];

    $sql = "DELETE FROM etudiant WHERE etudiant_id=$etudiant_id";

    if ($conn->query($sql) === TRUE) {
        echo "Etudiant deleted successfully";
    } else {
        echo "Error deleting etudiant: " . $conn->error;
    }
}
?>
