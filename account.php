<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php

require_once('config.php');

require_once('classes/db.class.php');

require_once('classes/users.class.php');

require_once('classes/accounts.class.php');

require_once('classes/myfunctions.class.php');

use Accounts\accounts;

use Users\users;

$user = array();

$checknow = accounts::checkexists('loggedin');

if(!isset($_SESSION['loggedin'])){
    header('Location: index.php');
}

$pagename = 'My Account';

$page = 'home';

$allusers = users::getprofiles();

include('includes/head.inc.php');
?>


<body style="background-image:url('https://www.aircoder.co.uk/images/bgmade.png');">
<?php


    include('views/navigation.view.php');

    include('views/loggedin.view.php');

    include('views/footer.view.php');
    
    include('includes/footer.inc.php');
?>


</body>
</html>