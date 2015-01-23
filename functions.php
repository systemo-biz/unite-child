<?php




// Change default "Read More" button when using the_excerpt
function unite_excerpt_more_s( $more ) {
  return ' <a class="btn btn-default"  href="'. get_permalink( get_the_ID() ) . '">Читать далее <i class="fa fa-chevron-right"></i></a>';
}
add_filter( 'excerpt_more', 'unite_excerpt_more_s', 11 );

/*###############################
Включаем иконки WP для сайта
*/
function my_dashicons() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'my_dashicons' );

/*###############################
Регистрируем три сайдбара для шапки, используем в header.php
*/

register_sidebar(array(
	'name' => __('Header 1'),
	'id' => 'header-widget-1',
	'description' => __('Виджеты в шапке'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3><a href="#">',
	'after_title' => '</a></h3>',
));
register_sidebar(array(
	'name' => __('Header 2'),
	'id' => 'header-widget-2',
	'description' => __('Виджеты в шапке'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3><a href="#">',
	'after_title' => '</a></h3>',
));
register_sidebar(array(
	'name' => __('Header 3'),
	'id' => 'header-widget-3',
	'description' => __('Виджеты в шапке'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3><a href="#">',
	'after_title' => '</a></h3>',
));

/*###########################
Подгрузка локализации из дочерней темы
*/
function child_theme_setup_s() {
	load_child_theme_textdomain( 'unite', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'child_theme_setup_s' );