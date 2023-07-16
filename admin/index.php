<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/sidebar.php"; ?>

                        <div class="row">

                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">

                                    </div>

                                    <h4 class="header-title mt-0 mb-4">Visits</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                                   data-bgColor="#F9B9B9" value="<?php echo $visits; ?>"
                                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                   data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"><?php echo $visits; ?></h2>
                                            <p class="text-muted mb-1">Count</p>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->

                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">News</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#1654c3 "
                                                   data-bgColor="#1654c3" value="<?php echo $news_count; ?>"
                                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                   data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"><?php echo $news_count; ?></h2>
                                            <p class="text-muted mb-1">Count</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-4 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-4">Contacts</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                                    data-bgColor="#FFE6BA" value="<?php echo $contacts_count; ?>"
                                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                    data-thickness=".15"/>
                                        </div>
                                        <div class="widget-detail-1 text-right">
                                            <h2 class="font-weight-normal pt-2 mb-1"> <?php echo $contacts_count; ?> </h2>
                                            <p class="text-muted mb-1">Queries</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            
                        </div>
                        <!-- end row -->

                       
                                    <h4 class="header-title mt-0 mb-3">News</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                             <th>Date</th>
                                            <th>Month & Year</th>
                                            <th>Status</th>
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
   echo "</tr>";
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->       
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

<?php include "includes/footer.php"; ?>