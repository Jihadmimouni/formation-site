<!-- create_formateur_formation.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formateur_id = $_POST['formateur_id'];
    $formation_id = $_POST['formation_id'];
    $payment_type = $_POST['payment_type'];
    $amount = $_POST['amount'];

    // Insert new formateur_formation record
    $sql = "INSERT INTO formateur_formation (formateur_id, formation_id, payment_type, amount) 
            VALUES ($formateur_id, $formation_id, '$payment_type', $amount)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Formateur-Formation association created successfully.";
    } else {
        echo "Error creating Formateur-Formation association: " . $conn->error;
    }
}
?>
