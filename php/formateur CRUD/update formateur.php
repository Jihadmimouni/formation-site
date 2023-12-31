<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formateur_id = $_POST['formateur_id'];
    $name = $_POST['name'];
    $family_name = $_POST['family_name'];
    $idnumber = $_POST['idnumber'];

    $sql = "UPDATE formateur SET name='$name', family_name='$family_name', idnumber=$idnumber WHERE formateur_id=$formateur_id";

    if ($conn->query($sql) === TRUE) {
        echo "Formateur updated successfully";
    } else {
        echo "Error updating formateur: " . $conn->error;
    }
}
?>
