<?php
function startit_setup() {
	load_theme_textdomain('startit');
	add_theme_support ('title-tag');
		add_theme_support ('custom-logo');
		add_theme_support ('post-thumbnails');
		add_image_size ('blog-images', 360, 272.42, true);
		add_image_size ('portfolio-images', 262.5, 262.5, true);
		add_image_size ('about-small-img', 262.5, 267.27, true);
		add_image_size ('about-big-img', 480, 285.95, true);
		register_nav_menu ('head', 'head_menu');
}
add_action('after_setup_theme','startit_setup');
function startit_scripts() {
	wp_enqueue_style( 'animate', get_template_directory_uri(). '/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.css' );
	wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri(). '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'menu', get_template_directory_uri(). '/css/menu.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri(). '/css/owl.carousel.css' );
	wp_enqueue_style( 'owl.theme.default', get_template_directory_uri(). '/css/owl.theme.default.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-3.2.1.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
	wp_enqueue_script( 'jquery.mixitup.min', get_template_directory_uri() . '/js/jquery.mixitup.min.js');
	wp_enqueue_script( 'jquery.fancybox.min', get_template_directory_uri() . '/js/jquery.fancybox.min.js');
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js');
	wp_enqueue_script( 'typed.min', get_template_directory_uri() . '/js/typed.min.js');
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js');
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'startit_scripts' );

add_action( 'init', 'portfolio' );
function portfolio(){
	register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'portfolio', // основное название для типа записи
			'singular_name'      => 'portfolio', // название для одной записи этого типа
			'add_new'            => 'Добавить работу', // для добавления новой записи
			'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование работы', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
			'search_items'       => 'Искать работу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Portfolio', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => true, 
		'show_ui'             => true, 
		'show_in_menu'        => null, 
		'show_in_admin_bar'   => null, 
		'show_in_nav_menus'   => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt', 
		'hierarchical'        => false,
		'supports'            => array('title','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('Web Design','Art Direction','Creative', 'WordPress'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_taxonomy('portfolio_category', array('portfolio'), array(
		'label'                 => '', 
		'labels'                => array(
			'name'              => 'Portfolio_Category',
			'menu_name'         => 'portfolio category',
			'show_admin_column' => true,
		),
		'hierarchical'          => true,	
	) );
}

add_action( 'init', 'register_services' );
function register_services(){
	register_post_type('services', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'services', // основное название для типа записи
			'singular_name'      => 'services', // название для одной записи этого типа
			'add_new'            => 'Добавить услугу', // для добавления новой записи
			'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
			'search_items'       => 'Искать услугу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Services', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null, 	
		'hierarchical'        => false,
		'supports'            => array('title','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

function updateNumbers() {
global $wpdb;
$querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'services' ";
$pageposts = $wpdb->get_results($querystr, OBJECT);
$counts = 0 ;
if ($pageposts):
foreach ($pageposts as $post):
setup_postdata($post);
$counts++;
add_post_meta($post->ID, 'incr_number', $counts, true);
update_post_meta($post->ID, 'incr_number', $counts);
endforeach;
endif;
}
add_action ('publish_post', 'updateNumbers');
add_action ('deleted_post', 'updateNumbers');
add_action ('edit_post', 'updateNumbers');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Настройки сайта',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
?>