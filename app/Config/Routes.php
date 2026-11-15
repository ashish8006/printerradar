<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 
$routes->get('/faq', 'Home::faq');
$routes->get('/buying-guides', 'Home::blogs');
$routes->get('buying-guide/(:segment)', 'Home::blog/$1');

$routes->get('/support-plan', 'Home::support_plan');
$routes->get('/affiliate-products', 'Home::affiliate_products');

$routes->post('send-email', 'Home::sendEmail');
$routes->post('under_stand_the_issue', 'Home::under_stand_the_issue');
$routes->post('send_contact_us_mail', 'Home::send_contact_us_mail');
$routes->get('understanding-the-issue', 'Home::understandingtheissue'); 
$routes->post('user-detail', 'Home::userDetail'); 
$routes->get('detail', 'Home::detail'); 
$routes->get('resolution-center', 'Home::resolution_center');
$routes->post('resolution_center_redirect_fun', 'Home::resolution_center_redirect_fun');
$routes->get('resolution-and-troubleshooting', 'Home::resolutionAndTroubleshooting'); 
$routes->get('thank-you', 'Home::thankYouPage'); 
$routes->get('contact-us', 'Home::contact_us');
$routes->get('about-us', 'Home::about_us');
$routes->get('privacy-policy', 'Home::privacy_policy');
$routes->get('reviews', 'Home::reviews');
$routes->post('submit-review', 'Home::save_review');
$routes->post('send-troubleshooting-email', 'Home::send_troubleshooting_mail');
$routes->post('send-support-plan-email', 'Home::sendSupportPlanEmail');


$routes->get('login', 'Home::login');
$routes->post('admin/login_to_dashboard', 'Admin::login_to_dashboard');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/logout', 'Admin::logout');


$routes->get('admin/reviews', 'ReviewController::index');
$routes->get('reviews/add', 'ReviewController::add');
$routes->post('reviews/add', 'ReviewController::add');
$routes->get('reviews/edit/(:num)', 'ReviewController::edit/$1');
$routes->post('reviews/edit/(:num)', 'ReviewController::edit/$1');
$routes->get('reviews/delete/(:num)', 'ReviewController::delete/$1');
$routes->get('reviews/toggle-status/(:num)', 'ReviewController::toggleStatus/$1');




$routes->get('view-troubleshooting-email', 'Home::view_troubleshooting_mail');

$routes->group('admin', function($routes) {
    $routes->get('blogs', 'BlogController::index');             // List all blogs
    $routes->get('blogs/add', 'BlogController::add');           // Show add form
    $routes->post('blogs/store', 'BlogController::store');          // Handle add form submission
    $routes->get('blogs/edit/(:num)', 'BlogController::edit/$1'); // Show edit form
    $routes->post('blogs/edit/(:num)', 'BlogController::edit/$1'); // Handle edit submission
    $routes->get('blogs/delete/(:num)', 'BlogController::delete/$1'); // Delete blog
    $routes->get('blogs/toggle-status/(:num)', 'BlogController::toggleStatus/$1'); // Toggle status
});
