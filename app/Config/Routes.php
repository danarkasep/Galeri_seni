<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->get('/detail', 'Home::detail');

$routes->get('/register', 'home::register');
$routes->post('/login', 'register::login');
$routes->get('/register', 'Login::register');


$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');


// app/config/Routes.php

$routes->get('/register', 'RegisterController::register');
$routes->get('/login', 'LoginController::showLoginForm');
$routes->post('/login', 'LoginController::login');
$routes->get('/login/register', 'home::register'); // New route for showing the registration form from login


// app/config/Routes.php

$routes->get('/register', 'RegisterController::register');
$routes->get('/login', 'LoginController::showLoginForm');
$routes->post('/login', 'LoginController::login');
$routes->get('/register/login', 'home::index'); // New route for showing the login form from registration


// app/config/Routes.php

$routes->get('/register', 'RegisterController::register');
$routes->get('/login', 'LoginController::showLoginForm');
$routes->post('/login', 'LoginController::login');

$routes->post('/login/process_register', 'LoginController::showLoginForm');

// app/Config/Routes.php

$routes->get('/detail', 'detail::index', ['filter' => 'isLoggedIn']);

$routes->group('detail', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'DetailController::login');
});






