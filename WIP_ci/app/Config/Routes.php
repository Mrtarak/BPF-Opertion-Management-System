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
$routes->get('roles', 'Role::index');
$routes->get('roles/manage', 'Role::index');
$routes->get('roles/add', 'Role::add');
$routes->post('roles/store', 'Role::store');
$routes->get('roles/edit/(:any)', 'Role::edit/$1');      
$routes->post('roles/update/(:any)', 'Role::update/$1'); 
$routes->get('roles/delete/(:any)', 'Role::delete/$1'); 
// manage Rights Routes 
$routes->get('rights/manage', 'Rights::manage');
$routes->get('rights', 'Rights::index');
$routes->get('rights/manage', 'Rights::index');
$routes->get('rights/add', 'Rights::add');
$routes->post('rights/store', 'Rights::store');
$routes->post('rights/save', 'Rights::save');
$routes->get('rights/edit/(:any)', 'Rights::edit/$1');
$routes->post('rights/update/(:any)', 'Rights::update/$1');
$routes->get('rights/delete/(:any)', 'Rights::delete/$1');
// Manage Event Types
$routes->get('events/types', 'Event::eventTypes');
$routes->get('events/types/add', 'Event::addEventType');
$routes->post('events/types/save', 'Event::saveEventType');
$routes->get('events/types/edit/(:any)', 'Event::editEventType/$1');
$routes->post('events/types/update/(:any)', 'Event::updateEventType/$1');
$routes->get('events/types/delete/(:any)', 'Event::deleteEventType/$1');
//Manage Event Details
$routes->get('events/list', 'Event::eventList');
$routes->get('events/add', 'Event::addEvent');
$routes->post('events/save', 'Event::saveEvent');
$routes->get('events/edit/(:any)', 'Event::editEvent/$1');
$routes->post('events/update/(:any)', 'Event::updateEvent/$1');
$routes->get('events/delete/(:any)', 'Event::deleteEvent/$1');
// Manage Goal Types
$routes->get('goals/types', 'Goal::goalTypes');
$routes->get('goals/types/add', 'Goal::addGoalType');
$routes->post('goals/types/save', 'Goal::saveGoalType');
$routes->get('goals/types/edit/(:any)', 'Goal::editGoalType/$1');
$routes->post('goals/types/update/(:any)', 'Goal::updateGoalType/$1');
$routes->get('goals/types/delete/(:any)', 'Goal::deleteGoalType/$1');
//Manage Goals
$routes->get('goals', 'Goal::goals');
$routes->get('goals/add', 'Goal::addGoal');
$routes->post('goals/save', 'Goal::saveGoal');
$routes->get('goals/edit/(:any)', 'Goal::editGoal/$1');
$routes->post('goals/update/(:any)', 'Goal::updateGoal/$1');
$routes->get('goals/delete/(:any)', 'Goal::deleteGoal/$1');
// Manage Centers
$routes->get('center', 'Center::index');
$routes->get('center/add', 'Center::add');
$routes->post('center/store', 'Center::store');
$routes->get('center/edit/(:any)', 'Center::edit/$1');
$routes->post('center/update/(:any)', 'Center::update/$1');
$routes->get('center/delete/(:any)', 'Center::delete/$1');
//Manage batches
$routes->get('batches', 'Batch::index');
$routes->get('batches/add', 'Batch::add');
$routes->post('batches/store', 'Batch::store');
$routes->get('batches/edit/(:any)', 'Batch::edit/$1');
$routes->post('batches/update/(:any)', 'Batch::update/$1');
$routes->get('batches/delete/(:any)', 'Batch::delete/$1');
