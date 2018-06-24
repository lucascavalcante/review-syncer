<?php

date_default_timezone_set('America/Sao_Paulo');
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

$app = new Silex\Application();

$app->error(function (\Exception $e, Request $request, $code) {
    return new JsonResponse([$code => $e->getMessage()]);
});

$app->get('/', function(Request $request) use ($app) {
    return new JsonResponse(\Bold\Controller\DefaultController::manageRouting($request));
});

$app->get('/get-app/{appName}', function(Request $request, $appName) use ($app) {
    $params = [$appName];
    return new JsonResponse(\Bold\Controller\ReviewController::manageRouting($request, $params));
})->value('appName', null);

$app->run();