<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $etudiant_id = $_POST['etudiant_id'];
    $name = $_POST['name'];
    $family_name = $_POST['family_name'];
    $idnumber = $_POST['idnumber'];

    $sql = "UPDATE etudiant SET name='$name', family_name='$family_name', idnumber=$idnumber WHERE etudiant_id=$etudiant_id";

    if ($conn->query($sql) === TRUE) {
        echo "Etudiant updated successfully";
    } else {
        echo "Error updating etudiant: " . $conn->error;
    }
}
?>
