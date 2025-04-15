<?php
/**
 * View all bookmarks.
 * 
 * @link https://epi.chojna.info.pl
 * @author EPI UJ
 */
require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmarks.inc.php';

$bookmarks = find_all();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bookmarks</title>
</head>
<body>
    <h1>Lista zakładek</h1>
    <ul>
        <?php foreach ($bookmarks as $id => $bookmark): ?>
            <li>
                <a href="view.php?id=<?= $id ?>">
                    <?= htmlspecialchars($bookmark['title']) ?>
                </a>
                (<?= htmlspecialchars($bookmark['url']) ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
