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
                                case 'add_category':
                                    include("includes/add_category.php");
                                    break;
                                
                                case 'edit_category':
                                    include("includes/edit_category.php");
                                    break;
                                
                                default:
                                    include("includes/view_all_category.php");
                                    break;
                            }

                        ?>
                    </div>
                </div>
<?php include "includes/footer.php" ?>