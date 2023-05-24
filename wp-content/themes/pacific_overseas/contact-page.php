 <!-- Template Name: Contact Page -->
 <?php get_header(); ?>
<!-- <section class="bg_img banner position-relative" style="background-image: url(img/banner/about.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h1> Job Demands </h1>


                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="map p-0">
<?php the_field('map') ?>
</section>
<section class="map_address">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title">
                    <h5>Get In Touch
                    </h5>
                    <h2>For Any Kind Of Help
                        And Informations.</h2>
                </div>
                <div class="contact_wrapp pr-5">
                    <div class="contact_wrapp-icon d-flex mb-5">
                        <h6><i class="fa fa-map-marker" aria-hidden="true"></i></h6>
                        <div class="ml-3">
                            <h4>Address</h4>
                            <a> <?php the_field('address') ?></a>
                        </div>
                    </div>
                    <div class="contact_wrapp-icon d-flex mb-5">
                        <h6><i class="fa fa-phone" aria-hidden="true"></i></h6>
                        <div class="ml-3">
                            <h4>Phone Number</h4>
                            <a href="tel:<?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a> <br>
                            <a href="tel:<?php the_field('phone_number2') ?>"> <?php the_field('phone_number2') ?></a>
                        </div>
                    </div>
                    <div class="contact_wrapp-icon d-flex">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i></h6>
                        <div class="ml-3">
                            <h4>Email Address</h4>
                            <a href="mailto:<?php the_field('email_address') ?>"> <?php the_field('email_address') ?></a> <br>
                            <a href="mailto:<?php the_field('email_address2') ?>"> <?php the_field('email_address2') ?></a><br>
                            <a href="mailto: <?php the_field('email_address3') ?> "> <?php the_field('email_address3') ?></a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="form_wrapp">
                    <div class="form_title mb-4">

                        <h2>Don’t Hesitate
                            To Send Your Message To Us</h2>
                    </div>
                   <?php the_field('contact_form') ?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'testimonial_panal.php'; ?>

<?php include 'partner-panel.php'; ?>
<?php get_footer(); ?>