<?php session_start();

  session_destroy();

  $_SESSION['name'] = null;

  header('location: index.php')
?>
