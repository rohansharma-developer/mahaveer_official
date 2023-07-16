<?php

include("delete_modal.php");

if(isset($_POST['checkBoxArray']))
{
    foreach($_POST['checkBoxArray'] as $galleryValueId)
    {
        $bulk_options = $_POST['bulk_options'];

        switch ($bulk_options) 
        {

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

        <thead>
            <tr>
                <th><input type="checkbox" name="" id="selectAllBoxes"></th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Reply</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php //Showing all posts

            $query = "SELECT * FROM contacts ORDER BY contact_id DESC";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($result)) 
            {
                $contact_id            = $row['contact_id'];
                $contact_name            = $row['contact_name'];
                $contact_subject            = $row['contact_subject'];
                $contact_email            = $row['contact_email'];
                $contact_message            = $row['contact_message'];
                
                echo "<tr>";

                if (isset($_GET['delete'])) {
    
   
            $delete_gallery_id = $_GET['delete'];

            $query = "DELETE FROM contacts WHERE contact_id = $delete_gallery_id LIMIT 1";
            mysqli_query($connection, $query);

            header("Location: contact.php");
        
    }
        ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $gallery_id; ?>'></td>
        <?php
                echo "<td>$contact_id</td>";

                echo "<td>$contact_name</td>";                

                echo "<td>$contact_email</td>";
                echo "<td>$contact_subject</td>";
                echo "<td>$contact_message</td>";
                echo "<td><a rel='$gallery_id' href='mailto:$contact_email' class='delete_link btn btn-success'>Reply</a></td>";
                echo "<td><a rel='$gallery_id' href='contact.php?delete=$contact_id' class='delete_link btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
        

            
        

            
        </tbody>
    </table>
</form>

<?php

if (isset($_GET['delete'])) 
{
            $delete_contact_id = mysqli_real_escape_string($connection, trim($_GET['delete']));


            $query = "DELETE FROM contact WHERE contact_id = $delete_contact_id LIMIT 1";
            $result = mysqli_query($connection, $query);

            

            header("Location: contact.php");
        }
?>

<script>




</script>