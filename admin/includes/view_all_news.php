<?php

include("delete_modal.php");

if(isset($_POST['checkBoxArray']))
{
    foreach($_POST['checkBoxArray'] as $newsValueId)
    {
        $bulk_options = $_POST['bulk_options'];

        switch ($bulk_options) 
        {
            case 'published':
                $query = "UPDATE news set news_status = '$bulk_options' WHERE news_id = $newsValueId"; 
                $update_to_published_status = mysqli_query($connection, $query);
                
            break;

            case 'draft':
                $query = "UPDATE news set news_status = '$bulk_options' WHERE news_id = $newsValueId"; 
                $update_to_draft_status = mysqli_query($connection, $query);
                
            break;

            case 'delete':
                $query = "DELETE FROM news WHERE news_id = $newsValueId";
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
        <a class="btn btn-primary" href="news.php?source=add_news">Add New</a>
    </div>

        <thead>
            <tr>
                <th><input type="checkbox" name="" id="selectAllBoxes"></th>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Month & Year</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php //Showing all posts

            $query = "SELECT * FROM news ORDER BY news_id DESC";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($result)) 
            {
                $news_id            = $row['news_id'];
            $news_title           = $row['news_title'];
            $news_date      = $row['news_date'];
            $news_month_year      = $row['news_month_year'];
            $news_status     = $row['news_status'];

                echo "<tr>";

                if (isset($_GET['delete'])) 
{
    
   
            $delete_news_id = $_GET['delete'];

            $query = "DELETE FROM news WHERE news_id = $delete_news_id LIMIT 1";
            mysqli_query($connection, $query);

            header("Location: news.php");
        
    }
        ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $news_id; ?>'></td>
        <?php
                echo "<td>$news_id</td>";

                echo "<td>$news_title</td>";                
                echo "<td>$news_date</td>";
                echo "<td>$news_month_year</td>";
                echo "<td>$news_status</td>";
                echo "<td><a class='btn btn-warning' href='news.php?source=edit_news&news_id=$news_id'>Edit</a></td>";
                // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" class='btn btn-danger' href='posts.php?delete=$post_id'>Delete</a></td>";
                echo "<td><a rel='$news_id' href='news.php?delete=$news_id' class='delete_link btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
        

            
        

            
        </tbody>
    </table>
</form>

<?php

if (isset($_GET['delete'])) 
{
    if(isset($_SESSION['user_role']))
    {
        if($_SESSION['user_role'] == 'Admin')
        {
            $delete_post_id = mysqli_real_escape_string($connection, trim($_GET['delete']));

            $query = "DELETE FROM posts WHERE post_id = $delete_post_id LIMIT 1";
            $result = mysqli_query($connection, $query);

            

            header("Location: news.php");
        }
    }
   


}

if(isset($_GET['reset']))
{
    $the_post_reset_id = mysqli_real_escape_string($connection, trim($_GET['reset']));

    $query = "UPDATE posts SET post_views_count = 0 WHERE post_id =" . mysqli_real_escape_string($connection, $_GET['reset']) . " ";
    $resetQuery = mysqli_query($connection, $query);

    

    header("Location: posts.php");
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