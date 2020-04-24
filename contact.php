<?php include 'include/mailer.php' ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact Us - ...You Think It, We Make It...</title>
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
                                    <span>Contact</span>
                                    <h2>Contact Us</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
        <!-- contact-area start -->
        <section class="contact-area pt-120 pb-90" data-background="assets/img/bg/bg-map.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-envelope"></i>
                            <h3>Mail Here</h3>
                            <p>info@dtsolutions.com.ng</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Visit Here</h3>
                            <p>Plot 2 Block XVIII Oluyole Estate Extension Ibadan, Oyo 200261</p>
                        </div>
                    </div>
                    <div class="col-xl-4  col-lg-4 col-md-4 ">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-phone"></i>
                            <h3>Call Here</h3>
                            <p>+234 (0) 909 165 2799</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area end -->

        <!-- contact-form-area start -->
        <section class="contact-form-area gray-bg pt-100 pb-100">
            <div class="container">
                <div class="form-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title section-title-p text-center mb-65">
                                <span>Contact</span>
                                <h2>Estimate Your Idea</h2>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box phone-icon mb-30">
                                        <input type="text" name="phone" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="subject" placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="contact-btn text-center">
                                        <button class="btn btn-icon ml-0" type="submit">Send Message</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-area end -->

        <section class="map-area">
            <div id="contact-map" class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9857938890086!2d3.844053614206798!3d7.355488014973845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398c3f9054f3b5%3A0x36f856dbc71df57e!2s2%20Oluyole%20Estate%20Road%2C%20Oluyole%2C%20Ibadan!5e0!3m2!1sen!2sng!4v1586815711740!5m2!1sen!2sng" 
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
        </main>
        <!-- main-end -->
        <!-- footer -->
        <?php include 'include/footer.php' ?>
        <!-- footer-end -->




		<!-- JS here -->
        <?php include 'include/js.php' ?>
    </body>
</html>
