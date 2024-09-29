<?php
// Database connection
$host = 'localhost';
$dbname = 'blog_platform'; // Your database name
$user = 'root'; // Your MySQL username
$pass = '';    // Your MySQL password (empty if none)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
