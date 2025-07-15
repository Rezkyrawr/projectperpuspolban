<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/dashboard', 'Home::dashboard');

//register user
$routes->get('register', 'AuthController::register');
$routes->post('register/save', 'AuthController::saveRegister');

//register admin
$routes->get('register/admin', 'AuthController::registerAdmin');
$routes->post('register/admin/save', 'AuthController::saveRegisterAdmin');


// AUTH ROUTES
// AUTH ROUTES
$routes->get('/login', 'AuthController::login');
$routes->post('/login/check', 'AuthController::attemptLogin');

$routes->get('/login/check-email', 'AuthController::checkEmail');

$routes->get('/logout', 'AuthController::logout');
$routes->get('logout', 'AuthController::logout');

$routes->group('admin', function($routes) {
    // Jurusan
    
    $routes->get('dashboard', 'Admin\DashboardController::index');    
    $routes->get('jurusan', 'Admin\JurusanController::index');
    $routes->get('jurusan/create', 'Admin\JurusanController::create');
    $routes->post('jurusan/store', 'Admin\JurusanController::store');
    $routes->get('jurusan/edit/(:num)', 'Admin\JurusanController::edit/$1');
    $routes->post('jurusan/update/(:num)', 'Admin\JurusanController::update/$1');
    $routes->get('jurusan/delete/(:num)', 'Admin\JurusanController::delete/$1');

    // Prodi
    $routes->get('prodi', 'Admin\ProdiController::index');
    $routes->get('prodi/create', 'Admin\ProdiController::create');
    $routes->post('prodi/store', 'Admin\ProdiController::store');
    $routes->get('prodi/edit/(:num)', 'Admin\ProdiController::edit/$1');
    $routes->post('prodi/update/(:num)', 'Admin\ProdiController::update/$1');
    $routes->get('prodi/delete/(:num)', 'Admin\ProdiController::delete/$1');

    // Category
    $routes->get('category', 'Admin\CategoryController::index');
    $routes->get('category/create', 'Admin\CategoryController::create');
    $routes->post('category/store', 'Admin\CategoryController::store');
    $routes->get('category/edit/(:num)', 'Admin\CategoryController::edit/$1');
    $routes->post('category/update/(:num)', 'Admin\CategoryController::update/$1');
    $routes->get('category/delete/(:num)', 'Admin\CategoryController::delete/$1');
});
