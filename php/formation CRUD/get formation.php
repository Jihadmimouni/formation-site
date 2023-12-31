<?php
include 'db.php';

$sql = "SELECT * FROM formation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["formation_id"] . " - Name: " . $row["name"] . " - Price: $" . $row["price"] . " - Formateur ID: " . $row["formateur_id"] . " - Start Date: " . $row["date_start"] . " - End Date: " . $row["date_end"] . " - Type: " . $row["type"] . "<br>";
    }
} else {
    echo "No formations found";
}
?>
