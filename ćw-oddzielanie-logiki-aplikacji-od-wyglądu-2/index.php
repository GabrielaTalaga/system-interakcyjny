<?php
/**
 * View all bookmarks.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */
require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/templates.inc.php';
require_once __DIR__ . '/inc/bookmarks.inc.php';

$view = [];
$view['title'] = 'Bookmarks';
$view['template'] = 'index';

$view['bookmarks'] = find_all();

render($view);