<?php

    if(isset($_GET['gallery_id']))
    {
        $the_get_gallery_id = $_GET['gallery_id'];

        $query = "SELECT * FROM gallery WHERE gallery_id = $the_get_gallery_id";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($result))
        {
            $gallery_id            = $row['gallery_id'];
            $gallery_title           = $row['gallery_title'];
            $gallery_image     = $row['gallery_image'];
            $gallery_status     = $row['gallery_status'];
        }
    }

    if (isset($_POST['update_gallery'])) 
    {
        $gallery_title           = $_POST['gallery_title'];
        $gallery_image          =  $_FILES['image']['name'];
       $gallery_image_tmp      =  $_FILES['image']['tmp_name'];
        $gallery_status      = $_POST['gallery_status'];

       move_uploaded_file($gallery_image_tmp, "../assets/img/$gallery_image");

       if(empty($gallery_image))
       {
            $query = "SELECT * FROM gallery WHERE gallery_id = $the_get_gallery_id";
            $select_image = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($select_image))
            {
                $gallery_image = $row['gallery_image'];
            }
       }


       $query = "UPDATE gallery SET gallery_title = '$gallery_title', 
                gallery_image = '$gallery_image', 
                gallery_status = '$gallery_status' 
                WHERE gallery_id = $the_get_gallery_id";

        $result = mysqli_query($connection, $query);

        header("Location:./gallery.php");

    }

?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="gallery_title">Gallery Title</label>
        <input type="text" name="gallery_title" class="form-control" value="<?php echo $gallery_title; ?>">
    </div>
    <div class="form-group">
        <label for="gallery_status"></label>
        <select name="gallery_status" class="form-control">
            <option value='<?php echo $gallery_status; ?>'><?php echo $gallery_status; ?></option>
            
            <?php
                if($gallery_status == "published")
                {
                    echo "<option value='draft'>Draft</option>";
                }
                else
                {
                    echo "<option value='published'>Published</option>";
                }
            ?>
            
        </select>
    </div>

    <!-- <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" name="post_status" class="form-control" value="<?php //echo $post_status; ?>">
    </div> -->

    <div class="form-group">
        <img class='img-responsive' width = "200" src="../assets/img/<?php echo $gallery_image; ?>" alt="">
        <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="Edit Gallery" name="update_gallery" class="btn btn-primary">
    </div>

</form>