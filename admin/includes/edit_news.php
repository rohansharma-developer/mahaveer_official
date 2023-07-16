<?php

    if(isset($_GET['news_id']))
    {
        $the_get_news_id = $_GET['news_id'];

        $query = "SELECT * FROM news WHERE news_id = $the_get_news_id";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($result))
        {
            $news_id            = $row['news_id'];
            $news_title           = $row['news_title'];
            $news_date      = $row['news_date'];
            $news_month_year      = $row['news_month_year'];
            $news_status     = $row['news_status'];
        }
    }

    if (isset($_POST['update_news'])) 
    {
        $news_id            = $_POST['news_id'];
            $news_title           = $_POST['news_title'];
            $news_date      = $_POST['news_date'];
            $news_month_year      = $_POST['news_month_year'];
            $news_status     = $_POST['news_status'];

       $query = "UPDATE news SET news_title = '$news_title', 
                news_date = '$news_date', news_month_year = '$news_month_year', 
                news_status = '$news_status' 
                WHERE news_id = $the_get_news_id";

        $result = mysqli_query($connection, $query);

        header("Location:./news.php");

    }

?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="post_title">News Title</label>
        <input type="text" name="news_title" class="form-control" value="<?php echo $news_title; ?>">
    </div>
    <div class="form-group">
        <label for="news_date">News Date</label>
        <input type="text" name="news_date" class="form-control" value="<?php echo $news_date; ?>">
    </div>
    <div class="form-group">
        <label for="news_month_year">News Month & Year</label>
        <input type="text" name="news_month_year" class="form-control" value="<?php echo $news_month_year; ?>">
    </div>

    <div class="form-group">
        <label for="post_category">News Status</label>
        <select name="news_status" class="form-control">
            <option value='<?php echo $news_status; ?>'><?php echo $news_status; ?></option>
            
            <?php
                if($news_status == "published")
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
    <div class="form-group">
        <input type="submit" value="Edit News" name="update_news" class="btn btn-primary">
    </div>

</form>