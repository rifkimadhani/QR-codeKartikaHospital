<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/user_view', 'Users::index');
$routes->get('/datapasien', 'DataPasien::index', ['filter' => 'usersAuth']);
$routes->get('/datapasien/tambah', 'DataPasien::tambah', ['filter' => 'usersAuth']);
$routes->post('/datapasien/simpan', 'DataPasien::simpan', ['filter' => 'usersAuth']);
$routes->get('/edit/(:any)', 'DataPasien::edit/$1', ['filter' => 'usersAuth']);
$routes->get('/datapasien/(:any)', 'DataPasien::delete/$1', ['filter' => 'usersAuth']);
$routes->post('/datapasien/update/(:any)', 'DataPasien::update/$1', ['filter' => 'usersAuth']);
// Login
$routes->post('/user/login', 'Users::process');
$routes->get('/user/logout', 'Users::logout');
$routes->post('/user/changepw', 'Users::changepw');
$routes->get('/user/password', 'Users::password');


$routes->get('/kosong/(:any)','DataPasien::kosong/$1');
$routes->get('/qrcode/(:any)','DataPasien::qrcode/$1');
$routes->get('/hasil/(:any)','DataPasien::hasil/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
