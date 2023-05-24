 
 <?php get_header(); ?>
 <section class="bg_img banner position-relative" style="background-image: url(<?php echo  get_the_post_thumbnail_url(196); ?>);">

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

<section class="why_nepal">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="text_block-content">
                    <div class="jumbotron">
     
    
                        <h4><?php the_title() ?></h4>
                        <table class="table table-hover">
                            <tbody>
                            <?php   if( have_rows('list') ):?>
<?php while( have_rows('list') ) : the_row();?>
                                <tr>
                                    <td><?php the_sub_field('title') ?></td>
                                </tr>
                                <?php   endwhile; ?>
<?php endif;?> 
                            </tbody>
                        </table>
                       
                    </div>
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



                            
