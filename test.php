<?php

$filters = [
    [
        'text' => 'filter-1',
        'tab' => 'all',
        'url' => 'http://localhost/test.php?tab=all'
    ],
    [
        'text' => 'filter-2',
        'tab' => 'today',
        'url' => 'http://localhost/test.php?tab=today'
    ],
    [
        'text' => 'filter-3',
        'tab' => 'overdue',
        'url' => 'http://localhost/test.php?tab=overdue'
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .filter--active {
            background-color: deeppink;
        }
    </style>
</head>
<body>

    <ul>
        <?php foreach ($filters as $filter): ?>
            <?php $classname = isset($_GET['tab']) && $_GET['tab'] === $filter['tab'] ? 'filter--active' : ''; ?>
            <li class="<?= $classname ?>">
                <a href="<?= $filter['url']?>"><?= $filter['text'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php $classname = isset($_GET['tab']) && $_GET['tab'] === 'all' ? 'filter--active' : ''; ?>
        <li class="<?= $classname ?>">
            <a href="http://localhost/test.php?tab=all">filter-1</a>
        </li>

        <?php $classname = isset($_GET['tab']) && $_GET['tab'] === 'today' ? 'filter--active' : ''; ?>
        <li class="<?= $classname ?>">
            <a href="http://localhost/test.php?tab=today">filter-2</a>
        </li>

        <?php $classname = isset($_GET['tab']) && $_GET['tab'] === 'overdue' ? 'filter--active' : ''; ?>
        <li class="<?= $classname ?>">
            <a href="http://localhost/test.php?tab=overdue">filter-3</a>
        </li>
    </ul>
    
</body>
</html>