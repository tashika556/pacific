<section class="booking-logo services destination mt-0 position-relative">
    <div class="container">
    
        <div class="grid-container">

        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'partner',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'partner',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="grid-item">
                <a href="" class="logo_item d-flex justify-content-center align-items-center h-100" alt="#">
                    <img src="<?php echo the_post_thumbnail_url() ?>" alt="#" class="img-fluid">
                </a>
            </div>
           

            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>  
        </div>
    </div>
</section>