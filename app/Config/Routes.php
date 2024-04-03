<?php

use App\Controllers\About;
use App\Controllers\Certificate;
use App\Controllers\History;
use App\Controllers\Home;
use App\Controllers\Login;
use App\Controllers\Scan;
use App\Controllers\ValidCertificate;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('login', [Login::class, 'index']);
$routes->get('scan', [Scan::class, 'index']);
$routes->get('history', [History::class, 'index']);
$routes->get('scan', [About::class, 'index']);
$routes->get('valid', [ValidCertificate::class, 'index']);
$routes->get('certificate/(:num)', [Certificate::class, 'index']);