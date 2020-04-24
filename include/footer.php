<?php include 'db.php' ?>
<footer class="footer-bg" data-background="img/bg/footer_bg.jpg">
            <div class="container">
                <div class="f-widget-wrap sf-widget-wrap border-none">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget sf-widget mb-30">
                                <div class="footer-logo mb-35">
                                    <a href="index.php"><img src="img/logo/white.png" alt=""></a>
                                </div>
                                <div class="footer-text mb-35">
                                    <p>Solving Problems through the use of technology is what we do best.</p>
                                </div>
                                <div class="footer-social">
                                <a href="https://web.facebook.com/dtsolutionsng/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/dtsolutionsng"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/dtsolutionsng/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/dtsolutionsng/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget sf-widget mb-30">
                                <div class="fw-title mb-40">
                                    <h5>Quick Links<span>.</span></h5>
                                </div>
                                <div class="footer-links">
                                    <ul class="left-link">  
                                        <li><a href="digital-marketing.php">Digital Marketing</a></li>
                                        <li><a href="mobile-app-web.php">Mobile/Web App Development</a></li>
                                        <li><a href="branding-design.php">Branding & Design</a></li>
                                    </ul>
                                    <ul class="right-link">
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="portfolio.php">Portfolio</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget sf-widget mb-30">
                                <div class="fw-title mb-40">
                                    <h5>News Feeds<span>.</span></h5>
                                </div>
                                <div class="footer-post pr-50">
                                    <ul>
                                    <?php
                                        $query = "SELECT * FROM posts LIMIT 3";
                                        $select_all_posts_query = mysqli_query($connection,$query);
                                        while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                                            $post_id = $row['post_id'];
                                            $post_title = $row['post_title'];
                                            $post_date = $row['post_date'];
                                            $post_image = $row['post_image'];
                                            $post_content = $row['post_content'];
                                            $post_category = $row['post_category'];
                                    
                                    ?>
                                        <li>
                                            <div class="f-post-thumb">
                                                <a href="blog-details.php?b_id=<?php echo $post_id; ?>"><img src="img/images/siteimages/<?php echo $post_image ?>" alt="" width="75px" height="75px" ></a>
                                            </div>
                                            <div class="f-post-content">
                                                <h4><a href="blog-details.php?b_id=<?php echo $post_id; ?>"> <?php echo $post_title ?></a></h4>
                                                <span class="f-post-date"><?php echo $post_date ?></span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap pb-30">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; <?php echo date('Y') ;?> <span>DT Solutions</span> </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="back-btn s-back-btn text-right">
                                <a href="#" id="scrollToTop" class="btn transparent-btn">bACK TO TOP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>