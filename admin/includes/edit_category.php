<?php

    if(isset($_GET['category_id']))
    {
        $the_get_category_id = $_GET['category_id'];

        $query = "SELECT * FROM category WHERE category_id = $the_get_category_id";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($result))
        {
            $category_id            = $row['category_id'];
            $category_title           = $row['category_title'];
            $category_image     = $row['category_image'];
        }
    }
    if (isset($_POST['update_category'])) 
    {
        $category_title           = $_POST['category_title'];
        $category_image          =  $_FILES['image']['name'];
       $category_image_tmp      =  $_FILES['image']['tmp_name'];

       move_uploaded_file($category_image_tmp, "../gallery/$category_image");

       if(empty($category_image))
       {
            $query = "SELECT * FROM category WHERE category_id = $the_get_category_id";
            $select_image = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_image))
            {
                $category_image = $row['category_image'];
            }
       }


       $query = "UPDATE category SET category_title = '$category_title', 
                category_image = '$category_image'
                WHERE category_id = $the_get_category_id";

        $result = mysqli_query($connection, $query);

        header("Location:./category.php");

    }

?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="category_title">Category Title</label>
        <input type="text" name="category_title" class="form-control" value="<?php echo $category_title; ?>">
    </div>
    <div class="form-group">
        <img class='img-responsive' width = "200" src="../assets/img/<?php echo $category_image; ?>" alt="">
        <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="Edit category" name="update_category" class="btn btn-primary">
    </div>
</form>