<?php
include 'config.php';

try {
    $host = $config['DB_HOST'];
    $dbname = $config['DB_DATABASE'];
    $username = $config['DB_USERNAME'];
    $password = $config['DB_PASSWORD'];
    $table = $config['DB_TABLE'];

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h2>TODO</h2><ol>";

    // Fetching data from the table specified in $config['DB_TABLE']
    $stmt = $conn->query("SELECT * FROM $table");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . htmlspecialchars(json_encode($row)) . "</li>"; // Example output
    }

    echo "</ol>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>