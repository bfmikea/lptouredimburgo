<?php

// loads theme css files
function bttowp_theme_styles(){

    // main bootstrap stylesheet
    wp_enqueue_style( 'bootstrap_main_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

    // main wp theme stylesheet
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	// Font Awesome
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	
	wp_enqueue_style( 'smoothbox', get_template_directory_uri() . '/css/smoothbox.css' );
    

}
add_action( 'wp_enqueue_scripts', 'bttowp_theme_styles' );

// loads theme js files
function bttowp_theme_js(){

    global $wp_scripts;

    // register for later enqueue these scripts
    // html5 shiv
    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );

    // respond.js
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    // enqueue theses scripts
    // main bootstrap js
    wp_enqueue_script( 'bootstrap_main_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );	
	

    wp_enqueue_script( 'bootstrap_ie10hack_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js' );

    // javascript bootstrap components
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array( 'jquery', 'bootstrap_main_js' ), '', true );
	
	wp_enqueue_script( 'jquery2', get_template_directory_uri() . '/js/jquery2.min.js' );
    
	
	wp_enqueue_script( 'smoothbox_jquery2_min_js', get_template_directory_uri() . '/js/smoothbox.jquery2.js', array( 'jquery2' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'bttowp_theme_js' );

// removes admin bar when user logged in
//add_filter( 'show_admin_bar', '__return_false' );

// activate theme functionality
# activate menus
add_theme_support( 'menus' );

# activate featured images
add_theme_support( 'post-thumbnails' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// create menus
function bttowp_register_theme_menus(){
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu', 'bttowp' ),
			'header-menu-tp' => __( 'Header Menu TP', 'bttowp' )
        )
    );
}
add_action( 'init', 'bttowp_register_theme_menus' );

// create widget areas
function bttowp_create_widget( $name, $id, $description ){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
# frontpage widgets
bttowp_create_widget( __('Front Page Left', 'bttowp'), 'front-left', __( 'Displays on the left of the homepage' ));
bttowp_create_widget( __('Front Page Center', 'bttowp'), 'front-center', __( 'Displays on the center of the homepage' ));
bttowp_create_widget( __('Front Page Center r', 'bttowp'), 'front-center-r', __( 'Displays on the center r of the homepage' ));
bttowp_create_widget( __('Front Page Right', 'bttowp'), 'front-right', __( 'Displays on the right of the homepage' ));


# page widgets
bttowp_create_widget( __( 'Page Sidebar', 'bttowp' ), 'page', __( 'Displays on the side of pages with a sidebar', 'bttowp' ) );

# blog widgets
bttowp_create_widget( __( 'Blog Posts Page Sidebar', 'bttowp' ), 'blog', __( 'Displays on the side of the blog posts listing page', 'bttowp' ) );

#archive widgets
bttowp_create_widget( __( 'Archive Listing Page Sidebar', 'bttowp' ), 'archive', __( 'Displays on the side of the archive listing page. If nothing added here, archive page will show "Blog Posts Page Sidebar" widgets', 'bttowp' ) );

/********MIOS**********/
//agregar los ficheros js para el ir arriba
//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'hormi_enqueue_scripts_styles' );
function hormi_enqueue_scripts_styles() {

    wp_enqueue_script( 'modernizr-min', get_stylesheet_directory_uri() . '/js/modernizr.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'back_to_top', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
}

//* Añadimos el botón antes del cierre </body>
add_action ( 'wp_footer', 'hormi_back_to_top' );
function hormi_back_to_top() {
    echo '<a href="<!--#0-->" class="cd-top">Top</a>';
}

//*Breadcrums
/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' / ';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '"> Inicio';
        //bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }

        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}



