<!-- get_last_5_payments.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $etudiant_id = $_POST['etudiant_id'];

    // Fetch the last 5 payments for the given etudiant_id
    $sql = "SELECT * FROM etudiant_payments WHERE etudiant_id = $etudiant_id ORDER BY created_at DESC LIMIT 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Last 5 Payments for Etudiant ID $etudiant_id:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "Payment ID: " . $row["payment_id"] . " - Type: " . $row["type"] . " - Amount: " . $row["amount"] . " - Date: " . $row["created_at"] . "<br>";
        }
    } else {
        echo "No payments found for Etudiant ID $etudiant_id.";
    }
}
?>
