 <!-- Template Name: Why Nepalese Page -->
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

<section class="why_nepal">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section_title w-75">
                    <h5>Welcome
                    </h5>
                    <h2>Reasons to Recruit Nepalese Workers in Abroad</h2>
                </div>
                <div class="readmore__content my-4">
                    <p>Over the past one and a half decade, an increasing number of employers from different countries
                        are showing their keen interest in hiring Nepalese workers. Most of them diverted attention from
                        their original labour supplying countries towards Nepal. This change, in fact, is due to the
                        following reasons:</p>
                    <div class="why_nepal_ul">
                        <ul>
                            <li>Nepalese workers are eminent for their hard work, loyalty, high sense of responsibility
                                and discipline.</li>
                            <li>Nepalese workers are calm and extremely loyal to their employers and they are devoted to
                                their duties only.</li>
                            <li>Nepalese workers have experience in working in the extreme climatic conditions.</li>
                            <li>Nepalese workers are comparatively more cost effective and their hiring cost is nominal
                                in comparison to other labour exporting countries.</li>
                            <li>The employers have the advantage of choice due to availability of various types workers
                                ( professional, skilled, semi-skilled and unskilled) for immediate placement.</li>
                            <li>Procedures and formalities for recruiting Nepalese workers for overseas employment are
                                simple and easy.</li>
                            <p>Nepal is situated very close to the labour importing countries and have air link with
                                almost all the major cities of the world.</p>
                        </ul>
                    </div>
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