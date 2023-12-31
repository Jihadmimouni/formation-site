<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation CRUD</title>
</head>
<body>
    <h2>Create Formation</h2>
    <form action="create_formation.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="price">Price:</label>
        <input type="number" name="price" required><br>
        <label for="formateur_id">Formateur ID:</label>
        <input type="number" name="formateur_id" required><br>
        <label for="date_start">Start Date:</label>
        <input type="date" name="date_start" required><br>
        <label for="date_end">End Date:</label>
        <input type="date" name="date_end" required><br>
        <label for="type">Type:</label>
        <input type="text" name="type" required><br>
        <button type="submit">Create Formation</button>
    </form>

    <h2>Read Formations</h2>
    <?php include 'read_formation.php'; ?>

    <h2>Update Formation</h2>
    <form action="update_formation.php" method="post">
        <label for="formation_id">Formation ID:</label>
        <input type="number" name="formation_id" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="price">Price:</label>
        <input type="number" name="price" required><br>
        <label for="formateur_id">Formateur ID:</label>
        <input type="number" name="formateur_id" required><br>
        <label for="date_start">Start Date:</label>
        <input type="date" name="date_start" required><br>
        <label for="date_end">End Date:</label>
        <input type="date" name="date_end" required><br>
        <label for="type">Type:</label>
        <input type="text" name="type" required><br>
        <button type="submit">Update Formation</button>
    </form>

    <h2>Delete Formation</h2>
    <form action="delete_formation.php" method="post">
        <label for="formation_id">Formation ID:</label>
        <input type="number" name="formation_id" required><br>
        <button type="submit">Delete Formation</button>
    </form>
</body>
</html>
