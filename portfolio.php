<?php include 'include/db.php' ?>                
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
                                    <h2>Portfolio</h2>
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
            <!-- portfolio-area -->
            <section class="portfolio-area pt-120 pb-90">
                <div class="container">
                <div class="inner-title">
                                <h2 style="text-align: center;" >Some Awesome Works</h2>
                            </div>
                <?php

                    if(isset($_GET['page'])){
                      $page =  $_GET['page'];
                    }else{
                        $page = "";
                    }

                    if($page == "" || $page == 1){
                        $page_1 = 0;
                    }else{
                        $page_1 = ($page * 12) - 12;
                    }

                    $port_query_count = "SELECT * FROM port";
                    $find_count = mysqli_query($connection,$port_query_count);
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count / 12);



                    $query = "SELECT * FROM port  LIMIT $page_1, 12";
                    $select_all_port_query = mysqli_query($connection,$query);
                    while ($row = mysqli_fetch_assoc($select_all_port_query)) {
                        $port_id = $row['port_id'];
                        $port_date = $row['port_date'];
                        $port_client  = $row['port_client'];
                        $port_title  = $row['port_title'];
                        $port_category = $row['port_category'];
                        $port_image  = $row['port_image'];
                        $port_content = $row['port_content'];
                        $port_website = $row['port_website'];                            
                ?>      
                    <div class="row project-active">
                        <div class="col-lg-4 col-md-6 grid-item cat-two cat-three">
                            <div class="single-project p-relative mb-30">
                                <div class="project-thumb p-relative">
                                    <img src="img/images/siteimages/<?php echo $port_image ?>" alt="img">
                                </div>
                                <div class="project-overlay">
                                    <span><?php echo $port_category ?></span>
                                    <h5><a href="portfolio-details.php?p_id=<?php echo $port_id; ?>"><?php echo $port_title ?></a></h5>
                                </div>
                            </div>
                        </div>
                <?php } ?>
                    </div>
                </div>
            </section>
            <div class="pagination-wrap" style="padding-bottom: 20px">
                <nav>
                    <ul class="pagination">
                        <?php 
                        
                        for ($i=1; $i <= $count ; $i++) { 
                            echo " <li class='page-item'><a href='portfolio.php?page={$i}'>{$i}</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
             </div>                 
            <!-- portfolio-area-end -->
            <!-- cta-area -->
            <?php include 'include/project.php' ?>
            <!-- cta-area-end -->
        </main>
        <!-- main-end -->
        <!-- footer -->
        <?php include 'include/footer.php' ?>
        <!-- footer-end -->




		<!-- JS here -->
        <?php include 'include/js.php' ?>
    </body>
</html>
