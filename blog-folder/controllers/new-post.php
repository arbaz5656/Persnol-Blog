<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO posts (user_id, title, content, tags, is_published) VALUES (?, ?, ?, ?, 1)");
    if ($stmt->execute([$user_id, $title, $content, $tags])) {
        header('Location: ../dashboard/dashboard.php');
        exit;
    } else {
        echo "Error creating post!";
    }
}
?>
