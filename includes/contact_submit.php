<?php
include "./db.php";
    if(isset($_POST['send_contact']))
    {
       $name            = $_POST['name'];
       $email          = $_POST['email'];
       $subject      = $_POST['subject'];
       $message      = $_POST['message'];


       $query = "INSERT INTO contacts(contact_name, contact_subject, contact_email, contact_message) VALUES('$name', '$subject', '$email', '$message')";

       
       $create_contact = mysqli_query($connection, $query);

       global $connection;
if (!$create_contact) 
{
    die("Query failed! " . mysqli_error($connection));
}
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "refresh" content = "2; url = ../" />
    <title>Contact@Mahaveer</title>
    <style>
        @charset "UTF-8";
body {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: helvetica;
  height: 100vh;
  overflow: hidden;
}

.card {
  background-color: #eee;
  padding: 50px;
  padding-left: 70px;
  border-radius: 5px;
  width: 400px;
  border-left: 7px solid #F22300;
  box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);
  display: flex;
  flex-direction: column;
  position: relative;
}


quote {
  font-size: 28px;
  font-family: "Comic Neue", cursive;
  color: #333;
}

author {
  font-weight: bold;
  color: dimgray;
  align-self: flex-end;
  text-transform: uppercase;
}

.triangle-1,
.triangle-2,
.triangle-3,
.triangle-4,
.triangle-5,
.triangle-6,
.triangle-7,
.triangle-9 {
  width: 400px;
  height: 400px;
  position: fixed;
}

.triangle-1 {
  background-color: #F22300;
  top: -100px;
  right: 0;
  transform: translate(50%, -50%) rotateZ(35deg);
  z-index: -1;
}

.triangle-2 {
  background-color: #AA1A04;
  top: -98px;
  right: 0;
  transform: translate(50%, -50%) rotateZ(29deg);
  z-index: -2;
}

.triangle-3 {
  width: 600px;
  background-color: #C41A00;
  top: -80px;
  right: 0;
  transform: translate(50%, -50%) rotateZ(24deg);
  z-index: -3;
}

.triangle-4 {
  width: 610px;
  background-color: #810D00;
  top: 0px;
  right: -20px;
  transform: translate(50%, -50%) rotateZ(60deg);
  z-index: -4;
}

.triangle-5 {
  width: 610px;
  background-color: #C4A6A2;
  top: 0px;
  right: 10px;
  transform: translate(50%, -50%) rotateZ(55deg);
  z-index: -5;
}

.triangle-6 {
  width: 610px;
  background-color: #E5DCDB;
  top: 0px;
  right: 50px;
  transform: translate(50%, -50%) rotateZ(49deg);
  z-index: -6;
}

.triangle-7 {
  width: 1000px;
  background-color: #F0F0F0;
  top: 0px;
  right: 50px;
  transform: translate(50%, -50%) rotateZ(60deg);
  z-index: -7;
}

.triangle-8 {
  position: absolute;
  width: 100px;
  height: 100px;
  background-color: #DCC6C4;
  bottom: 0px;
  right: 150px;
  transform: rotateZ(50deg);
}

.triangle-9 {
  overflow: hidden;
  width: 1000px;
  background-color: #E8D8D6;
  top: 100px;
  right: -100px;
  transform: translate(50%, -50%) rotateZ(79deg);
  z-index: -9;
}
    </style>
</head>
<body>
    
<div class="triangle-1"></div>
<div class="triangle-2"></div>
<div class="triangle-3"></div>
<div class="triangle-4"></div>
<div class="triangle-5"></div>
<div class="triangle-6"></div>
<div class="triangle-7"></div>
<div class="triangle-9">
  <div class="triangle-8"></div>
</div>
<div class="card" style="text-align: center;">
  <quote>Your Query has been Submitted!</quote>
  <h4>You will be redirected in a moment</h3>
</div>
</body>
</html>
