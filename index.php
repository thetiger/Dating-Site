<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php
require_once('config.php');
require_once('classes/db.class.php');
require_once('classes/accounts.class.php');


use Accounts\accounts;

$checknow = accounts::checkexists('loggedin');

if(isset($_SESSION['loggedin'])){
    header('Location: account.php');
}

if(accounts::checkpost('login') === true){

    if(accounts::login($_POST['email'],$_POST['password']) === true){
        header('Location: account.php');
        exit();
    }
    else
    {
        $formmessage = true;
    }
}

$pagename = 'Welcome to the Free Dating Platform!';

include('includes/head.inc.php');
?>


<body style="background-color:<?php echo $bgsitecolor; ?>;">
<?php

    include('views/header.view.php');
    
    include('views/first.view.php');

    include('views/footer.view.php');
    
    include('includes/footer.inc.php');
?>


</body>
</html>