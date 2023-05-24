<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.minn.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">

</head>
<?php wp_head() ?>
<body>

    <div class="menu-btn d-lg-none d-block">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <section class="p-0 top_header d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-header d-flex align-items-center h-100">
                        <p>Welcome to <?php bloginfo('name'); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="social_icon py-2">
                        <ul class="d-flex justify-content-end">
                            <li><a href=" <?php the_field('facebook',16) ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=" <?php the_field('twitter',16) ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=" <?php the_field('youtube',16) ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href=" <?php the_field('instagram',16) ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_header bg-white w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo d-lg-block d-none"><a href="<?php echo get_page_link(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo1"></a>
                    </div>
                    <div class="logo_mobile d-lg-none d-block"><a href="<?php echo get_page_link(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                alt="logo1"></a></div>
                </div>
                <div class="col-lg-9">
                    <div class="d-lg-flex d-none align-items-center h-100  justify-content-between">
                        <div class="icon_block_header d-flex align-items-center justify-content-center h-100 ">
                            <div class="icon_block mr-2">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            </div>
                            <div class="icon_block_text d-flex flex-column">
                                <strong>Address: </strong>
                                <span><?php the_field('address',16) ?></span>
                            </div>
                        </div>

                        <div class="icon_block_header d-flex justify-content-center border_right position-relative">
                            <div class="icon_block mr-2">
                                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <span><a href="tel:<?php the_field('phone_number',16) ?>"><?php the_field('phone_number',16) ?></a></span>
                                <span> <a href="mailto: <?php the_field('email_address',16) ?>">
                                <?php the_field('email_address',16) ?></a></span>
                            </div>
                        </div>
                        <div class="icon_block_header d-flex justify-content-center border_right position-relative">
                            <div class="icon_block mr-2">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <span><?php the_field('office_open_time',16) ?>
                                </span>
                                <strong><?php the_field('office_closing_day',16) ?> Closed</strong>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="header d-lg-block d-none position-relative w-100">
        <div class="container">
            <nav class="cssmenu d-flex align-items-center p-0">
                <div class="sticky_logo">
                    <a href="<?php echo get_page_link(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="img-fluid "></a>
                </div>
                <ul class="menu_ul d-flex w-100 p-0">
                    <li class="active"><a href="<?php echo get_page_link(7) ?>"> Home</a></li>
                    <li>
                        <a class="sub_menu_link" href="#">About</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="<?php echo get_page_link(53) ?>">Introduction</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(107) ?>">Nepal Information</a>
                            </li>

                            <li>
                                <a href="<?php echo get_page_link(115) ?>">Message from Chairman</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(127) ?>">Meet the Team</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Recruitment</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="<?php echo get_page_link(140) ?>">Why Nepalease</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(152) ?>">Required Documents</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(157) ?>">Recruitment Procedure</a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(161) ?>">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo get_page_link(170) ?>">Affiliated</a></li>
                    <li><a href="<?php echo get_page_link(196); ?>">Categories</a></li>
                    <li><a href="<?php echo get_page_link(199); ?>">Jobs</a></li>
                    <li><a href="<?php echo get_page_link(173) ?>">Gallery</a></li>
                    <li>
                        <a href="#">International Marketing</a>
                        <ul class="sub_menu">

                        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'internationalmarket',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'international market',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                            <li>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo get_page_link(16) ?>">Contact</a></li>
                </ul>

            </nav>

        </div>
    </header>