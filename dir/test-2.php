<?php

session_start();

print('<h1>Hello, sessions!</h1>');

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $value = intval($_SESSION['count']) + 1;
    $_SESSION['count'] = $value;
}

print('<pre>');
print_r($_SESSION);
print('</pre>');

if (isset($_SESSION['count'])) {
    print($_SESSION['count']);
}