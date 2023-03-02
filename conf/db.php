<?php

/**
 * DB configuration class
 */
class DB {
    const USER = "root";
    const PASS = "root";
    const HOST = "127.0.0.1";
    const DB   = "php_db";
    const PORT = "8889";

    public static function connToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db   = self::DB;
        $port = self::PORT;

        $conn = new PDO("mysql:dbname=$db;host=$host;port=$port", $user, $pass);
        return $conn;
    }
}