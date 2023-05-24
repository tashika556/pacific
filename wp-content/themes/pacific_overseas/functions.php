<?php


register_nav_menus(
    array('primary-menu'=>'Top Menu')
)
?>
<?php
add_theme_support('post-thumbnails');




function createjobss_posttype() {
  
    register_post_type( 'jobss',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Jobs' ),
                'singular_name' => __( 'jobss' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'jobss'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createjobss_posttype' );



function createteam_posttype() {
  
    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'team'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createteam_posttype' );




function createreview_posttype() {
  
    register_post_type( 'review',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'review' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'review'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createreview_posttype' );

function createdestinations_posttype() {
  
    register_post_type( 'destinations',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Destinations' ),
                'singular_name' => __( 'destinations' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'destinations'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createdestinations_posttype' );


function createpartner_posttype() {
  
    register_post_type( 'partner',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Partner' ),
                'singular_name' => __( 'partner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'partner'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createpartner_posttype' );


function createservices_posttype() {
  
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'services'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createservices_posttype' );




function createjobcategories_posttype() {
  
    register_post_type( 'jobcategories',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Categories' ),
                'singular_name' => __( 'jobcategories' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'jobcategories'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createjobcategories_posttype' );

function createinternationalmarket_posttype() {
  
    register_post_type( 'internationalmarket',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'International Marketing' ),
                'singular_name' => __( 'internationalmarket' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' =>'internationalmarket'),
            'supports' => array( 'title', 'editor','thumbnail', ),
            'taxonomies'          => array( 'category' ),
            
            'show_in_rest' => true,
  
        )
    
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'createinternationalmarket_posttype' );







?>