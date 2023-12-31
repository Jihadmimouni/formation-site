<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $formateur_id = $_POST['formateur_id'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $type = $_POST['type'];

    $sql = "INSERT INTO formation (name, price, formateur_id, date_start, date_end, type) VALUES ('$name', $price, $formateur_id, '$date_start', '$date_end', '$type')";

    if ($conn->query($sql) === TRUE) {
        echo "Formation created successfully";
    } else {
        echo "Error creating formation: " . $conn->error;
    }
}
?>
