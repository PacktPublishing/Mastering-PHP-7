<?php

require_once __DIR__ . '/vendor/autoload.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

// The "before" middleware, convenient for auth and request data check
$app->before(function (Request $request, Application $app) {
    // Some auth token control
    if (!$request->headers->get('X-AUTH-TOKEN')) {
        // todo: Implement
    }
    // JSON content type control
    if ($request->headers->get('Content-Type') != 'application/json') {
        // todo: Implement
    }
});

// The "error" middleware, convenient for service wide error handling
$app->error(function (\Exception $e, Request $request, $code) {
    // todo: Implement
});

// The "OPTIONS" route, set to trigger for any URL
$app->options('{url}', function ($url) use ($app) {
    return new Response('', 204, ['Allow' => 'POST, GET, PUT, DELETE, OPTIONS']);
})->assert('url', '.+');

// The "after" middleware, convenient for CORS control
$app->after(function (Request $request, Response $response) {
    $response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept, X-AUTH-TOKEN');
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE');
});

// The "POST /user/welcome" REST service endpoint
$app->post('/user/welcome', function (Request $request, Application $app) {
    $data = json_decode($request->getContent(), true);
    return $app->json(['data' => 'Welcome ' . $data['name']]);
})->bind('user_welcome');

$app->run();
