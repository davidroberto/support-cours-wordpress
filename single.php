<?php

// on récupère le context, c'est à dire les données globales et nécessaires sur toutes les pages, comme les menu etc
$context = Timber::get_context();


// on récupère les données du post actuel
$context['post'] = new Timber\Post();

// on appelle le fichier twig single et on lui envoie les données de la variable $context
Timber::render('views/single.twig', $context);