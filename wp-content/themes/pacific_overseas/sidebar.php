<div class="d-lg-block d-md-flex d-block mt-lg-0 mt-5 ">
    <div class="category_side-job mr-lg-0 mr-2">



    
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
        <div class="category_job-item">
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

    <!-- category slider end  -->
    <div class="category_block_item mt-lg-4 mt-0 ml-lg-0 ml-md-2 ml-0">
        <div class="category_title bg_green-1">
            <h3>Job Category
            </h3>
        </div>
      <?php
function get_text_color_from_bg_color($bg_color) {
    // Define the color thresholds based on luminance
    $threshold = 170; // Adjust this value as needed

    // Get the RGB values of the background color
    list($r, $g, $b) = sscanf($bg_color, 'bg_%d-%d');

    // Calculate the luminance of the background color
    $luminance = (0.299 * $r) + (0.587 * $g) + (0.114 * $b);

    // Determine the text color based on the luminance threshold
    if ($luminance > $threshold) {
        return '#000000'; // Dark text color for light backgrounds
    } else {
        return '#ffffff'; // Light text color for dark backgrounds
    }
}

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'jobcategories',
    'orderby' => array(
        'meta_key' => 'bar',
        'order' => 'DESC',
    ),
    'category_name' => 'categories',
    'posts_per_page' => 100,
    'paged' => $paged
);
$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) {
    $class_colors = array('bg_green-2', 'bg_greem-3', 'bg_blue-4');
    $color_count = count($class_colors);
    $i = 0;
    ?>
    <ul>
    <?php
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        $postid = get_the_ID();
        $class_color = $class_colors[$i % $color_count];
        $text_color = get_text_color_from_bg_color($class_color);
        ?>
        <a href="<?php the_permalink(); ?>">
            <li class="<?php echo $class_color; ?>" style="color: <?php echo $text_color; ?>;">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <?php the_title(); ?>
            </li>
        </a>
        <?php
        $i++;
    }
    ?>
    </ul>
    <?php
    wp_reset_postdata();
} else {
    echo 'No posts found.';
}
?>





    </div>
</div>