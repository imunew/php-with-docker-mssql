<?php

require __DIR__. '/../vendor/autoload.php';
$container = require __DIR__. '/container.php';
$pdo = $container['db'];

function createDatabase(PDO $pdo)
{
    $sql = <<<SQL
IF DB_ID(N'example') IS NULL
  CREATE DATABASE example;
SQL;

    $pdo->query($sql);
}

function createTable(PDO $pdo)
{
    $sql = <<<SQL
IF OBJECT_ID(N'user') IS NULL
  CREATE TABLE [user] (
    [id] [int] identity(1,1) NOT NULL,
    [name] [nvarchar](50) NOT NULL,
    [age] [int] NOT NULL
  );
SQL;

    $pdo->query($sql);
}

function insertUsers(PDO $pdo)
{
    $sql = <<<SQL
DECLARE @RecordCount INT

SELECT @RecordCount = COUNT(id) FROM [user] WHERE [id] IN (1, 2, 3);

IF @RecordCount = 0
  SET IDENTITY_INSERT [user] ON;
  INSERT INTO [user] ([id], [name], [age]) VALUES 
    (1, N'user1', 10),
    (2, N'user2', 20),
    (3, N'user3', 30)
  ;
  SET IDENTITY_INSERT [user] OFF;
SQL;

    $pdo->query($sql);
}

createDatabase($pdo);
createTable($pdo);
insertUsers($pdo);
