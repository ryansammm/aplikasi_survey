<?php

use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;
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

$routes->add('welcome', new Route('/', [
    '_controller' => function(Request $request) {
        global $app;

        return $app->render_template('welcome');
    }
]));

$routes->add('hello', new Route('/hellos/get/{id}', [
    '_controller' => 'App\Calendar\Controller\LeapYearController::testing',
]));


// CRUD Bank

$routes->add('bank', new Route('/bank', [
    '_controller' => 'App\Bank\Controller\BankController::index',
]));

$routes->add('bankEdit', new Route('/bank/edit/{id}', [
    '_controller' => 'App\Bank\Controller\BankController::edit'
]));

return $routes;