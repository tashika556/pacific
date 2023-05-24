 <!-- Template Name: Message Chairman Page -->
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
<section class="chairman_page bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto bg-white p-5">
                <div class="row">
                    <div class="col-12">
                        <div class="chairman section_title mb-0 py-3">
                            <div class="pl-3">
                                <h5><?php the_field('designation') ?>
                                </h5>
                                <h2><?php the_title() ?> </h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row no-gutters">
                    <div class="offset-lg-4 offset-0 col-lg-4">
                        <div class="name_block">
                            <h6><strong>Name: </strong> <span><?php the_field('full_name') ?></span></h6>
                            <h6><strong>Designation: </strong> <span><?php the_field('designation') ?></span></h6>
                            <h6><strong>Number: </strong> <span><?php the_field('phone_number') ?></span></h6>
                        </div>
                        <hr class="chairman_border">
                    </div>
                    <div class=" col-lg-4">
                        <div class="chairman_img">
                            <img src="<?php $image = get_field('image');  echo $image['url']; ?>" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wrapp_message">
                       
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?> 
                            <div class="btn_wrap mt-md-4 mt-3">
                                <a class="readmore__toggle btn text-white" role="switch" aria-checked="true">
                                    Show more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php include 'partner-panel.php'; ?>
<?php get_footer(); ?>