<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hello', 'HelloWorld::index');
$routes->get('foodmart', 'FoodmartController::index');
$routes->get('/about', 'About::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/foodmartAPI', 'FoodmartController::API');
//get data from url

$routes->get('/queryAPI/(:any)', 'CustomerControllerQuery::searchParamAPI/$1');



$routes->get('/coba', 'CobaController::index');
$routes->post('/coba/inputDataCoba', 'CobaController::inputDataCoba');
$routes->post('/coba/deleteDataCoba', 'CobaController::deleteDataCoba');
$routes->post('/coba/updateDataCoba', 'CobaController::updateDataCoba');



$routes->get('testdatabase', 'TestDatabase::index');
$routes->get('world', 'WorldController::index');
