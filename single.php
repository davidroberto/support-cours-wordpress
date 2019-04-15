<?php


// on récupère les données du post actuel
$context['post'] = new Timber\Post();

// on appelle le fichier twig single et on lui envoie les données de la variable $context
Timber::render('views/single.twig', $context);