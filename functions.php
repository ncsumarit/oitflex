<?php

// CHANGE THE HEADER HEIGHT
	// Add a filter to twentyeleven_header_image_width and twentyeleven_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyeleven_header_image_width', 1000 ) );
	//define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyeleven_header_image_height', 288 ) );
	remove_filter( 'HEADER_IMAGE_HEIGHT', 'twentyeleven_header_image_height' );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'child_header_image_height', 230 ) );

// REMOVE TWENTY ELEVEN BACKGROUND OPTIONS
add_action( 'after_setup_theme','remove_twentyeleven_options', 100 );
function remove_twentyeleven_options() {

	remove_custom_background();
	//remove_custom_image_header();

}

// REMOVE TWENTY ELEVEN DEFAULT HEADER IMAGES
function wptips_remove_header_images() {
    unregister_default_headers( array('wheel','shore','trolley','pine-cone','chessboard','lanterns','willow','hanoi')
    );
}
add_action( 'after_setup_theme', 'wptips_remove_header_images', 11 );


//ADD NEW DEFAULT HEADER IMAGES
function wptips_new_default_header_images() {
    $child2011_dir = get_bloginfo('stylesheet_directory');
    register_default_headers( array (
        '1911' => array (
            'url' => "$child2011_dir/images/headers/1911.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/1911-thumbnail.jpg", // 230 x 53px
            'description' => __( '1911 Building', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'belltower' => array (
            'url' => "$child2011_dir/images/headers/belltower.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/belltower-thumbnail.jpg", // 230 x 53px
            'description' => __( 'NCSU Belltower', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'bike' => array (
            'url' => "$child2011_dir/images/headers/bike.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/bike-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Bike in snow on campus', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'fox' => array (
            'url' => "$child2011_dir/images/headers/fox.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/fox-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Mary Anne Fox Courtyard', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'gregg' => array (
            'url' => "$child2011_dir/images/headers/gregg-garden.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/gregg-garden-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Garden behind Gregg Museum', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'hillsborough' => array (
            'url' => "$child2011_dir/images/headers/hillsborough.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/hillsborough-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Hillsborough Street', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'holladay' => array (
            'url' => "$child2011_dir/images/headers/holladay.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/holladay-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Holladay Hall', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'leazar' => array (
            'url' => "$child2011_dir/images/headers/leazar.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/leazar-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Leazar Building', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'spring' => array (
            'url' => "$child2011_dir/images/headers/spring.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/spring-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Spring on campus', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'spring-hall' => array (
            'url' => "$child2011_dir/images/headers/spring-hall.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/spring-hall-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Building in spring', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'statue' => array (
            'url' => "$child2011_dir/images/headers/statue.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/statue-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Walking professor statue', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'swing' => array (
            'url' => "$child2011_dir/images/headers/swing.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/swing-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Swing in front of a residence hall', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'tunnel' => array (
            'url' => "$child2011_dir/images/headers/tunnel.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/tunnel-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Free Expression Tunnel decorated for Google', 'child2011' )
        ), // if you have more than one image you will need a comma between all of them, except for the last one
		'winston' => array (
            'url' => "$child2011_dir/images/headers/winston.jpg",
            'thumbnail_url' => "$child2011_dir/images/headers/winston-thumbnail.jpg", // 230 x 53px
            'description' => __( 'Winston Hall', 'child2011' )
        ) // if you have more than one image you will need a comma between all of them, except for the last one
		
    ));
}
add_action( 'after_setup_theme', 'wptips_new_default_header_images' );


// REMOVE TWENTYELEVEN DARK.CSS
add_action( 'wp_enqueue_scripts', 'my_dark_css', 20);
function my_dark_css() {
  wp_dequeue_style('dark');
  //wp_enqueue_style('my-dark', get_stylesheet_directory_uri() . '/colors/dark.css', array(), null );
}

// SETUP ALTERNATIVE COLOR SCHEMES

add_filter('twentyeleven_color_schemes', 'ncsubrand_color_scheme');
add_action( 'twentyeleven_enqueue_color_scheme', 'ncsubrand_enqueue_color_scheme' );

function ncsubrand_color_scheme($color_schemes) {
    $color_schemes['light'] = array(
        'value' => 'light',
        'label' => __( 'Light', 'twentyeleven' ),
        'thumbnail' => get_stylesheet_directory_uri() . '/images/theme-screenshots/light.png',
        'default_link_color' => '#a00'
    );
	 $color_schemes['dark'] = array(
        'value' => 'dark',
        'label' => __( 'Dark', 'twentyeleven' ),
        'thumbnail' => get_stylesheet_directory_uri() . '/images/theme-screenshots/dark.png',
        'default_link_color' => '#a00'
    );
	$color_schemes['classic'] = array(
        'value' => 'classic',
        'label' => __( 'Classic', 'twentyeleven' ),
        'thumbnail' => get_stylesheet_directory_uri() . '/images/theme-screenshots/classic.png',
        'default_link_color' => '#a00'
    );
	$color_schemes['classic-dark'] = array(
        'value' => 'classic-dark',
        'label' => __( 'Classic Dark', 'twentyeleven' ),
        'thumbnail' => get_stylesheet_directory_uri() . '/images/theme-screenshots/classic-dark.png',
        'default_link_color' => '#a00'
    );
	$color_schemes['beige'] = array(
        'value' => 'beige',
        'label' => __( 'Beige', 'twentyeleven' ),
        'thumbnail' => get_stylesheet_directory_uri() . '/images/theme-screenshots/beige.png',
        'default_link_color' => '#a00'
    );
	$color_schemes['fall'] = array(
        'value' => 'fall',
        'label' => __( 'Fall', 'twentyeleven' ),
        'thumbnail' => get_stylesheet_directory_uri() . '/images/theme-screenshots/fall.png',
        'default_link_color' => '#a00'
    );
    return $color_schemes;
}

function ncsubrand_enqueue_color_scheme( $color_scheme ) {
    // Light
    if ( 'light' == $color_scheme )
        wp_enqueue_style( 'light', get_stylesheet_directory_uri() . '/colors/light.css', array(), null );
	// Dark - pulls from child theme
	elseif ( 'dark' == $color_scheme )
        wp_enqueue_style( 'my-dark', get_stylesheet_directory_uri() . '/colors/dark.css', array(), null );
	// Classic
	elseif ( 'classic' == $color_scheme )
        wp_enqueue_style( 'classic', get_stylesheet_directory_uri() . '/colors/classic.css', array(), null );
	// Classic Dark
	elseif ( 'classic-dark' == $color_scheme )
        wp_enqueue_style( 'classic-dark', get_stylesheet_directory_uri() . '/colors/classic-dark.css', array(), null );
	// Beige
	elseif ( 'beige' == $color_scheme )
        wp_enqueue_style( 'beige', get_stylesheet_directory_uri() . '/colors/beige.css', array(), null );
	// Fall
	if ( 'fall' == $color_scheme )
        wp_enqueue_style( 'fall', get_stylesheet_directory_uri() . '/colors/fall.css', array(), null );
}

// ADD ALTERNATE SIDEBAR OPTION; CALLS AFTER ALL OTHER SIDEBARS HAVE BEEN LOADED

function self_deprecating_sidebar_registration(){
  register_sidebar( array(
		'name' => __( 'Alternate Sidebar' ),
		'id' => 'sidebar-6',
		'description' => __( 'The sidebar for the optional Sidebar Template' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'wp_loaded', 'self_deprecating_sidebar_registration' );
?>