<?php
include 'db.php';

$sql = "SELECT * FROM formateur";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["formateur_id"] . " - Name: " . $row["name"] . " - Family Name: " . $row["family_name"] . " - ID Number: " . $row["idnumber"] . "<br>";
    }
} else {
    echo "No formateurs found";
}
?>
