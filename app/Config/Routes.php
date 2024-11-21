<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/data-program-studi', 'DataController::programStudi');
$routes->get('/data-mahasiswa', 'DataController::mahasiswa');
$routes->get('/data-dosen', 'DataController::dosen');
