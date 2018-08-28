<?php

namespace Accounts;


class accounts{

    public static function login($email,$password){
        
        $conn = \Database\DbConnect::getConnection();

        $stmt = $conn->prepare("SELECT * FROM dating_users WHERE dt_email = :email");
        
        $stmt->bindValue(':email', $email);
        
        $stmt->execute();
        
        $user = $stmt->fetchAll();
        
        foreach($user AS $test){

            if(password_verify($password,$test['dt_password']) === true){

                    $_SESSION['name'] = $test['fname'].' '.$test['lname'];
                
                    $_SESSION['id'] = $test['id'];
                    
                    if($test['privelege'] === '4'){
                        $_SESSION['privelege'] = 'administrator';
                    }
                    
                    if($test['privelege'] === '2'){
                        $_SESSION['privelege'] = 'user';
                    }

                    $_SESSION['loggedin'] = true;

                    return true;


            }

        }
        
        \Database\DbConnect::closeConnection();

        return false;
    }

    public static function registeruser($fname,$lname,$dob,$email,$password){
        
    }

    public static function checkexists($key){

        if(isset($_SESSION[$key])){
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function checkpost($key){
        $test = $key;
        if(isset($_POST[$key]) && !empty($_POST[$key])){
            return true;
        }
        else
        {
            return false;
        }
    }
}