<?php
class Database
{
    protected static $bdd;

    public static function instance() {
        if (is_null(static::$bdd)) {
            try {
                self::$bdd = new PDO("mysql:host=127.0.0.1;dbname=potooutay", "test", "test");
                } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return self::$bdd;
    }
}
?>
