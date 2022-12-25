<?php

print('<h1>Hello, cookies!</h1>');

if (!isset($_COOKIE['count'])) {
    setcookie('count', 0);
} else {
    $value = intval($_COOKIE['count']) + 1;
    setcookie('count', $value);
}

print('<pre>');
print_r($_COOKIE);
print('</pre>');

if (isset($_COOKIE['count'])) {
    print($_COOKIE['count']);
}
