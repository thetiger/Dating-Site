<?php

namespace Users;

class users{

    public static function getnumbers($table,$field,$where,$equals){
        
                $conn = \Database\DbConnect::getConnection();
        
                $stmt = $conn->prepare("SELECT :field FROM :table WHERE :where = :equals");
                
                $stmt->bindValue(':table', $table);

                $stmt->bindValue(':field', $field);

                $stmt->bindValue(':where', $where);

                $stmt->bindValue(':equals', $equals);
                
                $stmt->execute();
                
                $user = $stmt->fetchAll();

                \Database\DbConnect::closeConnection();

                $count = count($user);
                

                return $count;
                
    }

    public static function getwildcarddata($table,$field,$where,$equals,$arraycheck){

                $data = '';
                
                $string = '';

                $myself = array();
                

                $conn = \Database\DbConnect::getConnection();

                $buildsql = 'SELECT '.$field.' FROM '.$table.' WHERE '.$where.' = '.$equals.'';

                $stmt = $conn->prepare($buildsql);
                
                $stmt->execute();

                if($arraycheck == 0){
                    
                    $data = $stmt->fetchAll();
                    // foreach($data AS $something){
                    //     $string .= $something;
                    // }
                    for($i=0;$i<count($data);$i++){
                    $string .= $data[$i][$i];
                }
                return $string;
            }
            if($arraycheck == 1){

                $data = $stmt->fetchAll();

                return $data;
            }

                \Database\DbConnect::closeConnection();

    }

    public static function getprofiles(){

        $conn = \Database\DbConnect::getConnection();

        $stmt = $conn->prepare("SELECT id,fname,lname,dob,location FROM dating_users");
        
        $resultset = $stmt->execute();
        
        $resultset = $stmt->fetchAll();

        foreach($resultset AS $test){

            $stuff[] = $test;
            
        }

        \Database\DbConnect::closeConnection();
        
        return $stuff;


    }





}