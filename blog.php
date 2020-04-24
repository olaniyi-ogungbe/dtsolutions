<?php require_once 'include/db.php' ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blog -  ...You Think It, We Make It...</title>
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
                                    <span>Blog</span>
                                    <h2>News Feeds</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- blog-area -->
            <section class="inner-blog pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col">

                        <?php
                                if(isset($_GET['page'])){
                                    $page =  $_GET['page'];
                                  }else{
                                      $page = "";
                                  }
              
                                  if($page == "" || $page == 1){
                                      $page_1 = 0;
                                  }else{
                                      $page_1 = ($page * 10) - 10;
                                  }
              
                                  $post_query_count = "SELECT * FROM posts";
                                  $find_count = mysqli_query($connection,$post_query_count);
                                  $count = mysqli_num_rows($find_count);
                                  $count = ceil($count / 10);
              

                                $query = "SELECT * FROM posts LIMIT $page_1, 10";
                                $select_all_posts_query = mysqli_query($connection,$query);
                                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                                    $post_id = $row['post_id'];
                                    $post_title = $row['post_title'];
                                    $post_date = $row['post_date'];
                                    $post_image = $row['post_image'];
                                    $post_content = $row['post_content'];
                                    $post_category = $row['post_category'];
                                    
                        ?>
                            <div class="bsingle-post mb-40">
                                <div class="bpost-thumb">
                                    <a href="blog-details.php?b_id=<?php echo $post_id; ?>"><img src="img/images/siteimages/<?php echo $post_image?>" alt=""></a>
                                </div>
                                <div class="bpost-content">
                                    <div class="b-tag">
                                        <a href="#"><?php echo $post_category ?></a> 
                                    </div>
                                    <h2><a href="blog-details.php?b_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a></h2>
                                    <div class="bpost-meta mb-20">
                                        <ul>
                                            <li><span><i class="fal fa-calendar-alt"></i><?php echo $post_date ?></span></li>
                                        </ul>
                                    </div>
                                    <p><?php echo $post_content ?></p>
                                    <div class="bpost-avatar">
                                        <div class="bavatar-info">
                                            <p>by <a href="#">DT Solutions</a></a></p>
                                        </div>
                                    </div>
                                    <div class="b-readmore">
                                        <a href="blog-details.php?b_id=<?php echo $post_id; ?>"><i class="fal fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="pagination-wrap">
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
                        </div>
                       
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
