<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 
$routes->get('/faq', 'Home::faq');
$routes->post('send-email', 'Home::sendEmail');
$routes->get('understanding-the-issue', 'Home::understandingtheissue'); 
$routes->post('user-detail', 'Home::userDetail'); 
$routes->post('detail', 'Home::detail'); 
$routes->post('resolution-center', 'Home::resolution_center');
$routes->post('resolution-and-troubleshooting', 'Home::resolutionAndTroubleshooting'); 
$routes->post('thank-you', 'Home::thankYouPage'); 
$routes->get('contact-us', 'Home::contact_us');
$routes->get('about-us', 'Home::about_us');
$routes->get('privacy-policy', 'Home::privacy_policy');
$routes->get('reviews', 'Home::reviews');
$routes->post('submit-review', 'Home::save_review');
$routes->post('send-troubleshooting-email', 'Home::send_troubleshooting_mail');


$routes->get('view-troubleshooting-email', 'Home::view_troubleshooting_mail');

