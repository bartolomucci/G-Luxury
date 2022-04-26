<?php

class Manager
{

    protected static ?PDO $pdo = NULL;

    protected function getPdo()
    {
        if (self::$pdo == NULL) {

            try {
                self::$pdo = new PDO('mysql:host=localhost;dbname=gluxury_db', 'root', '', [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                ]);
            } catch (PDOException $pe) {
                die("Error : " . $pe->getMessage());
            }
        }
        
            return self::$pdo;
    }
}