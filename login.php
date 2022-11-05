<?php

require_once('functions.php');
$page_content = includeTemplate('log-in.php');
$layout_content = includeTemplate('layouts/main.php', [
    'title' => 'Log in',
    'page_content' => $page_content,
    'css_href' => './css/Login.css'
]);
print($layout_content);