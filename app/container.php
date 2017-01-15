<?php

$container = new Pimple\Container();

$dsn = getenv('DEFAULT_DSN');
$username = getenv('DEFAULT_USERNAME');
$password = getenv('DEFAULT_PASSWORD');

$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$container['db'] = $pdo;
return $container;
