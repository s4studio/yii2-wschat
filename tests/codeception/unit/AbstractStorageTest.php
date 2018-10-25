<?php
namespace tests\codeception\unit;

use yii\codeception\TestCase;
use s4studio\wschat\components\AbstractStorage;

class AbstractStorageTest extends TestCase
{
    /**
     * @covers \s4studio\wschat\components\AbstractStorage::factory
     */
    public function testMongoStorage()
    {
        $storage = AbstractStorage::factory('mongodb');
        $this->assertInstanceOf('\s4studio\wschat\collections\History', $storage);
        $storage = AbstractStorage::factory();
        $this->assertInstanceOf('\s4studio\wschat\collections\History', $storage);
    }

    /**
     * @covers \s4studio\wschat\components\AbstractStorage::factory
     */
    public function testPgsqlStorage()
    {
        $storage = AbstractStorage::factory('pgsql');
        $this->assertInstanceOf('\s4studio\wschat\components\DbStorage', $storage);
    }

    /**
     * @covers \s4studio\wschat\components\AbstractStorage::factory
     */
    public function testMysqlStorage()
    {
        $storage = AbstractStorage::factory('mysql');
        $this->assertInstanceOf('\s4studio\wschat\components\DbStorage', $storage);
    }
}