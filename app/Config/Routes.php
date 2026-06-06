<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('services', 'Home::services');
$routes->get('pricing', 'Home::pricing');
$routes->get('cars', 'Home::cars');
$routes->get('blog', 'Home::blog');
$routes->get('contact', 'Home::contact');
// $routes->get('login', 'Home::login');
$routes->get('login', 'Home::login');
$routes->get('cars/detail/(:num)', 'Home::detail/$1');

// $routes->get('/pages', 'Pages::index');
