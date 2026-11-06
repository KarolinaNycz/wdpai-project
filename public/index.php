<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Controller\DashboardController;
use App\Controller\DefaultController;
use App\Controller\ProjectController;
use App\Routing;

$routing = new Routing();

$routing->get('/', DefaultController::class, 'index');
$routing->get('/login', DashboardController::class, 'login');
$routing->get('/dashboard', DashboardController::class, 'index');
$routing->get('/projects', ProjectController::class, 'index');
$routing->get('/projects/{id}', ProjectController::class, 'show');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}
