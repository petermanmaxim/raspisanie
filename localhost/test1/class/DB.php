<?php


class DB
{
    private static $_instance;

    private static $DB_HOST = 'localhost';
    private static $DB_NAME = 'search';
    private static $DB_USER = 'root';
    private static $DB_PASS = '';

    private function __construct()
    {
        self::$_instance = mysqli_connect(
            self::$DB_HOST,
            self::$DB_USER,
            self::$DB_PASS,
            self::$DB_NAME
        );
    }

    public static function getInstance()
    {
        if (self::$_instance !== null) {
            return self::$_instance;
        }

        return new self;
    }
    public function select($query, $key)
    {
        $rows = mysqli_query(self::$_instance, $query);

        $result = [];
        while ($row = mysqli_fetch_assoc($rows)) {
            $result[$row[$key]] = $row;
        }

        return $result ?: [];
    }
}