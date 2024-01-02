<!-- revoke_annual_payment.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $annual_payment_id = $_POST['annual_payment_id'];

    // Revoke annual payment
    $sql = "UPDATE annual_payment SET status = 'revoked' WHERE annual_payment_id = $annual_payment_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Annual Payment revoked successfully.";
    } else {
        echo "Error revoking annual payment: " . $conn->error;
    }
}
?>
