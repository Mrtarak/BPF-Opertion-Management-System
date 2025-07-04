<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('programs', 'Programs::index');
$routes->get('forms/add_programs', 'Programs::add');
$routes->post('programs/store', 'Programs::store');
$routes->get('programs/edit/(:segment)', 'Programs::edit/$1');
$routes->post('programs/update/(:segment)', 'Programs::update/$1');
$routes->get('programs/delete/(:segment)', 'Programs::delete/$1');
