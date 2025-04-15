<?php
/**
 * Template for single bookmark view.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ
 */
?>

<h1><?php echo $view['bookmark']['title']; ?></h1>
<p><a href="<?php echo $view['bookmark']['url']; ?>" target="_blank">
    <?php echo $view['bookmark']['url']; ?>
</a></p>
<p><strong>Tagi:</strong> <?php echo implode(', ', $view['bookmark']['tags']); ?></p>
<p><a href="index.php">Powrót do listy</a></p>
