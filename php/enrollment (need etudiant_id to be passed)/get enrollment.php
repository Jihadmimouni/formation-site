<!-- get_student_enrollments.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $etudiant_id = $_POST['etudiant_id'];

    // Fetch all enrollments and corresponding payment information for a specific student
    $sql = "SELECT e.*, p.amount AS payment_amount
            FROM enrollment e
            LEFT JOIN etudiant_payments p ON e.etudiant_id = p.etudiant_id
            WHERE e.etudiant_id = $etudiant_id
            ORDER BY e.created_at DESC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Enrollments and Payment Information for Etudiant ID $etudiant_id:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "Enrollment ID: " . $row["enrollment_id"] . " - Status: " . $row["status"] . " - Payment Amount: " . ($row["payment_amount"] ?? 'Not Paid') . "<br>";
        }
    } else {
        echo "No enrollments found for Etudiant ID $etudiant_id.";
    }
}
?>
