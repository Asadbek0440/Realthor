<!DOCTYPE html>
<html>
<head>
    <title>SQLite3 Example</title>
</head>
<body>
<h1>Users</h1>
<ul>
    <?php
    // Connect to the database
    $db = new SQLite3('sqldata/data.db');

    // Query the data
    $result = $db->query('SELECT * FROM users');

    // Display the data
    while ($row = $result->fetchArray()) {
        echo '<li>' . $row['name'] . ' - ' . $row['email'] . '</li>';
    }

    // Close the connection
    $db->close();
    ?>
</ul>
</body>
</html>
