<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $family_name = $_POST['family_name'];
    $idnumber = $_POST['idnumber'];

    $sql = "INSERT INTO formateur (name, family_name, idnumber) VALUES ('$name', '$family_name', $idnumber)";

    if ($conn->query($sql) === TRUE) {
        echo "Formateur created successfully";
    } else {
        echo "Error creating formateur: " . $conn->error;
    }
}
?>
