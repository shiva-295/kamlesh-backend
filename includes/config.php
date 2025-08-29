

<?php

$host = 'localhost';
$db   = 'e-commerce';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
