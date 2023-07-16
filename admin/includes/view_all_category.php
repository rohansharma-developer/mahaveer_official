<?php

include("delete_modal.php");

?>

<form action="" method="post">
    <table class="table table-responsive table-hover">

    <div class="col-xs-4">
        <a class="btn btn-primary" href="category.php?source=add_category">Add New</a>
    </div>

        <thead>
            <tr>
                <th><input type="checkbox" name="" id="selectAllBoxes"></th>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php //Showing all posts

            $query = "SELECT * FROM category ORDER BY category_id DESC";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($result)) 
            {
                $category_id            = $row['category_id'];
            $category_title           = $row['category_title'];
            $category_image    = $row['category_image'];
                echo "<tr>";

                if (isset($_GET['delete'])) {
    
   
            $delete_category_id = $_GET['delete'];

            $query = "DELETE FROM category WHERE category_id = $delete_category_id LIMIT 1";
            mysqli_query($connection, $query);

            header("Location: category.php");
        
    }
        ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $category_id; ?>'></td>
        <?php
                echo "<td>$category_id</td>";

                echo "<td>$category_title</td>";                
                echo "<td><img class='img-responsive' width='100' style='border-radius: 10px;' src='../images/$gallery_image'</td>";
                echo "<td><a class='btn btn-warning' href='category.php?source=edit_category&category_id=$category_id'>Edit</a></td>";
                // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" class='btn btn-danger' href='posts.php?delete=$post_id'>Delete</a></td>";
                echo "<td><a rel='$category_id' href='category.php?delete=$category_id' class='delete_link btn btn-danger'>Delete</a></td>";
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


            $query = "DELETE FROM category WHERE category_id = $delete_category_id LIMIT 1";
            $result = mysqli_query($connection, $query);

            

            header("Location: category.php");
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