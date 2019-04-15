<?php

$context = [];
$context['hello'] = 'hello twig / timber';

Timber::render('views/front-page.twig', $context);
