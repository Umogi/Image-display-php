<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $url = $_POST['url'] ?? '';
    if ($name && $url) {
        $stmt = $pdo->prepare("INSERT INTO images (name, url) VALUES (:name, :url)");
        $stmt->execute(['name' => $name, 'url' => $url]);
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Image</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="add.php">Add Image</a>
    </nav>
    <div class="container-input">
        <h1>Add New Image</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Image Name" required>
            <input type="url" name="url" placeholder="Image URL" required>
            <button type="submit">Add Image</button>
        </form>
    </div>
</body>
</html>
