<?php

function dr_adding_styles() {
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css');
}

add_action( 'wp_enqueue_scripts', 'dr_adding_styles' );


function dr_register_my_menu() {
	register_nav_menu('header-menu','Header Menu');
}

add_action( 'init', 'dr_register_my_menu' );

// Permet d'ajouter le menu au context sur tous les fichiers twig
function dr_add_to_context( $context ) {
	$context['menu'] = new \Timber\Menu( 'header' );

	return $context;
}

add_filter( 'timber/context', 'dr_add_to_context' );