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
$routes->add('adminLogoutAction', new Route('/admin/logout', [
    '_controller' => 'App\Login\Controller\LoginController::logout',
]));

$routes->add('dahsboard', new Route('/dashboard', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::index',
]));


$routes->add('dataMahasiswa', new Route('/data-mahasiswa', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::index',
]));
$routes->add('dataMahasiswaCreate', new Route('/data-mahasiswa/create', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::create',
]));
$routes->add('dataMahasiswaStore', new Route('/data-mahasiswa/store', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::store',
]));
$routes->add('dataMahasiswaEdit', new Route('/data-mahasiswa/{id}/edit', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::edit',
]));
$routes->add('dataMahasiswaUpdate', new Route('/data-mahasiswa/{id}/update', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::update',
]));
$routes->add('dataMahasiswaDetail', new Route('/data-mahasiswa/{id}', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::detail',
]));
$routes->add('dataMahasiswaDelete', new Route('/data-mahasiswa/{id}/delete', [
    '_controller' => 'App\BasisDataMahasiswa\Controller\BasisDataMahasiswaController::delete',
]));


$routes->add('masterSurvey', new Route('/master-survey', [
    '_controller' => 'App\MasterSurvey\Controller\MasterSurveyController::index',
]));
$routes->add('masterSurveyCreate', new Route('/master-survey/create', [
    '_controller' => 'App\MasterSurvey\Controller\MasterSurveyController::create',
]));



$routes->add('import', new Route('/import', [
    '_controller' => 'App\Import\Controller\ImportController::prosess',
]));
$routes->add('importDelete', new Route('/deleteA', [
    '_controller' => 'App\Import\Controller\ImportController::deleteA',
]));





// Mahasiswa

$routes->add('survey', new Route('/survey', [
    '_controller' => 'App\Survey\Controller\SurveyController::index',
]));


$routes->add('infografis', new Route('/infografis', [
    '_controller' => 'App\Infografis\Controller\InfografisController::index',
]));
$routes->add('infografisDetail', new Route('/infografis/detail', [
    '_controller' => 'App\Infografis\Controller\InfografisController::detail',
]));


$routes->add('kuesioner', new Route('/kuesioner', [
    '_controller' => 'App\Kuesioner\Controller\KuesionerController::index',
]));
$routes->add('kuesionerStore', new Route('/kuesioner/store', [
    '_controller' => 'App\Kuesioner\Controller\KuesionerController::store',
]));

return $routes;
