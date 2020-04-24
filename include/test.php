<?php include 'include/db.php' ?>
<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="inner-title testimonial-title text-center mb-80">
                                <span>Satisfied Users.</span>
                                <h2>Our Satisfied Users
                                Says About Us.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-active">
                    <?php
                                $query = "SELECT * FROM test";
                                $select_all_test_query = mysqli_query($connection,$query);
                                while ($row = mysqli_fetch_assoc($select_all_test_query)) {
                                    $test_author = $row['test_author'];
                                    $test_company = $row['test_company'];
                                    $test_content = $row['test_content'];
                    ?>
                        <div class="col-xl-4">
                            <div class="single-testimonial">
                                <div class="testimonial-content mt-20 mb-25">
                                    <p> <?php echo $test_content  ?> </p>
                                </div>
                                <div class="t-client fix">
                                    <div class="t-client-info fix">
                                        <h5><?php echo $test_author  ?></h5>
                                        <span><?php echo $test_company  ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>
                </div>