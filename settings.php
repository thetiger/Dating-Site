<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php

require_once('config.php');
require_once('classes/accounts.class.php');

use Accounts\accounts;

$checknow = accounts::checkexists('loggedin');

if($checknow === false){
    header('Location: index.php');
}

$pagename = 'Settings for you';
$page = 'settings';

include('includes/head.inc.php');

if(isset($_GET['show']) && isset($_GET['id'])){
    $id = $_GET['id'];
}
?>


<body>
<?php
    
    include('views/header.view.php');

    include('views/navigation.view.php');

    include('views/settings.view.php');

    include('views/footer.view.php');
    
    include('includes/footer.inc.php');
?>


</body>
</html>