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

use Accounts\accounts;

$checknow = accounts::checkexists('loggedin');

if($checknow === false){
    header('Location: index.php');
}

$pagename = 'Viewing - Someones Page';
$page = 'viewing';

if(isset($_GET['view']) && isset($_GET['id']) && !empty($_GET['id'])){
    $weneed = $_GET['id'];
    $ouruserdata = \Users\users::getwildcarddata('dating_additional','*','dt_userid',$weneed,1);
    $userdata = \Users\users::getwildcarddata('dating_users','fname,lname,location,image','id',$weneed,1);
}
else
{
    header('Location: index.php');
}

include('includes/head.inc.php');
?>


<body style="background-image:url('https://www.aircoder.co.uk/images/bgmade.png');">
<?php

    include('views/header.view.php');

    include('views/navigation.view.php');
    
    include('views/viewprofile.view.php');

    include('views/footer.view.php');
    
    include('includes/footer.inc.php');
?>


</body>
</html>