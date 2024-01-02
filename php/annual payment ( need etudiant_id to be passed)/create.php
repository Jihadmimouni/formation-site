<!-- create_annual_payment.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $etudiant_id = $_POST['etudiant_id'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];

    // Insert new annual payment
    $sql = "INSERT INTO annual_payment (etudiant_id, amount, status) VALUES ($etudiant_id, $amount, '$status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Annual Payment created successfully.";
    } else {
        echo "Error creating annual payment: " . $conn->error;
    }
}
?>
