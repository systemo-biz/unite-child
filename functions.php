<?php

function child_theme_setup_s() {
	load_child_theme_textdomain( 'unite', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'child_theme_setup_s' );