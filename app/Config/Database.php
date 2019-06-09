<?php
namespace MVC\Config;

use PDO;

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=bai_3", 'root', '');
        }
        self::$bdd->exec('SET NAMES utf8');
        return self::$bdd;

    }

}
?>