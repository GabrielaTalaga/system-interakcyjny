<?php
require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmarks.inc.php';


// Pobranie zakładki
$id = (int) $_GET['id'];
$bookmark = find_one_by_id($id);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $bookmark['title'] ?></title>
</head>
<body>
    <h1><?= $bookmark['title'] ?></h1>
    <p><a href="<?= $bookmark['url'] ?>" target="_blank"><?= $bookmark['url'] ?></a></p>
    <p><strong>Tagi:</strong> <?= implode(', ', $bookmark['tags']) ?></p>
    <p><a href="index.php">Powrót do listy</a></p>
</body>
</html>
