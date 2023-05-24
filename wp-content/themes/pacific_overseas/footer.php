<a id="button"></a>
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget company-intro-widget">
                        <a href="<?php echo get_page_link(7) ?>" class="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
                       <?php the_field('summary_footer',53) ?>

                    </div>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget course-links-widget">
                        <h4 class="widget-title">Quick Link
                        </h4>
                        <ul class="courses-link-list">
                            <li><a href="<?php echo get_page_link(140) ?>"><i class="fas fa-long-arrow-alt-right"></i>Why Nepalese</a></li>
                            <li><a href="<?php echo get_page_link(152) ?>"><i class="fas fa-long-arrow-alt-right"></i>Required Documents
                                </a></li>
                            <li><a href="<?php echo get_page_link(157) ?>"><i class="fas fa-long-arrow-alt-right"></i>Selection Procedure</a></li>
                            <li><a href="<?php echo esc_url(home_url('#destination')); ?>"><i class="fas fa-long-arrow-alt-right"></i>Destination</a></li>
                            <li><a href="<?php echo get_page_link(196); ?>"><i class="fas fa-long-arrow-alt-right"></i>Category</a></li>

                        </ul>
                    </div>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget latest-news-widget">
                        <h4 class="widget-title">Connect With Us</h4>
                        <div class="social_icon py-2">
                            <ul class="d-flex">
                                <li><a href="<?php the_field('facebook',16) ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="<?php the_field('twitter',16) ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=" <?php the_field('youtube',16) ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="  <?php the_field('instagram',16) ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div><!-- widget end -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget newsletter-widget">
                        <h4 class="widget-title">Get in Touch</h4>
                        <div class="address-links">
                            <ul>
                                <li><a><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> <?php the_field('address',16) ?></a>
                                </li>
                                <li><a href="tel:<?php the_field('phone_number',16) ?><"><span><i class="fa fa-volume-control-phone"
                                                aria-hidden="true"></i></span> <?php the_field('phone_number',16) ?></a>
                                </li>

                                <li><a href="mailto:<?php the_field('email_address',16) ?>">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        <?php the_field('email_address',16) ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- widget end -->
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-sm-left text-center">
                    <span class="copy-right-text">© 2023 Pacific Overseas Pvt. Ltd. | All rights reserved. </span>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center">
                        <li><a href=""> Website by </a><span>ArchieSoft Technology</span></li>

                    </ul>
                </div>
            </div>
        </div>
    </div><!-- footer-bottom end -->
</footer><?php wp_footer(); ?>

<!-- mobile menu start  -->
<div class="side-bar">
    <header>
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
    </header>
    <div class="menu_mobile pt-3">



        <div class="item">
            <a class="sub-btn">
                About

                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="<?php echo get_page_link(53) ?>" class="sub-item">Introduction</a>
                <a href="<?php echo get_page_link(107) ?>" class="sub-item">Nepal Information</a>

                <a href="<?php echo get_page_link(115) ?>" class="sub-item">Message from Chairman </a>
                <a href="<?php echo get_page_link(127) ?>" class="sub-item">Meet the Team </a>

            </div>
        </div>
        <div class="item">
            <a class="sub-btn">
                Recruitment


                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="<?php echo get_page_link(140) ?>" class="sub-item">Why Nepalease</a>
                <a href="<?php echo get_page_link(152) ?>" class="sub-item">Required Documents</a>
                <a href="<?php echo get_page_link(157) ?>" class="sub-item">Recruitment Procedure</a>
                <a href="<?php echo get_page_link(161) ?>" class="sub-item">Terms & Conditions</a>


            </div>
        </div>
        <div class="item">
            <a class="sub-btn">
            International Marketing


                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
            <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'internationalmarket',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'international market',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                            <li>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>


            </div>
        </div>


    

        <div class="item"><a href="<?php echo get_page_link(196); ?>">Category</a></div>
        <div class="item"><a href="<?php echo get_page_link(199); ?>"> Jobs</a></div>

        <div class="item"><a href="<?php echo get_page_link(16) ?>">Contact</a></div>


    </div>
</div>
<!-- mobile menu end  -->
<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>
