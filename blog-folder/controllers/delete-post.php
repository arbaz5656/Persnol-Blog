<?php
// Include database connection
include '../config/db.php';

// Check if the ID is passed via GET request
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Delete the post from the database
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->execute([$post_id]);

    // Redirect back to the dashboard or wherever you want
    header("Location: ../dashboard/dashboard.php");
    exit();
} else {
    die("Invalid request.");
}
?>
