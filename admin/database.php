<?php
    class Database
    {
        private static $dbHost = "localhost";
        private static $dbName="gestionfete";
        private static $dbUser = "root";
        private static $dbUserPassword="";
        private static $connexion = null;
        public static function connect(){
            try {
                self::$connexion = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName,self::$dbUser, self::$dbUserPassword);
            } catch (\Throwable $e) {
                die($e->getMessage());
            }
            return self::$connexion;
        }  
        public static function disconnect(){
            return self::$connexion = null;
        }
    }
?>