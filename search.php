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

$pagename = 'Searching Profiles';
$page = 'search';

include('includes/head.inc.php');
?>


<body style="background-image:url('https://www.aircoder.co.uk/images/bgmade.png');">
<?php

    include('views/navigation.view.php');

    include('views/search.view.php');

    include('views/footer.view.php');
    
    include('includes/footer.inc.php');
?>


</body>
</html>