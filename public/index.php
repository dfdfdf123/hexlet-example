<?php

require __DIR__ . '/../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];

$app = new \Slim\App($configuration);

$app->get('/', function ($request, $respones) {
    return $respones->write('Welcome to Slim');
});

$app->run();
