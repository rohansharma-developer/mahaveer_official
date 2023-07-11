<?php
    if(isset($_POST['create_news']))
    {
       $title            =  $_POST['news_title'];
       $month_year            = $_POST['news_month_year'];
       $status            = $_POST['news_status'];
       $date            = $_POST['news_date'];


       $query = "INSERT INTO news(news_title, news_date, news_month_year, news_status) VALUES('$title', '$date', '$month_year', '$status')";

        $create_news = mysqli_query($connection, $query);

               global $connection;
        if (!$create_news) 
        {
            die("Query failed! " . mysqli_error($connection));
        }

        echo "News Added Successfuly" . " " . "<a href='news.php'>View News</a>";

    }

?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
            <label for="news_title">Title</label>
            <input type="text" name="news_title" class="form-control">
    </div>

    <div class="form-group">
            <label for="news_date">Date</label>
            <input type="text" name="news_date" class="form-control">
    </div>
    <div class="form-group">
            <label for="news_month_year">Month & Year</label>
            <input type="text" name="news_month_year" class="form-control">
    </div>/
    <div class="form-group">
        <label for="news_status">News Status</label>
        <select name="news_status" class="form-control">
            <option value="draft">Select Options</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>
        </select>
    </div>

    <div class="form-group">
        <input type="submit" value="Add News" name="create_news" class="btn btn-primary">
    </div>

</form>