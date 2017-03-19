<?php 
unset($_SESSION['username']); //user dei username onthok[]
unset($_SESSION['redid']); //eina add touba

session_destroy();
header('Location: evento-free-music-event-template/index.html');
?>
