 <!-- Template Name: Introduction Page -->
 <?php get_header(); ?>
<section class="bg_img banner position-relative" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h1> <?php the_title() ?> </h1>


                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_img position-relative">
                    <div class="about_img-block">
                        <img src="<?php $image = get_field('image_one');  echo $image['url']; ?>" class="img-fluid w-100 pl-md-5 pl-0 pr-md-3 pr-0" alt="">
                    </div>
                    <div class="experience">
                        <h3><?php the_field('years_of_experience') ?> Years of Experience</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_wrapp">
                    <div class="section_title">
                        <h5>Welcome
                        </h5>
                        <h2><?php echo  get_bloginfo('name') ?></h2>
                    </div>
                    <div class="readmore__content my-4">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?> 
                </div>
                <div class="btn_wrap mt-md-4 mt-3">
                    <a class="readmore__toggle btn text-white" role="switch" aria-checked="true">
                        Show more
                    </a>
                </div>
                    <hr class="custome_hr">
                    <div class="section_title">
                        <h5>Call to Ask Any Question
                        </h5>
                        <h3><a href="tel:<?php the_field('phone_number',16) ?>

                           "><?php the_field('phone_number',16) ?>

                            </a> or <a href="tel:<?php the_field('phone_number3',16) ?>

                            "><?php the_field('phone_number3',16) ?>

                            </a></h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="project_section" class="project bg_black">
    <div class="container">
        <div class="about_row-wrapp">
            <div class="row">
            <?php   if( have_rows('more_details') ):?>
<?php while( have_rows('more_details') ) : the_row();?>
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <div class="about_three-block bg-white text-center">
                        <img src=" <?php $image = get_sub_field('image'); echo $image['url']; ?>" class="img-fluid" alt="">
                        <div class="py-3">
                            <h4><?php the_sub_field('title') ?></h4>
                        </div>
                        <?php the_sub_field('summary') ?>
                    </div>
                </div>
                <?php   endwhile; ?>
<?php endif;?> 
               

            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                <div class="wrap_counter">
                    <div id="counter-box" class="text-center text-white">
                        <h1> <span class="counter" data-number="<?php the_field('countries') ?>"></span></h1>
                        <p>
                        <div class="elementor-text-editor elementor-clearfix text-white">
                            Countries </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                <div class="wrap_counter">
                    <div id="counter-box" class="text-center text-white">
                        <h1> <span class="counter" data-number="<?php the_field('demands') ?>"></span><small></small></h1>
                        <p>Demands</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                <div class="wrap_counter">
                    <div id="counter-box" class="text-center text-white">
                        <h1> <span class="counter" data-number="<?php the_field('clients') ?>"></span><small>+</small></h1>
                        <p>Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                <div class="wrap_counter">
                    <div id="counter-box" class="text-center text-white">
                        <h1> <span class="counter" data-number="<?php the_field('happy_clients') ?>"></span><small>%</small></h1>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'testimonial_panal.php'; ?>

<?php include 'partner-panel.php'; ?>
<?php get_footer(); ?>