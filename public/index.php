<?php

require __DIR__ . '/../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];

$app = new \Slim\App($configuration);

$container = $app->getContainer();

$container['renderer'] = new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');

$app->get('/', function ($request, $respones) {
    return $respones->write('Welcome to Slim');
});

$app->get('/users/{id}', function ($request, $response, $args) {
    $params = ['id' => $args['id']];
    return $this->renderer->render($response, 'users/show.phtml', $params);
});

$app->run();
