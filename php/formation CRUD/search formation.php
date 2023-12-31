<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Formation</title>
</head>
<body>
    <h2>Search Formation</h2>
    <form action="" method="post">
        <label for="search">Search by Name:</label>
        <input type="text" name="search" required>
        <button type="submit">Search</button>
    </form>

    <?php
    // Assuming you have a database connection in $conn

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $search = $_POST['search'];

        // Perform the search query with a JOIN to include formateur details
        $sql = "SELECT formation.*, formateur.name AS formateur_name, formateur.family_name AS formateur_family_name
                FROM formation
                INNER JOIN formateur ON formation.formateur_id = formateur.formateur_id
                WHERE formation.name LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Search Results:</h3>";
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["formation_id"] . " - Name: " . $row["name"] . " - Price: " . $row["price"] . " - Formateur: " . $row["formateur_name"] . " " . $row["formateur_family_name"] . " - Start Date: " . $row["date_start"] . " - End Date: " . $row["date_end"] . " - Type: " . $row["type"] . "<br>";
            }
        } else {
            echo "No results found.";
        }
    }
    ?>
</body>
</html>
