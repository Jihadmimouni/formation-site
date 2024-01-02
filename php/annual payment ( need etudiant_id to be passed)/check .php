<!-- get_annual_payment.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $etudiant_id = $_GET['etudiant_id'];

    // Get annual payments for the current year
    $current_year = date("Y");
    $sql = "SELECT * FROM annual_payment WHERE etudiant_id = $etudiant_id AND YEAR(created_at) = $current_year";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Payments made in the current year
        $payments = array();
        while ($row = $result->fetch_assoc()) {
            $payments[] = $row;
        }

        echo json_encode($payments);
    } else {
        // No payments made in the current year
        echo json_encode(array('message' => 'No payments made in the current year.'));
    }
}
?>
