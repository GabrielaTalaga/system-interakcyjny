<?php
/**
 * Template for view all bookmarks.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ
 */
?>

<?php if (!empty($view['bookmarks'])) : ?>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>URL</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($view['bookmarks'] as $id => $bookmark): ?>
        <tr>
            <td>
                <a href="view.php?id=<?php echo $id; ?>">
                    <?php echo $bookmark['title'] ?? ''; ?>
                </a>
            </td>
            <td><?php echo $bookmark['url'] ?? ''; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else : ?>
    <p>No data!</p>
<?php endif; ?>
