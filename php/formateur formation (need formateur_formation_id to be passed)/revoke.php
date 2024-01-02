<!-- revoke_formateur_formation.php -->
<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formateur_formation_id = $_POST['formateur_formation_id'];

    // Revoke formateur_formation record
    $sql = "UPDATE formateur_formation SET is_canceled = true WHERE formateur_formation_id = $formateur_formation_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Formateur-Formation association revoked successfully.";
    } else {
        echo "Error revoking Formateur-Formation association: " . $conn->error;
    }
}
?>
