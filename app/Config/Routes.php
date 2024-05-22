<?php

use App\Controllers\About;
use App\Controllers\Certificate;
use App\Controllers\History;
use App\Controllers\Home;
use App\Controllers\Login;
use App\Controllers\ProcessImage;
use App\Controllers\Scan;
use App\Controllers\ValidCertificate;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', [Home::class, 'index']);
$routes->get('login', [Login::class, 'index']);
$routes->get('scan/(:alphanum)', [Scan::class, 'index']);
$routes->get('/', [Login::class, 'index']);
$routes->get('history', [History::class, 'index']);
$routes->get('about', [About::class, 'index']);
$routes->get('valid', [ValidCertificate::class, 'index']);
$routes->get('certificate/(:num)', [Certificate::class, 'index']);
$routes->post('scan', [Scan::class, 'post']);
$routes->get('certificate/(:num)', [[Certificate::class, 'index'], '$1']);
$routes->get('delete/(:num)', [[History::class, 'delete'], '$1']);
$routes->post('/processImage', [ProcessImage::class, 'process']);
$routes->post('login/check', [Login::class, 'login']);
$routes->post('about', [About::class, 'index']);

