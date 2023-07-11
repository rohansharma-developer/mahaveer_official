<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/sidebar.php"; ?>
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                        <?php
                            // Displaying pages based on condition
                            if (isset($_GET['source'])) 
                            {
                                $source = $_GET['source'];
                            }
                            else
                            {
                                $source = "";
                            }

                            switch ($source) {
                                case 'add_gallery':
                                    include("includes/add_gallery.php");
                                    break;
                                
                                case 'edit_gallery':
                                    include("includes/edit_gallery.php");
                                    break;
                                
                                default:
                                    include("includes/view_all_gallery.php");
                                    break;
                            }

                        ?>
                    </div>
                </div>
<?php include "includes/footer.php" ?>