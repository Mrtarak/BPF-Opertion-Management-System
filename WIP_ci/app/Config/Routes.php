<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
// Manage Program Routes
$routes->get('programs', 'Programs::index');
$routes->get('forms/add_programs', 'Programs::add');
$routes->post('programs/store', 'Programs::store');
$routes->get('programs/edit/(:segment)', 'Programs::edit/$1');
$routes->post('programs/update/(:segment)', 'Programs::update/$1');
$routes->get('programs/delete/(:segment)', 'Programs::delete/$1');
// manage User Routes
$routes->get('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/store', 'Users::store');
$routes->get('users/view/(:any)', 'Users::view/$1');     
$routes->get('users/edit/(:any)', 'Users::edit/$1');     
$routes->post('users/update/(:any)', 'Users::update/$1'); 
$routes->get('users/delete/(:segment)', 'Users::delete/$1');
// Manage Role Routes
$routes->get('roles/manage', 'Role::manage');
$routes->get('roles/add', 'Role::add');
$routes->post('roles/store', 'Role::store');
$routes->get('roles/edit/(:any)', 'Role::edit/$1');      
$routes->post('roles/update/(:any)', 'Role::update/$1'); 
$routes->get('roles/delete/(:any)', 'Role::delete/$1'); 
// manage Rights Routes 
$routes->get('rights/manage', 'Rights::manage');
$routes->get('rights/add', 'Rights::add');
$routes->post('rights/store', 'Rights::store');
$routes->get('rights/edit/(:any)', 'Rights::edit/$1');
$routes->post('rights/update/(:any)', 'Rights::update/$1');
$routes->get('rights/delete/(:any)', 'Rights::delete/$1');


