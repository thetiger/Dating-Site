<?php
session_start();
if(!empty($_SESSION)){
    session_destroy();
    echo 'We are currently redirecting you.';
    echo '<meta http-equiv="refresh" content="5;url=index.php" />';
}
else
{
    echo 'Hacker?';
}
?>