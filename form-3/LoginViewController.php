<?php
session_start();
//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
echo "session variable : ".$_SESSION['username']; //I change to username from user
if (!isset($_SESSION['user'])) {
    header('Location: http://localhost/OurProject/evento-free-music-event-template/form-3/AfterCustomerLogin/CustomerPage.html');
    //echo "Session not set";
    exit();
}
else
{
	header('Location: http://localhost/OurProject/evento-free-music-event-template/form-3/AfterCustomerLogin/CustomerPage.html');
}
/*echo 'You have successfully logged as '.$_SESSION['user']*/

?>
