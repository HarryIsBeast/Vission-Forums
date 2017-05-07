<?php

  session_start();
  
  require('db.php');

  $username = strip_tags($_POST["uid"]);
  $password = strip_tags($_POST["pwd"]);

  $username = stripslashes($username);
  $password = stripslashes($password);

  $username = mysqli_real_escape_string($conn,$username);
  $password = mysqli_real_escape_string($conn,$password);

  $password = password_hash($password, PASSWORD_DEFAULT);
  
  echo 'unhashed: ';
  echo $_POST['pwd'];
  echo '<br>';
  echo 'hashed: ';
  echo $password;
?>