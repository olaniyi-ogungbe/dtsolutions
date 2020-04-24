<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Quote - ...You Think It, We Make It...</title>
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
                                    <span>Quote</span>
                                    <h2>Request a Quote</h2>
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Quote</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

        <!-- contact-form-area start -->
        <section class="contact-form-area gray-bg pt-100 pb-100">
            <div class="container">
                <div class="form-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title section-title-p text-center mb-65">
                                <span>Request Quote</span>
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
                                        <input type="text" name="brand" placeholder="Brand Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="service" placeholder="Service Preferred">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="contact-btn text-center">
                                        <button class="btn btn-icon ml-0" type="send">Send Message</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-area end -->
        </main>
        <!-- main-end -->
        <!-- footer -->
        <?php include 'include/footer.php' ?>
        <!-- footer-end -->




		<!-- JS here -->
        <?php include 'include/js.php' ?>
    </body>
</html>
