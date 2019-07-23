<?php
    $container = require __DIR__ . '/bootstrap/container.php';

    $dispatcher = require __DIR__ . '/../routes/web.php';

    Kint::dump($container);

