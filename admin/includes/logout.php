<?php session_start(); ?>
<?php include './function.php' ?>
<?php

$_SESSION['user_id'] = null;
redirect('Location: ../../index.php');

?>