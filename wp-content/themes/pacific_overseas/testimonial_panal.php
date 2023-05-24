<section class="testimonial bg_gray">
    <div class="container">
    <div class="row mb-md-3 mb-4">
            <div class="col-md-6 mx-auto text-center">
                <div class="section_title text-white">
                    <h5>Reviews
                    </h5>
                    <h2>Few words of Clients  & Employers 
                    </h2>
                </div>
            </div>

        </div>

        <div class="testimonial_slider">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'review',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'review',
   'posts_per_page' => 20,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
    
            <div class="testimonial_item">
                <div class="testimonial_wrap">
                    <div class="testimonial_block text-center position-relative d-flex align-items-center">
                        <div class="testimonial_content">
                            <span> <i class="fa fa-quote-right" aria-hidden="true"></i></span>
                     <?php the_content() ?>
                            <span> <i class="fa fa-quote-right" aria-hidden="true"></i></span>
                            <div class="mt-2">
                                <h6><?php the_title() ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_logo text-center mt-4">
                        <img src="" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
          
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>    
        </div>
    </div>
</section>