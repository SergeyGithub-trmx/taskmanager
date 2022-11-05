<?php

require_once('functions.php');
$page_content = includeTemplate('main.php');
$layout_content = includeTemplate('layouts/main.php', [
    'title' => 'Main',
    'page_content' => $page_content,
    'css_href' => './css/main.css'
]);
print($layout_content);