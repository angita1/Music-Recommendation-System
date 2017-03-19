<?php 
session_start();
session_unset();
session_destroy();
//$_SESSION['message']="U r now logged out";
//header("Location: ../index.html");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by,YOU have been logged out</h1>
              
          <p><?php 'You have been logged out!'; ?></p>
          
          <a href="../index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>


