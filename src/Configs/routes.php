<?php
// Routes

$app->get('/', 'Anosh\Personal\Controllers\IndexController:dispatch')
    ->setName('homepage');
$app->get('/hire-me', 'Anosh\Personal\Controllers\HireMeController:dispatch')
    ->setName('hire-me');
$app->get('/projects', 'Anosh\Personal\Controllers\ProjectsController:dispatch')
    ->setName('projects');
