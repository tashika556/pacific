 <!-- Template Name: Team Page -->
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
<section class="team">
    <div class="container">

        <div class="team-wrapp">
            
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'team',
   'posts_per_page' => 1,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="team_wrapp position-relative">
                        <div class="team_img">
                            <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                        </div>
                        <div class="team_text">
                            <h4><?php the_title() ?></h4>
                            <h5><?php the_field('designation') ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php endwhile; ?>
<?php wp_reset_postdata(); ?>  

        <div class="row ">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'team',
   'posts_per_page' => 100,
   'offset' =>1,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-4 col-md-6">
                <div class="team_wrapp position-relative">
                    <div class="team_img">
                    <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                    </div>
                    <div class="team_text">
                    <h4><?php the_title() ?></h4>
                            <h5><?php the_field('designation') ?></h5>
                    </div>
                </div>  
            </div>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?> 
       
            
        </div>
    </div>
</section>




<?php include 'testimonial_panal.php'; ?>

<?php include 'partner-panel.php'; ?>
<?php get_footer(); ?>