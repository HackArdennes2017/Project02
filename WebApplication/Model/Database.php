<?php
class Database
{
    protected static $bdd;

    public static function instance() {
        if (is_null(static::$bdd)) {
            try {
                self::$bdd = new PDO("mysql:host=localhost;dbname=potooutay", "test", "test");
                } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return self::$bdd;
    }
}
?>
