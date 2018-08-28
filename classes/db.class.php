<?php
namespace Database;

use \PDO;

class DbConnect{
    
    private $data;

    private static $conn;
    
    public static function getConnection()
    {
        if(!self::$conn)
        {
            try{
                self::$conn = new PDO('mysql:host=localhost;dbname=dating', 'root', '');
             }
             catch (PDOException $exception) 
             {
                echo "Oh no, there was a problem" . $exception->getMessage();
             }
        }
        return self::$conn;
    }
    
    public static function closeConnection()
    {
        if(self::$conn)
        {
            self::$conn=null;
        }
    }
    
}