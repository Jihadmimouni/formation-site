<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formateur CRUD</title>
</head>
<body>
    <h2>Create Formateur</h2>
    <form action="create_formateur.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="family_name">Family Name:</label>
        <input type="text" name="family_name" required><br>
        <label for="idnumber">ID Number:</label>
        <input type="number" name="idnumber" required><br>
        <button type="submit">Create Formateur</button>
    </form>

    <h2>Read Formateurs</h2>
    <?php include 'read_formateur.php'; ?>

    <h2>Update Formateur</h2>
    <form action="update_formateur.php" method="post">
        <label for="formateur_id">Formateur ID:</label>
        <input type="number" name="formateur_id" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="family_name">Family Name:</label>
        <input type="text" name="family_name" required><br>
        <label for="idnumber">ID Number:</label>
        <input type="number" name="idnumber" required><br>
        <button type="submit">Update Formateur</button>
    </form>

    <h2>Delete Formateur</h2>
    <form action="delete_formateur.php" method="post">
        <label for="formateur_id">Formateur ID:</label>
        <input type="number" name="formateur_id" required><br>
        <button type="submit">Delete Formateur</button>
    </form>
</body>
</html>
