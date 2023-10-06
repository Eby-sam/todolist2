<?php
class Config {
    public const DB_SERVER = 'localhost';
    public const DB_NAME = 'todolist';
    public const DB_USERNAME = 'dev';
    public const DB_PASSWORD = 'dev';
    public const DB_CHARSET = 'utf8';

    public const DSN = "mysql:host=".self::DB_SERVER.";dbname=".self::DB_NAME.";charset=".self::DB_CHARSET;
}
?>
