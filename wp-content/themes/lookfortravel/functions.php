<?php 

function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri(), array('style'));
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/lookfortravel.css');
    wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('main');
    wp_register_script('uikit', get_template_directory_uri() . '/uikit/js/uikit.min.js');
    wp_enqueue_script('uikit');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// WP-postrating use PNG images instead of GIF images
function custom_rating_image_extension() {
    return 'png';
}
add_filter( 'wp_postratings_image_extension', 'custom_rating_image_extension' );

// theme content file require
require get_parent_theme_file_path( '/theme-functions.php' );

//Button loadmore
function true_loadmore_scripts() {
    wp_register_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery'), false, true);
    wp_enqueue_script('true_loadmore');
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();

			get_template_part( 'templates/post', 'preview' );
 
		endwhile;
 
	endif;
	die();
}
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

// Область виджетов в Footer
register_sidebar(array(
    'name' => __('Виджеты в Footer'),
    'id' => 'foot-widget-area',
    'description' => __('Виджеты в Footer здесь должны быть социальные кнопки'),
    'before_widget' => '<div class="uk-flex-center uk-grid" uk-margin>',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));

// Включение в настройках Логотипа
add_theme_support( 'custom-logo' );

