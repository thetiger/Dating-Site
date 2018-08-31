<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php

require_once('config.php');

require_once('classes/db.class.php');

require_once('classes/messages.class.php');

require_once('classes/users.class.php');

$pagename = 'Your Messages';
$page = 'messages';

include('includes/head.inc.php');

$id = $_SESSION['id'];

$information = \Users\users::getwildcarddata('dating_messages','*','dt_userto',$id,1);

if(isset($_GET['view'])){

    $id = @$_GET['id'];

    $information = \Users\users::getwildcarddata('dating_messages','*','dt_userto',$id,1);

}
?>

<body style="background-image:url('https://www.aircoder.co.uk/images/bgmade.png');">
    <?php
    
        include('views/header.view.php');
    
        include('views/navigation.view.php');
        
        include('views/messages.view.php');
    
        include('views/footer.view.php');
        
        include('includes/footer.inc.php');
    ?>
    
    
</body>
</html>