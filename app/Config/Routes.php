<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->get('home', 'Pages::home');
$routes->get('services', 'Pages::services');

// Contact form routes
$routes->post('contact/send', 'Contact::sendEmail');
$routes->get('contact/captcha', 'Contact::generateCaptcha');

