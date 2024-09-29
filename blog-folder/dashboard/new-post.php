<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>New-post</title>
</head>
<body>
<form action="../controllers/new-post.php" method="POST">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Write your post here..." required></textarea>
    <input type="text" name="tags" placeholder="Tags (optional)">
    <button type="submit">Publish</button>
</form>
<script src="../assets/scripts.js"></script>
</body>
</html>


