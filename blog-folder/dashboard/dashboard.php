<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../views/login.php');
    exit;
}
include '../config/db.php';

$stmt = $pdo->prepare("SELECT * FROM posts WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<a href="new-post.php">Create New Post</a>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['content']; ?></p>
            <a href="edit-post.php?id=<?php echo $post['id']; ?>">Edit</a>
            <a href="../controllers/delete-post.php?id=<?php echo $post['id']; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
