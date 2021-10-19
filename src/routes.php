<?php

use Symfony\Component\Routing;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;

$routes = new RouteCollection();
$app = new GlobalFunc;

// ROUTE APPLICATION START BELOW!!! 
// --------------------------------


$routes->add('home', new Route('/', [
    '_controller' => function (Request $request) {
        global $app;

        return new RedirectResponse('/admin');
    }
]));

// login admin

$routes->add('adminLogin', new Route('/admin', [
    '_controller' => 'App\Login\Controller\LoginController::index',
]));

$routes->add('adminLoginAction', new Route('/admin/login', [
    '_controller' => 'App\Login\Controller\LoginController::login',
]));

$routes->add('dahsboard', new Route('/dashboard', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::index',
]));


$routes->add('dataAlumni', new Route('/data-alumni', [
    '_controller' => function (Request $request) {
        global $app;

        return $app->render_template('admin/data-alumni/index');
    }
]));






// Mahasiswa
$routes->add('survey', new Route('/survey', [
    '_controller' => function (Request $request) {
        global $app;

        return $app->render_template('mhs/survey/index');
    }
]));


$routes->add('infografis', new Route('/infografis', [
    '_controller' => function (Request $request) {
        global $app;

        return $app->render_template('mhs/infografis/index');
    }
]));

$routes->add('detailInfografis', new Route('/detail-infografis', [
    '_controller' => function (Request $request) {
        global $app;

        return $app->render_template('mhs/detail-infografis/index');
    }
]));

return $routes;
