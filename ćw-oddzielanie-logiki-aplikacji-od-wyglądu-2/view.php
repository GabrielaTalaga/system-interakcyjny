<?php
require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmarks.inc.php';
require_once __DIR__ . '/inc/templates.inc.php';

$id = (int) $_GET['id'];
$bookmark = find_one_by_id($id);


$view = [];
$view['title'] = $bookmark['title'];
$view['template'] = 'view';
$view['bookmark'] = $bookmark;

render($view);