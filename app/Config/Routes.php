<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get','post'],'/', 'Home::index');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'adminFilter']);
$routes->get('logout', 'Home::logout');
