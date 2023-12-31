<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Formateur</title>
</head>
<body>
    <h2>Search Formateur</h2>
    <form action="" method="post">
        <label for="search">Search by Name or ID Number:</label>
        <input type="text" name="search" required>
        <button type="submit">Search</button>
    </form>

    <?php
    // Assuming you have a database connection in $conn

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $search = $_POST['search'];

        // Perform the search query
        $sql = "SELECT * FROM formateur WHERE name LIKE '%$search%' OR idnumber LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Search Results:</h3>";
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["formateur_id"] . " - Name: " . $row["name"] . " - Family Name: " . $row["family_name"] . " - ID Number: " . $row["idnumber"] . "<br>";
            }
        } else {
            echo "No results found.";
        }
    }
    ?>
</body>
</html>
