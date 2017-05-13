<?php

  session_start();
  
  require('db.php');
  
  $USERNAME = $_POST['uid'];
  echo $USERNAME;
  
?>