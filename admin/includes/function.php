<?php 
        global $connection;
        $query = "SELECT * FROM visits";
        $select_all_posts = mysqli_query($connection, $query);

        $visits = mysqli_num_rows($select_all_posts);

        $news = "SELECT * FROM news";
        $select_all_news = mysqli_query($connection, $news);

        $news_count = mysqli_num_rows($select_all_news);
    
        $contacts = "SELECT * FROM contacts";
        $select_all_contacts = mysqli_query($connection, $contacts);

        $contacts_count = mysqli_num_rows($select_all_contacts);
    
?>