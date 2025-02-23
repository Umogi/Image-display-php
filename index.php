<!-- index.php - Display images -->
<?php
require 'config.php';
$stmt = $pdo->query("SELECT * FROM images ORDER BY created_at DESC");
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Link Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="add.php">Add Image</a>
    </nav>
    <div class="container">
        <h1>Image Gallery</h1>
        <div class="image-grid">
            <?php foreach ($images as $image): ?>
                <div class="image-container">
                    <a href="<?php echo htmlspecialchars($image['url']); ?>"><img src="<?php echo htmlspecialchars($image['url']); ?>" alt="<?php echo htmlspecialchars($image['name']); ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
