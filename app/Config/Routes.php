<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use App\Controllers\ClassController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/profile', 'Home::profile');

$routes->get('/', [Home::class, 'index']);
$routes->get('/user', [UserController::class, 'index']);
$routes->get('/kelas', [ClassController::class, 'index']);

// User
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('user/(:any)', [UserController::class, 'update']);
$routes->delete('user/(:any)', [UserController::class, 'destroy']);
$routes->get('user/(:any)', [UserController::class, 'show']);

// Kelas
$routes->get('/kelas/profile', [ClassController::class, 'profile']);
$routes->get('/kelas/create', [ClassController::class, 'create']);
$routes->post('/kelas/store', [ClassController::class, 'store']);
$routes->get('kelas/(:any)/edit', [ClassController::class, 'edit']);
$routes->put('kelas/(:any)', [ClassController::class, 'update']);
$routes->delete('kelas/(:any)', [ClassController::class, 'destroy']);