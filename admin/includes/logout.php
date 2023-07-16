<?php ob_start(); ?>
<?php session_start(); ?>

<?php


       $_SESSION['user_id']    = null;
       $_SESSION['username']   = null;
       $_SESSION['password']   = null;
       $_SESSION['role']       = null;

       session_destroy(); 

       header("Location: ../../index.php");


?>