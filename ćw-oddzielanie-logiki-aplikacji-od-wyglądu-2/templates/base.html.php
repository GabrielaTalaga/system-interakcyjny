<?php
/**
 * Layout file.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title><?php echo $view['title']; ?></title>
    </head>
    <body>
    <?php if (!file_exists($view['templates_dir'] . '/' . $view['template'] . $view['template_ext'])) : ?>
        <?php $view['template'] = '404'; ?>
    <?php endif; ?>
    <?php require_once $view['templates_dir'] . '/' . $view['template'] . $view['template_ext']; ?>
    </body>
</html>