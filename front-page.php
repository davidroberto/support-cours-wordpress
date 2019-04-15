<?php

// on récupère tous les articles avec la méthode get_posts de Timber
$context['posts'] = Timber::get_posts();

// on appelle le fichier twig front-page et on lui envoie les données de la variable $context
Timber::render('views/front-page.twig', $context);