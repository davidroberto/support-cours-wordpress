<?php
// on récupère le context, c'est à dire les données globales et nécessaires sur toutes les pages, comme les menu etc
$context = Timber::get_context();

// on récupère tous les posts avec la méthode get_posts de Timber
$context['posts'] = Timber::get_posts();

// on appelle le fichier twig front-page et on lui envoie les données de la variable $context
Timber::render('views/front-page.twig', $context);