<?php
// Include database connection
include '../config/db.php';

// Check if the ID is passed via GET request
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Fetch the post from the database
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
    $stmt->execute([$post_id]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$post) {
        die("Post not found!");
    }
} else {
    die("Invalid request.");
}

// Check if form is submitted to update post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];
    $is_published = isset($_POST['is_published']) ? 1 : 0;

    // Update the post in the database
    $stmt = $pdo->prepare("UPDATE posts SET title = ?, content = ?, tags = ?, is_published = ? WHERE id = ?");
    $stmt->execute([$title, $content, $tags, $is_published, $post_id]);

    // Redirect back to the dashboard
    header("Location: ../dasboard/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form method="POST" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required><?php echo htmlspecialchars($post['content']); ?></textarea><br>

        <label for="tags">Tags (comma-separated):</label>
        <input type="text" id="tags" name="tags" value="<?php echo htmlspecialchars($post['tags']); ?>"><br>

        <label for="is_published">Publish:</label>
        <input type="checkbox" id="is_published" name="is_published" <?php echo $post['is_published'] ? 'checked' : ''; ?>><br>

        <button type="submit">Update Post</button>
    </form>
</body>
</html>
