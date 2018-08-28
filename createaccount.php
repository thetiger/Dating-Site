<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php

require_once('config.php');
require_once('classes/db.class.php');
require_once('classes/accounts.class.php');

use \Database\DbConnect;
use Accounts\accounts;

$checknow = accounts::checkexists('loggedin');

if($checknow != false){
    header('Location: index.php');
}

if(isset($_POST['createaccount'])){
    
    $errs = 0;
    
    if(accounts::checkpost('firstname') === false){
        $fnamemsg = true;
        $errs++;
    }
    if(accounts::checkpost('lastname') === false){
        $lnamemsg = true;
        $errs++;
    }
    if(accounts::checkpost('dob') === false){
        $dobmsg = true;
        $errs++;
    }
    if(accounts::checkpost('email') === false){
        $emailmsg = true;
        $errs++;
    }
    if(accounts::checkpost('password1') === false){
        $passwordmsg = true;
        $errs++;
    }
    if(accounts::checkpost('password2') === false){
        $passwordmsg = true;
        $errs++;
    }
    if($errs === 0){
        if($_POST['password1'] != $_POST['password2']){
            $passwordwrongmsg = true;
        }
        else
        {
            accounts::registeruser($_POST['firstname'],$_POST['lastname'],$_POST['dob'],$_POST['email'],$_POST['password']);
            header('Location: index.php');
        }
    }
}

$pagename = 'Welcome to the Free Dating Platform!';

include('includes/head.inc.php');
?>


<body style="background-color:<?php echo $bgsitecolor; ?>;">
<?php

    include('views/header.view.php');
    
    include('views/createaccount.view.php');

    include('views/footer.view.php');
    
    include('includes/footer.inc.php');
?>


</body>
</html>