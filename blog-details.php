<?php
    include 'include/db.php';

    if(isset($_GET['b_id'])){
        $the_post_id = $_GET['b_id'];
    }

    $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
    $select_all_posts_query = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        $post_category = $row['post_category'];}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Blog - ...You Think It, We Make It...</title>
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
                                    <h2>News Details</h2>
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
            <!-- blog-details -->
            <section class="blog-details pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="bsingle-post">
                                <div class="bpost-content b-details-content">
                                    <div class="b-tag">
                                        <a href="#"><?php echo $post_category ?></a>
                                    </div>
                                    <h2><?php echo $post_title ?></h2>
                                    <div class="bpost-meta mb-20">
                                        <ul>
                                            <li><i class="fal fa-user"></i><span>by </span><a href="#">DT Solutions</a></li>
                                            <li><span><i class="fal fa-calendar-alt"></i><?php echo $post_date ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="bdpost-thumb">
                                    <img src="img/images/siteimages/<?php echo $post_image  ?>" alt="img">
                                    </div>
                                    <p><?php echo $post_content ?></p>
                                    
                                   
                                    
                                    <!--
                                    <div class="comment-wrap mb-45">
                                        <div class="comment-wrap-title mb-35">
                                            <h5>03 Comments</h5>
                                        </div>
                                        <div class="single-comment">
                                            <div class="comments-avatar">
                                                <img src="img/blog/comment/c_01.png" alt="">
                                            </div>
                                            <div class="comment-text">
                                                <div class="avatar-name mb-15">
                                                    <h6>Rosalina Kelian</h6>
                                                    <span>19th March 2019</span>
                                                    <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                        <div class="single-comment children">
                                            <div class="comments-avatar">
                                                <img src="img/blog/comment/c_02.png" alt="">
                                            </div>
                                            <div class="comment-text">
                                                <div class="avatar-name mb-15">
                                                    <h6>Tanvir Raihan <i class="fas fa-bookmark"></i></h6>
                                                    <span>19th March 2019</span>
                                                    <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            </div>
                                        </div>
                                        <div class="single-comment">
                                            <div class="comments-avatar">
                                                <img src="img/blog/comment/c_03.png" alt="">
                                            </div>
                                            <div class="comment-text">
                                                <div class="avatar-name mb-15">
                                                    <h6>Salim Rana</h6>
                                                    <span>21th March 2019</span>
                                                    <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-comments-form">
                                        <div class="comment-wrap-title mb-35">
                                            <h5>Post Comment</h5>
                                        </div>
                                        <div class="comment-box">
                                            <form action="#" class="comment-form">
                                                <div class="comment-field text-area mb-20">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <textarea name="message" id="message" cols="30" rows="10"
                                                        placeholder="Type your comments...."></textarea>
                                                </div>
                                                <div class="comment-field mb-20">
                                                    <i class="far fa-user"></i>
                                                    <input type="text" placeholder="Type your name....">
                                                </div>
                                                <div class="comment-field mb-20">
                                                    <i class="fas fa-envelope"></i>
                                                    <input type="email" placeholder="Type your email....">
                                                </div>
                                                <div class="comment-field mb-20">
                                                    <i class="fas fa-globe"></i>
                                                    <input type="email" placeholder="Type your website....">
                                                </div>
                                                <button class="btn">Post Comments</button>
                                            </form>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- blog-details-end -->
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
