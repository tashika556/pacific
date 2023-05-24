 <!-- Template Name: Nepal Information Page -->
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
<section class="nepal_information-page bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row no-gutters">
                    <div class="col-lg-8 col-md-6">
                        <div class="nepal_information-block text-lg-right text-center bg_black text-white">
                            <div class="mb-3">
                                <h5><?php the_title() ?> </h5>
                            </div>
                            <h1> <?php the_field('sub_heading') ?></h1>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nepal_information-img position-relative">
                            <img src="<?php $image = get_field('image_one');  echo $image['url']; ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why_nepal">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section_title">
                    <h5>Welcome
                    </h5>
                    <h2> <?php the_field('sub_heading') ?></h2>
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
            </div>
            <div class="col-lg-4">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>


<?php include 'testimonial_panal.php'; ?>

<?php include 'partner-panel.php'; ?>
<?php get_footer(); ?>