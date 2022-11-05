<?php

require_once('functions.php');
$page_content = includeTemplate('sign-in.php');
$layout_content = includeTemplate('layouts/main.php', [
    'title' => 'Sign in',
    'page_content' => $page_content,
    'css_href' => './css/Signup.css'
]);
print($layout_content);