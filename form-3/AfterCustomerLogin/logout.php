<?php 
unset($_SESSION['user']); //user dei username onthok[]
unset($_SESSION['redid']); //eina add touba

session_destroy();
header('Location: ../index.php');
?>
