<?php

namespace Test;

use PDO;
use PHPUnit\Framework\TestCase;

class Example extends TestCase
{
    /** @var PDO */
    private $pdo;

    /**
     * {@inheritDoc}
     */
    protected function setUp() : void
    {
        $container = require __DIR__. '/../app/container.php';
        $this->pdo = $container['db'];
    }

    /**
     * @test
     */
    public function findRecords()
    {
        $sql = <<<SQL
SELECT * FROM [user] WHERE [id] in (1, 2, 3);
SQL;

        $records = $this->pdo->query($sql)->fetchAll();

        $this->assertCount(3, $records);
    }
}
