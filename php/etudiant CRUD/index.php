<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant CRUD</title>
</head>
<body>
    <h2>Create Etudiant</h2>
    <form action="create_etudiant.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="family_name">Family Name:</label>
        <input type="text" name="family_name" required><br>
        <label for="idnumber">ID Number:</label>
        <input type="number" name="idnumber" required><br>
        <button type="submit">Create Etudiant</button>
    </form>

    <h2>Read Etudiants</h2>
    <?php include 'read_etudiant.php'; ?>

    <h2>Update Etudiant</h2>
    <form action="update_etudiant.php" method="post">
        <label for="etudiant_id">Etudiant ID:</label>
        <input type="number" name="etudiant_id" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="family_name">Family Name:</label>
        <input type="text" name="family_name" required><br>
        <label for="idnumber">ID Number:</label>
        <input type="number" name="idnumber" required><br>
        <button type="submit">Update Etudiant</button>
    </form>

    <h2>Delete Etudiant</h2>
    <form action="delete_etudiant.php" method="post">
        <label for="etudiant_id">Etudiant ID:</label>
        <input type="number" name="etudiant_id" required><br>
        <button type="submit">Delete Etudiant</button>
    </form>
</body>
</html>
