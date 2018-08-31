<?php

namespace Messages;

class messages{

    public static function getinformation($field,$id){

        $stuff = '';

        $conn = \Database\DbConnect::getConnection();

        $stmt = $conn->prepare("SELECT ".$field." FROM dating_users LIMIT 1");
        
        $resultset = $stmt->execute();
        
        $resultset = $stmt->fetch();

        foreach($resultset AS $test){

            $stuff = $test;
            
        }

        \Database\DbConnect::closeConnection();
        
        return $stuff;


    }

}
