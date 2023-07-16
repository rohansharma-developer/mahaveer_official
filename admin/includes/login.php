<?php ob_start(); ?>
<?php session_start(); ?>
<?php include("db.php"); ?>

<?php

if(isset($_POST['login']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "SELECT * FROM users WHERE username = '$username'";
   $result = mysqli_query($connection, $query);

   if(!$result)
   {
        die("Query failed " . mysqli_error($connection));
   }

   while($row = mysqli_fetch_array($result))
   {
      $db_user_id          = $row['user_id'];
      $db_username         = $row['username'];
      $db_password         = $row['password'];
      $db_user_role        = $row['role'];
   }

   //$password = crypt($password, $db_password);

   if($password==$db_password)
   {
        $_SESSION['user_id']         = $db_user_id;
        $_SESSION['username']        = $db_username;
        $_SESSION['password']        = $db_password;
        $_SESSION['role']       = $db_user_role;

        header("Location: ../");
   }
   else
   {
     header("Location: ../../");
   }
}

?>