<?php
include "includes/db.php";
    if(isset($_POST['create_user']))
    {
       $username            = mysqli_real_escape_string($connection, trim($_POST['username']));
       $user_image          = $_FILES['user_image']['name'];
       $user_image_tmp      = $_FILES['user_image']['tmp_name'];
       $password            = mysqli_real_escape_string($connection, trim($_POST['password']));
       $role           = mysqli_real_escape_string($connection, trim($_POST['user_role']));

       move_uploaded_file($user_image_tmp, "../images/$user_image");

       $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

       $query = "INSERT INTO users(user_image, username, password, role) VALUES('$user_image', '$username', '$password', '$role')";

        $create_user = mysqli_query($connection, $query);

        echo "User Added Successfuly" . " " . "<a href='users.php'>View Users</a>";

    }

?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="user_image">Image</label>
        <input type="file" name="user_image" class="form-control">
    </div>

    <div class="form-group">
        <select name="user_role" class="form-control">
            <option value="Admin">Admin</option>
        </select>

    </div>

    <div class="form-group">
        <input type="submit" value="Add User" name="create_user" class="btn btn-primary">
    </div>

</form>