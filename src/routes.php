<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$routes = new Routing\RouteCollection();
//$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'World']));
// $routes->add('hello', new Routing\Route('/hello/{name}', [
//     'name' => 'World',
//     '_controller' => function ($request) {
//         // $foo will be available in the template
//         $request->attributes->set('foo', 'bar');

//         $response = render_template($request);

//         // change some header
//         $response->headers->set('Content-Type', 'text/plain');

//         return $response;
//     }
// ]));
//$routes->add('bye', new Routing\Route('/bye'));
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'App\Calendar\Controller\LeapYearController::index',
]));

$routes->add('hello', new Routing\Route('/hellos/get/{name}', [
    'name' => null,
    '_controller' => 'App\Calendar\Controller\LeapYearController::testing',
]));

return $routes;