<?php

use App\Controllers\About;
use App\Controllers\Certificate;
use App\Controllers\History;
use App\Controllers\Home;
use App\Controllers\Login;
use App\Controllers\ProcessImage;
use App\Controllers\Scan;
use App\Controllers\Student;
use App\Controllers\Admin;
use App\Controllers\ValidCertificate;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// get
$routes->get('home', [Home::class, 'index']);
$routes->get('login', [Login::class, 'index']);
$routes->get('/', [Login::class, 'index']);
$routes->get('scan', [Scan::class, 'index']);
$routes->get('scan/(:alphanum)', [Scan::class, 'index']);
$routes->get('history', [History::class, 'index']);
$routes->get('about', [About::class, 'index']);
$routes->get('profile', [Student::class, 'index']);
$routes->get('valid', [ValidCertificate::class, 'index']);
$routes->get('certificate/(:num)', [[Certificate::class, 'index'], '$1']);
$routes->get('certificate/(:num)', [Certificate::class, 'index']);
$routes->get('admin', [Admin::class, 'index']);
$routes->get('admin/pending/(:num)', [[Admin::class, 'showPending'], '$1']);
$routes->get('accounts', [Admin::class, 'showStudentAccounts']);
// post
$routes->post('valid', [ValidCertificate::class, 'index']);
$routes->post('scan', [Scan::class, 'post']);
$routes->post('/processImage', [ProcessImage::class, 'process']);
$routes->post('login/check', [Login::class, 'login']);
$routes->post('about', [About::class, 'index']);
$routes->post("admin/delete", [Admin::class, 'delete']);
$routes->post("admin/authenticate", [Admin::class, 'authenticateCertificate']);
$routes->post("delete", [History::class, 'delete']);
$routes->post("changePassword", [Student::class, 'changePassword']);
$routes->post("admin/search", [Admin::class, 'search']);
$routes->post("admin/reset", [Admin::class, 'reset']);

