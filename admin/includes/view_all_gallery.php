<?php

include("delete_modal.php");

if(isset($_POST['checkBoxArray']))
{
    foreach($_POST['checkBoxArray'] as $galleryValueId)
    {
        $bulk_options = $_POST['bulk_options'];

        switch ($bulk_options) 
        {
            case 'published':
                $query = "UPDATE gallery set gallery_status = '$bulk_options' WHERE gallery_id = $galleryValueId"; 
                $update_to_published_status = mysqli_query($connection, $query);
                
            break;

            case 'draft':
                $query = "UPDATE gallery set gallery_status = '$bulk_options' WHERE gallery_id = $galleryValueId"; 
                $update_to_draft_status = mysqli_query($connection, $query);
                
            break;

            case 'delete':
                $query = "DELETE FROM gallery WHERE gallery_id = $galleryValueId";
                $update_to_delete_status = mysqli_query($connection, $query);
            break;
            
            default:
                # code...
                break;
        }
    }
}


?>

<form action="" method="post">
    <table class="table table-responsive table-hover">

    <div id="bulkOptionsContainer" class="col-xs-4">
        <select name="bulk_options" id="" class="form-control">
            <option value="">Select Options</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>
            <option value="delete">Delete</option>
        </select>
    </div>

    <div class="col-xs-4">
        <input type="submit" value="Apply" name="submit" class="btn btn-success">
        <a class="btn btn-primary" href="gallery.php?source=add_gallery">Add New</a>
    </div>

        <thead>
            <tr>
                <th><input type="checkbox" name="" id="selectAllBoxes"></th>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php //Showing all posts

            $query = "SELECT * FROM gallery ORDER BY gallery_id DESC";
            $result = mysqli_query($connection, $query);
            

            while ($row = mysqli_fetch_array($result)) 
            {
                
                $gallery_id            = $row['gallery_id'];
            $gallery_title           = $row['gallery_title'];
            $gallery_image    = $row['gallery_image'];
            $gallery_status     = $row['gallery_status'];
            $gallery_cat_id = $row['gallery_cat_id'];
            $cat = "SELECT * FROM category WHERE category_id = $gallery_cat_id";
            $ro = mysqli_query($connection, $cat);
            $category_title = $ro['category_title'];
                echo "<tr>";

                if (isset($_GET['delete'])) {
    
   
            $delete_gallery_id = $_GET['delete'];

            $query = "DELETE FROM gallery WHERE gallery_id = $delete_gallery_id LIMIT 1";
            mysqli_query($connection, $query);

            header("Location: gallery.php");
        
    }
        ?>
        <?php 
            
            ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $gallery_id; ?>'></td>
        <?php
                echo "<td>$gallery_id</td>";

                echo "<td>$gallery_title</td>";                

                echo "<td>$gallery_category";
                echo "<td><img class='img-responsive' width='100' style='border-radius: 10px;' src='../images/$gallery_image'</td>";
                echo "<td>$gallery_status</td>";
                echo "<td>$category_title</td>";
                echo "<td><a class='btn btn-warning' href='gallery.php?source=edit_gallery&gallery_id=$gallery_id'>Edit</a></td>";
                // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" class='btn btn-danger' href='posts.php?delete=$post_id'>Delete</a></td>";
                echo "<td><a rel='$gallery_id' href='gallery.php?delete=$gallery_id' class='delete_link btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
        

            
        

            
        </tbody>
    </table>
</form>

<?php

if (isset($_GET['delete'])) 
{
            $delete_gallery_id = mysqli_real_escape_string($connection, trim($_GET['delete']));


            $query = "DELETE FROM gallery WHERE gallery_id = $delete_gallery_id LIMIT 1";
            $result = mysqli_query($connection, $query);

            

            header("Location: gallery.php");
        }
?>

<script>

$(document).ready(function(){
    $(".delete_link").on('click', function(){
        var id = $(this).attr("rel");
        var delete_url = "posts.php?delete=" + id + "";
        
        $(".modal_delete_link").attr("href", delete_url);
        
        $("#myModal").modal('show');
    });
});


</script>