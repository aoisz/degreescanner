<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
// $routes->get('/(:alpha)', 'Home::changeMainContent/$1');
$routes->get('scan', 'Scan::index');
$routes->get('history', 'History::index');
$routes->get('about', 'About::index');