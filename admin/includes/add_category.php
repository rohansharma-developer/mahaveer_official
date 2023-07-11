<?php

    if(isset($_POST['create_category']))
    {
       $category_title          = $_POST['category_title'];
       $category_image          = $_FILES['category_image']['name'];
       $category_image_tmp      = $_FILES['category_image']['tmp_name'];
       
       move_uploaded_file($category_image_tmp, "../category/$category_image");

       $query = "INSERT INTO category(category_title, category_image) VALUES('$category_title', '$category_image')";

        mysqli_query($connection, $query);

        header("Location: ./category.php");  
    }

?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="category_title">Image Title</label>
        <input type="text" name="category_title" class="form-control">
    </div>
    <div class="form-group">
        <label for="category_image">category Image</label>
        <input type="file" name="category_image" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="Publish to category" name="create_category" class="btn btn-primary">
    </div>

</form>