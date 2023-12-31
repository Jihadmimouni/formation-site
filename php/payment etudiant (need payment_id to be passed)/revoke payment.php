<!-- revoke_payment.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_id = $_POST['payment_id'];

    // Update the payment to mark it as canceled
    $updateSql = "UPDATE etudiant_payments SET is_canceled = true WHERE payment_id = $payment_id";

    if ($conn->query($updateSql) === TRUE) {
        echo "Payment with ID $payment_id has been revoked.";
    } else {
        echo "Error revoking payment: " . $conn->error;
    }
}
?>
