<?php include 'include/db.php' ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DT Solutions - ...You Think It, We Make It...</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include 'include/css.php' ?>
    </head>
    <body>
        <!-- preloader -->
        <?php include 'include/preloader.php' ?>
        <!-- preloader end  -->

        <!-- header -->
        <?php include 'include/home_header.php' ?>
        <!-- header-end -->
        <!-- main -->
        <main>
            <!-- slider-area -->
            <section class="slider-area p-relative slider-bg" data-background="img/slider/slider_bg.jpg">
                <div class="slider-active">
                    <div class="single-slider slider-p pt-165">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="s-slider-content">
                                        <span data-animation="fadeInUp" data-delay=".2s">...You Think It, We Make It...</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Digital Agency</h2>
                                        <div class="slider-btn s-slider-btn mt-65">
                                            <a href="about-us.php" class="btn" data-animation="fadeInLeft" data-delay=".8s">About Us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="s-slider-img" data-animation="fadeInRight" data-delay=".6s">
                                        <img src="img/slider/slider_img02.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            <!-- features-area -->
            <section class="features-area p-relative pt-120 pb-80">
                <?php include 'include/what.php' ?>
            </section>
            <!-- features-area-end -->
            <!-- about-area -->
            <section class="about-area p-relative about-padding about-bg pt-120 pb-120" data-background="img/bg/about_bg.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-5">
                            <div class="s-about-img">
                                <img src="img/about/about_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="s-inner-title mb-70">
                                <span>More About Us</span>
                                <h2>We Provide Smart & Digital Services.</h2>
                                <p>A well-executed brand strategy affects all aspects of a business and is connected to consumer needs & emotions.</p>
                            </div>
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-about">
                                            <div class="sa-icon blue-icon mb-35">
                                                <i class="fal fa-backpack"></i>
                                            </div>
                                            <div class="sa-content">
                                                <h5>Innovative Design</h5>
                                                <p>A properly crafted design plan tailored to suit the needs of each individual brand and increase customer turnouts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-about">
                                            <div class="sa-icon green-icon mb-35">
                                                <i class="fal fa-ball-pile"></i>
                                            </div>
                                            <div class="sa-content">
                                                <h5>Creative Design</h5>
                                                <p>A design so creative that it blows the mind of your potential customers away that it reduces bounce rate and increases conversion rate.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- portfolio-area -->
            <section class="portfolio-area pt-115 pb-90">
                <div class="container">
                    <div class="row d-flex align-items-center mb-70">
                        <div class="col-xl-7 col-lg-6">
                            <div class="inner-title">
                                <span>Our portfolio</span>
                                <h2>Some Awesome Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row project-active">
                    <?php
                        $query = "SELECT * FROM port LIMIT 6 ";
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
                        <div class="col-lg-4 col-md-6 grid-item">
                            <div class="single-project p-relative mb-30">
                                <div class="project-thumb p-relative">
                                    <img src="img/images/siteimages/<?php echo $port_image ?> " alt="img">
                                </div>
                                <div class="project-overlay">
                                    <span><?php echo $port_category ?></span>
                                    <h5><a href="portfolio-details.php?p_id=<?php echo $port_id; ?>"><?php echo $port_title ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                    <div style="float: right">
                        <a href="portfolio.php" class="btn">More</a>
                    </div>
                </div>
            </section>
            <!-- portfolio-area-end -->
            <!-- cta-area -->
            <!-- cta-area -->
            <?php include 'include/project.php' ?>
            <!-- cta-area-end -->
            <!-- cta-area-end -->
            <!-- counter-area -->
            <section class="counter-area">
                <div class="container">
                <?php include 'include/counter.php' ?>
                </div>
            </section>
            
            <!-- counter-area-end -->
            
            <!-- testimonial-area -->
            <section class="testimonial-area testimonial-bg pt-113 pb-175" data-background="img/bg/testimonial_bg.jpg">
                <?php include 'include/test.php' ?>
            </section>
            <!-- testimonial-area-end -->
            <!-- blog-area -->
            <section class="blog-area pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 col-md-11">
                            <div class="s-section-title text-center mb-75">
                                <span class="title-border"></span>
                                <h2>News Feeds</h2>
                                <p>Read the latest news on how you can give you brand a digital prescence boost.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                                $query = "SELECT * FROM posts LIMIT 2";
                                $select_all_posts_query = mysqli_query($connection,$query);
                                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                                    $post_id = $row['post_id'];
                                    $post_title = $row['post_title'];
                                    $post_date = $row['post_date'];
                                    $post_image = $row['post_image'];
                                    $post_content = substr($row['post_content'],0,200) ;
                                    
                    ?>
                        <div class="col-lg-6">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.php?b_id=<?php echo $post_id; ?>"><img src="img/images/siteimages/<?php echo $post_image ?>" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.php?b_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a></h3>
                                    <p> <?php echo $post_content ?> </p>
                                    <div class="blog-avatar">
                                        <div class="b-avatar-info fix">
                                            <h5>By <a href="#">DT Solutions</a> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                    </div>
                    <div style="float: right">
                        <a href="blog.php" class="btn">Read More</a>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
            <!-- s-cta -->
            <?php include 'include/client.php' ?>
            <!-- s-cta-end -->
        </main>
        <!-- main-end -->
        <!-- footer -->
        <?php include 'include/footer.php' ?>
        <!-- footer-end -->

		<!-- JS here -->
       <?php include 'include/js.php' ?>
    </body>
</html>
