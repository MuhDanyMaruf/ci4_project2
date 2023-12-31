<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProfileController;

/**
 * @var RouteCollection $routes
 * 
 */




// $routes->get('register', 'Home::register');
$routes->get('/', 'Home::index');
$routes->get('katalog', 'Katalog::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('signup', 'Home::register');

$routes->group(
    'profile',
    ['filter' => 'auth'],
    function ($routes) {
        $routes->get('/', 'ProfileController::index', ['as' => 'profile']);
    }
);


$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->get('profile', 'ProfileController::index', ['as' => 'profile']);
    $routes->get('settings', 'UserController::settings');
    $routes->get('activity-log', 'UserController::activityLog');
    $routes->get('logout', 'UserController::logout');
});


// $routes->add('Admin', 'Admin::index', ['filter' => 'role:admin']);
