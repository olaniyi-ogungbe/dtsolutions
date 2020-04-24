<?php include 'include/db.php' ?>
<?php

    if(isset($_GET['p_id'])){
        $the_port_id = $_GET['p_id'];
    }

   $query = "SELECT * FROM port WHERE port_id = $the_port_id ";
   $select_all_port_query = mysqli_query($connection,$query);
   while ($row = mysqli_fetch_assoc($select_all_port_query)) {
       $port_date = $row['port_date'];
       $port_client  = $row['port_client'];
       $port_title  = $row['port_title'];
       $port_category = $row['port_category'];
       $port_image  = $row['port_image'];
       $port_content = $row['port_content'];
       $port_website = $row['port_website'];

       }                             
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Portfolio - ...You Think It, We Make It...</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include 'include/css.php' ?>
    </head>
    <body>
        <!-- preloader -->
        <?php include 'include/preloader.php' ?>
        <!-- preloader end  -->

        <!-- header -->
        <?php include 'include/header.php' ?>
        <!-- header-end -->
        <!-- main -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="breadcrumb-wrap">
                                <div class="breadcrumb-title mb-20">
                                    <span>Portfolio</span>
                                    <h2>Portfolio Details</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- portfolio-details -->
            
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="portfolio-details-wrap">
                                <div class="portfolio-details-thumb mb-55">
                                    <img src="img/images/siteimages/<?php echo $port_image  ?>" alt="img">
                                </div>
                                <div class="inner-title mb-30">
                                    <span><?php echo $port_category  ?></span>
                                    <h2><?php echo $port_title  ?></h2>
                                </div>
                                <div class="portfolio-details-content mb-50">
                                    <p><?php echo $port_content  ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="project-status">
                                <ul>
                                    <li>
                                        <h5>Client:</h5>
                                        <span>H<?php echo $port_client  ?></span>
                                    </li>
                                    <li>
                                        <h5>Date:</h5>
                                        <span><?php echo $port_date  ?></span>
                                    </li>
                                    <li>
                                        <h5>Website:</h5>
                                        <span><?php echo $port_website  ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-end -->
             <!-- s-cta -->
             <?php include 'include/client.php' ?>
            <!-- s-cta-end -->
        <!-- main-end -->
        <!-- footer -->
        <?php include 'include/footer.php' ?>
        <!-- footer-end -->




		<!-- JS here -->
        <?php include 'include/js.php' ?>
    </body>
</html>
