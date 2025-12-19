<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Crud::index');
$routes->post('/crear', 'Crud::crear');
$routes->get('/eliminar/(:num)', 'Crud::eliminar/$1');