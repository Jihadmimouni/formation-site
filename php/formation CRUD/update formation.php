<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formation_id = $_POST['formation_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $formateur_id = $_POST['formateur_id'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $type = $_POST['type'];

    $sql = "UPDATE formation SET name='$name', price=$price, formateur_id=$formateur_id, date_start='$date_start', date_end='$date_end', type='$type' WHERE formation_id=$formation_id";

    if ($conn->query($sql) === TRUE) {
        echo "Formation updated successfully";
    } else {
        echo "Error updating formation: " . $conn->error;
    }
}
?>
