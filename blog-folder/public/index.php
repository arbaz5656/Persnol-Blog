<?php
// Include database connection
include '../config/db.php';  // Make sure this path is correct

// Check if $pdo is set and connected properly
if (!isset($pdo)) {
    die("Database connection failed!");
}

// Fetch all published blog posts
$stmt = $pdo->query("SELECT * FROM posts WHERE is_published = 1");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Platform</title>
    <link rel="stylesheet" href="../assets/styles.css"> <!-- Ensure this path is correct -->
</head>
<body>
    <header>
        <h1>Welcome to the Blog Platform</h1>
        <nav>
            <a href="../views/signup.php">Sign Up</a>
            <a href="../views/login.php">Login</a>
        </nav>
    </header>

    <main>
        <h2 >All Published Blog Posts</h2>
        <ul>
            <?php foreach ($posts as $post): ?>
                <li>
                    <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                    <p><?php echo htmlspecialchars($post['content']); ?></p>
                    <?php if ($post['tags']): ?>
                        <p><strong>Tags:</strong> <?php echo htmlspecialchars($post['tags']); ?></p>
                    <?php endif; ?>
                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Blog Platform. All rights reserved.</p>
    </footer>
    <script src="../assets/scripts.js"></script> <!-- Ensure this path is correct -->
</body>
</html>
