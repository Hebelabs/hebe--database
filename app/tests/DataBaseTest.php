<?php

namespace Sura\DataBase;

use Sura\Database\DataBase;
use PHPUnit\Framework\TestCase;

class DataBaseTest extends TestCase
{

    public function testGetDB()
    {
        $db = new DataBase(
            'localhost',
            'docker',
            'dockerdb',
            'password'
        );
        //$db = DataBase::getDB();

        $db->query('            
            CREATE TABLE users (
                id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                name TEXT NOT NULL,
                web TEXT NOT NULL,
                age INTEGER NOT NULL,
                born DATE
        )');
        $db->query("DROP TABLE users");

    }

}
