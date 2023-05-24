 <!-- Template Name: Home Page -->
 <?php get_header(); ?>
<section class="slider_homepage p-0">
    <div class="slider stick-dots">
    <?php
    $images = get_field('image_slider');
if( $images ): ?>
<?php foreach( $images as $image ): ?>
        <div class="slide">
            <div class="slide__img">
                <img src="" alt="" data-lazy="<?php echo $image['url'];?>" class="full-image animated"
                    data-animation-in="zoomInImage" />
            </div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-7 h-100 d-flex align-items-center">
                        <div class="slide__content d-lg-block d-none">
                            <div class="slide__content--headings">
                                <div class="animated" data-animation-in="fadeInRight">
                                    <p>Welcome to PACIFIC Overseas Consult (P) Ltd.</p>
                                </div>
                                <h2 class="animated" data-animation-in="fadeInRight">Better Solution <br> At Your
                                    Fingertips.
                                </h2>
                                <div class="animated video_wrapp d-flex align-items-center"
                                    data-animation-in="fadeInRight">
                                    <div class="about_video_block text-center">
                                        <a href="<?php the_field('video_play_link') ?>"
                                            class="youtube" mute=1 allow="autoplay">
                                            <div class="video-main">
                                                <div class="promo-video">
                                                    <div class="waves-block">
                                                        <div class="waves wave-1"></div>
                                                        <div class="waves wave-2"></div>
                                                        <div class="waves wave-3"></div>
                                                    </div>
                                                </div>

                                                <i class="fa fa-play"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="btn_wrap">
                                        <a href="<?php echo get_page_link(16) ?>" class="animated btn mr-3 px-4"
                                            data-animation-in="fadeInRight">
                                            Contact Us
                                            <div class="arrow"></div>
                                        </a>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 h-100">
                        <div class="banner-bar position-relative">
                            <!-- <div class="banner-video">

                                <div class="youtube_block">

                                    <a href="https://www.youtube-nocookie.com/embed/NAtMxS28uX8?autoplay=1&mute=1"
                                        class="youtube" mute=1 allow="autoplay">
                                        <p>Watch Intro</p>
                                        <img class="about_youtube-btn"
                                            src="http://localhost/project/parents-selfhelp/img/youtube_btn.gif" alt="">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php endforeach; ?>
<?php endif;?> 
    </div>
</section>

<section class="job position-relative pt-0">
    <div class="container">
        <div class="job_list-wrapp">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="job_slider">

                   


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
                        <div class="job_slider-item">
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
                <div class="col-lg-4 col-md-6">
                    <div class="category_block_item">
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
                        <img src="<?php $image = get_field('image_one',53);  echo $image['url']; ?>" class="img-fluid w-100 pl-md-5 pl-0 pr-md-3 pr-0" alt="">
                    </div>
                    <div class="experience">
                        <h3><?php the_field('years_of_experience',53) ?>  Years of Experience</h3>
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
               <?php the_field('summary',53) ?>
                    <div class="btn_wrap mt-3">
                        <a href="<?php echo get_page_link(53) ?>" class="px-4">
                            About Us

                        </a>

                    </div>
                    <hr class="custome_hr">
                    <div class="section_title">
                        <h5>Call to Ask Any Question
                        </h5>
                        <h3><a href="tel:<?php the_field('phone_number',16) ?>

                           "> <?php the_field('phone_number',16) ?>

                            </a> or <a href="tel:<?php the_field('phone_number3',16) ?>

                            "> <?php the_field('phone_number3',16) ?>
                            </a></h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="destination position-relative bg_gray" id="destination">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-4">
                <div class="destination_title">
                    <h1>Destinations</h1>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="destination_slider">

                <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type' => 'destinations',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name' => 'destinations',
   'posts_per_page' => 6,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );

$index = 1;

while ($custom_query->have_posts()) :
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
    <div class="destination_item position-relative">
        <div class="destination-img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
        </div>
        <div class="destination_text">
            <h1><?php echo str_pad($index, 2, '0', STR_PAD_LEFT); ?></h1>
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
<?php
    $index++;
endwhile;

wp_reset_postdata();
?>

                </div>

            </div>
        </div>
    </div>
</section>
<section class="message bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="message_img">
                    <img src="<?php $image = get_field('image',115);  echo $image['url']; ?>" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_wrapp d-flex justify-content-center flex-column h-100">
                    <div class="section_title">
                        <h5>Message
                        </h5>
                        <h2>Message from Chairman</h2>
                    </div>
             <?php the_field('summary',115); ?>

                    <div class="btn_wrap mt-4">
                        <a href="<?php echo get_page_link(115) ?>" class="px-4">
                            Read More

                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="services destination position-relative mt-0">
    <div class="container">
        <div class="row mb-md-3 mb-4">
            <div class="col-md-6 mx-auto text-center">
                <div class="section_title text-white">
                    <h5>WHAT WE DO
                    </h5>
                    <h2>We provide the best services.
                    </h2>
                </div>
            </div>

        </div>
        <div class="services_slider">


        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'services',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'services',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="services_slider-item">
                <div class="services_wrapp">
                    <div class="services_icon">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">

                    </div>
                    <div class="services_text">
                        <div class="py-3">
                            <h4><?php the_title() ?></h4>
                        </div>
                 
                           <?php the_content() ?>        
 
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