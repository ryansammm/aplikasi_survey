<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Core\GlobalFunc;

$routes = new Routing\RouteCollection();
$app = new GlobalFunc;

// ############################  !!DO NOT EDIT!! ############################ 
$routes->add('assets', new Routing\Route('/assets/{path}.{_format}', [
    '_controller' => 'Core\GlobalFunc::assets'
], [
    'path' => '[^.]+'
]));
// ############################  ------------ ############################ 


// ROUTE APPLICATION START BELOW!!! 
// --------------------------------

$routes->add('welcome', new Routing\Route('/', [
    '_controller' => function(Request $request) {
        global $app;

        return $app->render_template('welcome');
    },
]));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'App\Calendar\Controller\LeapYearController::index',
]));

$routes->add('hello', new Routing\Route('/hellos/get', [
    '_controller' => 'App\Calendar\Controller\LeapYearController::testing',
]));

return $routes;