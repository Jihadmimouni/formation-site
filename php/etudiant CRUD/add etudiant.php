<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $family_name = $_POST['family_name'];
    $idnumber = $_POST['idnumber'];

    $sql = "INSERT INTO etudiant (name, family_name, idnumber) VALUES ('$name', '$family_name', $idnumber)";

    if ($conn->query($sql) === TRUE) {
        echo "Etudiant created successfully";
    } else {
        echo "Error creating etudiant: " . $conn->error;
    }
}
?>
