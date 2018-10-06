<?php
//remove o generator do wp_head, que mostra a versão usada do WP, melhor a asegurança
remove_action('wp_head', 'wp_generator');

//Função para carregar os scripts
function carrega_scripts(){

	// Enfileirando Bootstrap
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.0', 'all' );

	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'template', get_template_directory_uri() . '/js/template.js', array(), false, true);
}

add_action( 'wp_enqueue_scripts', 'carrega_scripts');

//Função para menus

register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal', //ID(váriavel) => Nome
		'menu_rodape' => 'Menu Rodape'
	)
);

//Permite o uso de um background e um header customizados
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));

//Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name' => 'Barra Lateral 1',
			'id' => 'sidebar-1',
			'description' => 'Barra lateral da Home',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-titulo">',
			'after-title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Barra Lateral 2',
			'id' => 'sidebar-2',
			'description' => 'Barra lateral do Blog',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-titulo">',
			'after-title' => '</h2>'
		)
	);
}

//Define o numero de posts para uma página, sem usar o padrão do wordpress no admin(que define para todas páginas)
function num_itens_blog( $query ){
	//Nao alterar a pégina admin, nem aquery principal 
	if(is_admin() || ! $query->is_main_query())
		return;

	//Página blog
	if( is_home() ){
		$query->set('posts_per_page', 3);
		return;
	}
}

add_action('pre_get_posts', 'num_itens_blog', 1);
