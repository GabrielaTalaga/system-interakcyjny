<?php
require_once __DIR__ . '/inc/templates.inc.php';

$view = [
    'title' => 'Hello World!',
    'template' => 'hello'
];

render($view);
