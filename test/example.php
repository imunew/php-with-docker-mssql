<?php


class Example extends PHPUnit_Framework_TestCase
{
    /** @var PDO */
    private $pdo;

    public function setUp()
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
