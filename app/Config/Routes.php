<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('profile', 'Pages::profile');

$routes->get('login', 'Login::login');
$routes->get('register', 'Register::register');
$routes->get('lupa_password', 'Login::lupa_password');
$routes->get('logout', 'Login::logout');
$routes->post('proses_login', 'Login::process');
$routes->post('proses_register', 'Register::process');

$routes->post('detailProject', 'Project::detailProject');
$routes->post('detailDivision', 'Division::detailDivision');

$routes->post('newTask', 'Task::newTask');

$routes->get('newProject', 'Project::newProject');
$routes->get('onGoingProject', 'Project::onGoingProject');
$routes->get('completeProject', 'Project::completeProject');
$routes->get('projectAlmanac', 'Project::projectAlmanac');

$routes->post('deleteProject', 'Project::deleteProject');
$routes->post('insertProject', 'Project::insertProject');

$routes->post('deleteTask', 'Task::deleteTask');
$routes->post('insertTask', 'Task::insertTask');

$routes->post('updateProfile', 'Pages::updateProfile');

$routes->get('newDivision', 'Division::newDivision');
$routes->get('division', 'Division::division');

$routes->post('deleteDivision', 'Division::deleteDivision');
$routes->post('insertDivision', 'Division::insertDivision');

$routes->post('addMember', 'Division::addMember');
$routes->post('deleteMember', 'Division::deleteMember');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
