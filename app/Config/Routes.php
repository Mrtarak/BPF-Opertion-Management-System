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
$routes->get('programs/view/(:segment)', 'Programs::view/$1');
$routes->get('programs/edit/(:segment)', 'Programs::edit/$1');
$routes->post('programs/update/(:segment)', 'Programs::update/$1');
$routes->get('programs/delete/(:segment)', 'Programs::delete/$1');
// Manage Program Themes
$routes->get('program_theme', 'ProgramThemeController::index');
$routes->get('program_theme/add', 'ProgramThemeController::add');
$routes->post('program_theme/store', 'ProgramThemeController::store');
$routes->get('program_theme/view/(:any)', 'ProgramThemeController::view/$1');
$routes->get('program_theme/edit/(:any)', 'ProgramThemeController::edit/$1');
$routes->post('program_theme/update/(:any)', 'ProgramThemeController::update/$1');
$routes->get('program_theme/delete/(:any)', 'ProgramThemeController::delete/$1');
// manage User Routes
$routes->get('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/store', 'Users::store');
$routes->get('users/view/(:any)', 'Users::view/$1');     
$routes->get('users/edit/(:any)', 'Users::edit/$1');     
$routes->post('users/update/(:any)', 'Users::update/$1'); 
$routes->get('users/delete/(:segment)', 'Users::delete/$1');
// Manage Role Routes
$routes->get('roles', 'Role::index');
$routes->get('roles/manage', 'Role::index');
$routes->get('roles/add', 'Role::add');
$routes->post('roles/store', 'Role::store');
$routes->get('roles/edit/(:any)', 'Role::edit/$1');      
$routes->post('roles/update/(:any)', 'Role::update/$1'); 
$routes->get('roles/delete/(:any)', 'Role::delete/$1'); 
// manage Rights Routes 
$routes->get('rights', 'Rights::index');
$routes->get('rights/manage', 'Rights::index');
$routes->get('rights/add', 'Rights::add');
$routes->post('rights/store', 'Rights::store');
$routes->post('rights/save', 'Rights::save');
$routes->get('rights/edit/(:any)', 'Rights::edit/$1');
$routes->post('rights/update/(:any)', 'Rights::update/$1');
$routes->get('rights/delete/(:any)', 'Rights::delete/$1');
//Manage EventType
$routes->get('eventtype', 'EventType::index');
$routes->get('eventtype/add', 'EventType::add');
$routes->post('eventtype/store', 'EventType::store');
$routes->get('eventtype/view/(:any)', 'EventType::view/$1');
$routes->get('eventtype/edit/(:any)', 'EventType::edit/$1');
$routes->post('eventtype/update/(:any)', 'EventType::update/$1');
$routes->get('eventtype/delete/(:any)', 'EventType::delete/$1');
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
$routes->get('goals/types/view/(:any)', 'Goal::view/$1');

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
$routes->get('center/view/(:any)', 'Center::view/$1');
$routes->get('center/edit/(:any)', 'Center::edit/$1');
$routes->post('center/update/(:any)', 'Center::update/$1');
$routes->get('center/delete/(:any)', 'Center::delete/$1');
//Manage batches
$routes->get('batches', 'Batch::index');
$routes->get('batches/add', 'Batch::add');
$routes->post('batches/store', 'Batch::store');
$routes->get('batches/view/(:any)', 'Batch::view/$1');
$routes->get('batches/edit/(:any)', 'Batch::edit/$1');
$routes->post('batches/update/(:any)', 'Batch::update/$1');
$routes->get('batches/delete/(:any)', 'Batch::delete/$1');
// Manage Students - Vijetaas
$routes->group('students/vijetaas', function($routes) {
    $routes->get('/', 'ManageStudents\Vijetaas::index');
    $routes->get('add', 'ManageStudents\Vijetaas::add');
    $routes->post('store', 'ManageStudents\Vijetaas::store');
    $routes->get('view/(:any)', 'ManageStudents\Vijetaas::view/$1');
    $routes->get('edit/(:any)', 'ManageStudents\Vijetaas::edit/$1');
    $routes->post('update/(:any)', 'ManageStudents\Vijetaas::update/$1');
    $routes->get('delete/(:any)', 'ManageStudents\Vijetaas::delete/$1');
    
    // Goals CRUD (inside same folder but different controller)
    $routes->get('goals', 'ManageStudents\VijetaasGoals::index');
    $routes->get('goals/add', 'ManageStudents\VijetaasGoals::addGoal'); 
    $routes->post('goals/store', 'ManageStudents\VijetaasGoals::storeGoal');
    $routes->get('goals/view/(:any)', 'ManageStudents\VijetaasGoals::viewGoal/$1');
    $routes->get('goals/edit/(:any)', 'ManageStudents\VijetaasGoals::editGoal/$1');
    $routes->post('goals/update/(:any)', 'ManageStudents\VijetaasGoals::updateGoal/$1');
    $routes->get('goals/delete/(:any)', 'ManageStudents\VijetaasGoals::deleteGoal/$1');
});
// Manage Students - Doosra Mauka
$routes->group('students/doosra_mauka', function($routes) {
    $routes->get('/', 'ManageStudents\DoosraMauka::index');
    $routes->get('add', 'ManageStudents\DoosraMauka::add');
    $routes->post('store', 'ManageStudents\DoosraMauka::store');
    $routes->get('view/(:any)', 'ManageStudents\DoosraMauka::view/$1');
    $routes->get('edit/(:any)', 'ManageStudents\DoosraMauka::edit/$1');
    $routes->post('update/(:any)', 'ManageStudents\DoosraMauka::update/$1');
    $routes->get('delete/(:any)', 'ManageStudents\DoosraMauka::delete/$1');
});

// Manage Students - Learning Adda
$routes->group('students/learning_adda', function($routes) {
    $routes->get('/', 'ManageStudents\LearningAdda::index');
    $routes->get('add', 'ManageStudents\LearningAdda::add');
    $routes->post('store', 'ManageStudents\LearningAdda::store');
    $routes->get('view/(:any)', 'ManageStudents\LearningAdda::view/$1');
    $routes->get('edit/(:any)', 'ManageStudents\LearningAdda::edit/$1');
    $routes->post('update/(:any)', 'ManageStudents\LearningAdda::update/$1');
    $routes->get('delete/(:any)', 'ManageStudents\LearningAdda::delete/$1');
});

// Manage Students - Digital Shakti
$routes->group('students/digital_shakti', function($routes) {
    $routes->get('/', 'ManageStudents\DigitalShakti::index');
    $routes->get('add', 'ManageStudents\DigitalShakti::add');
    $routes->post('store', 'ManageStudents\DigitalShakti::store');
    $routes->get('view/(:any)', 'ManageStudents\DigitalShakti::view/$1');
    $routes->get('edit/(:any)', 'ManageStudents\DigitalShakti::edit/$1');
    $routes->post('update/(:any)', 'ManageStudents\DigitalShakti::update/$1');
    $routes->get('delete/(:any)', 'ManageStudents\DigitalShakti::delete/$1');
});
