<?php

    if(isset($_POST['create_gallery']))
    {
       $gallery_title          = $_POST['gallery_title'];
       $gallery_image          = $_FILES['gallery_image']['name'];
       $gallery_image_tmp      = $_FILES['gallery_image']['tmp_name'];
       $gallery_status        = $_POST['gallery_status'];
       $gallery_cat_id        = $_POST['gallery_cat_id'];
       
       move_uploaded_file($gallery_image_tmp, "../gallery/$gallery_image");

       $query = "INSERT INTO gallery(gallery_title, gallery_image, gallery_status, gallery_cat_id) VALUES('$gallery_title', '$gallery_image', '$gallery_status', '$gallery_cat_id')";

        $result = mysqli_query($connection, $query);
        if (!$result) 
{
    die("Query failed! " . mysqli_error($connection));
}

        header("Location: ./gallery.php");  
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="gallery_title">Image Title</label>
        <input type="text" name="gallery_title" class="form-control">
    </div>
    <div class="form-group">
        <label for="gallery_image">Gallery Image</label>
        <input type="file" name="gallery_image" class="form-control">
    </div>
    <div class="form-group">
        <label for="gallery_status">Gallery Status</label>
        <select name="gallery_status" class="form-control">
            <option value="published">Select Options</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>
        </select>
    </div>
    <div class="form-group">
    <label for="gallery_cat_id">Gallery Category</label>
        <select name="gallery_cat_id" class="form-control">
            <?php 
            $query = "SELECT * FROM category";
            $result = mysqli_query($connection, $query);
    
            while($row = mysqli_fetch_array($result))
            {
                $category_id = $row['category_id'];
                $category_title         = $row['category_title'];
                ?>
<option value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
            
                <?php
            }
            ?>
        </select>
    </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Publish to Gallery" name="create_gallery" class="btn btn-primary">
    </div>

</form>