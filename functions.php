<?php 
add_action('wp_enqueue_scripts', 'get_style');
add_action( 'wp_footer', 'get_script' );


function get_style () {
      wp_enqueue_style( 'slick', get_template_directory_uri( ) . '/assets/slick-1.8.1/slick/slick.css' );
      wp_enqueue_style( 'slick-theme', get_template_directory_uri( ) . '/assets/slick-1.8.1/slick/slick-theme.css' );
      wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.css');
      wp_enqueue_style('animateScroll', get_template_directory_uri() .'/assets/css/animateScroll.css');
      wp_enqueue_style('style', get_stylesheet_uri() );
      wp_enqueue_style('main', get_template_directory_uri() .'/assets/css/main.css');

      /*---------------------Jquery-----------------------------------*/
      // deregister of jquery
      wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	// register
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true ); // true = if possible=> connect in footer

	// connect
	wp_enqueue_script( 'jquery' );
     

}
function get_script () {
     
      wp_enqueue_script( 'slick.min', get_template_directory_uri(  ) . '/assets/slick-1.8.1/slick/slick.min.js' );
      wp_enqueue_script( 'wow', get_template_directory_uri(  ) . '/assets/js/wow.js' );
      wp_enqueue_script( 'main', get_template_directory_uri(  ) . '/assets/js/main.js' );
      
}
/*----------------------------------Menu registration---------------------------------------*/
register_nav_menus( [
      'top_menu' => 'Top menu',
      'footer_menu' => 'Footer menu'
] ); 

/*-----------------------------------Featured image----------------------------------------*/
add_theme_support( 'post-thumbnails' , array('post' , 'attorney' , 'reviews') );


/*--------------------- Ajax request---------------------- */

add_action( 'wp_ajax_sendform', 'sendform_callback' );
add_action( 'wp_ajax_nopriv_sendform', 'sendform_callback' );

function sendform_callback() {
     print_r ( $_REQUEST);
      $name= $_REQUEST['name'];
      $from = $_REQUEST['email'];
      $message=$_REQUEST['message'];
      $to = 'slepko13@gmail.com';
   
      $headers = "Content-type:text/html; charset=UTF-8". "\r\n";
   
      wp_mail($to, $subject, $message, $headers);
 
      wp_die();
}

/*----------------------------Content length----------------------------------*/
add_filter( 'excerpt_length', function(){
	return 36;
} );  
 
add_filter('excerpt_more', function($more) {
	return '...';
});
/*---------------------------------Options page-------------------------*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
/*----------------------------------ACF block---------------------------------------*/

add_action('acf/init', 'my_acf_blocks_init');


function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a  block.
        acf_register_block_type(array(
            'name'              => 'practis',
            'title'             => __('Practis Area'),
            'description'       => __('My test Practis Area'),
            'render_template'   => get_template_directory () . '/template-parts/practis.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/main.css',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
          'keywords'          => array( 'practis', 'area' ),
        ));
        acf_register_block_type(array(
            'name'              => 'about-us',
            'title'             => __('About Us'),
            'description'       => __('My test About Us'),
            'render_template'   => get_template_directory () . '/template-parts/about.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/main.css',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
          'keywords'          => array( 'about' ),
        ));
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('My test Hero'),
            'render_template'   => get_template_directory () . '/template-parts/hero.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/main.css',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
          'keywords'          => array( 'hero' ),
        ));
    } 
}

