<?php
class Database
{
    protected static $bdd;

    public static function instance() {
        if (is_null(static::$bdd)) {
            try {
                self::$bdd = new PDO("mysql:host=serverteam02;dbname=potooutay", "root", "T0@5s1@7$nR@2WrpUHx$");
                } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return self::$bdd;
    }
}
?>