<?php
// on récupère le context, c'est à dire les données globales et nécessaires sur toutes les pages, comme les menu etc
$context = Timber::get_context();

$args = [
	'post_type' => 'events'
];

// on récupère tous les posts avec la méthode get_posts de Timber
$context['events'] = Timber::get_posts($args);


// on appelle le fichier twig front-page et on lui envoie les données de la variable $context
Timber::render('views/page-24.twig', $context);