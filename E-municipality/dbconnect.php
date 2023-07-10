<?php
// Database configuration
$dbHost = 'localhost';      // Hostname
$dbName = 'emunicipalitydb';  // Database name
$dbUser = 'root';  // Database username
$dbPass = '';  // Database password

try {
    // Establish database connection
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Handle database connection errors
    echo "Database Connection Failed: " . $e->getMessage();
   
}
?>
