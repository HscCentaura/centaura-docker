<?php

class DatabasePDO
{

    private static $dbh;

    static function getInstance($dbname = "testdb"){



        $dsn = Config::DB_TYPE.":host=".Config::DB_HOST.";dbname=".Config::DB_NAME;

        try{
        self::$dbh = new PDO($dsn,Config::DB_USER,Config::DB_PASS);
        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }


        return self::$dbh;
    }
}


?>
