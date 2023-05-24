 <!-- Template Name: Jobs Page -->
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
<section class="job_list">
    <div class="container">
        <div class="row">

        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'jobss',
   'orderby' => 'date',
   'category_name'=>'jobs',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-3 col-md-6 mb-4">

                <a href="<?php the_permalink() ?>">
                    <div class="job_wrapp position-relative">
                        <div class="job-number">

                            <h1><?php the_field('number_of_vacancy') ?></h1>
                        </div>
                        <div class="job_title">
                            <h4><?php the_title() ?>
                            </h4>
                            <p><strong>Date: </strong><?php echo get_the_date() ?></p>
                        </div>
                        <div class="job-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/job02.png" alt="">

                        </div>
                    </div>
                </a>

            </div>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>  
          
        </div>
    </div>
</section>



<?php include 'testimonial_panal.php'; ?>

<?php include 'partner-panel.php'; ?>
<?php get_footer(); ?>