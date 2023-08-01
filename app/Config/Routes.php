<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

//front-end Routes
$routes->get('/', 'Home::index');
$routes->get('/objective', 'Home::objective');
$routes->get('/definition', 'Home::definition');
$routes->get('/whyRegister', 'Home::whyRegister');
$routes->get('/contactInfo', 'Home::contactInfo');
$routes->get('/eligibleMember', 'Home::eligibleMember');
$routes->get('/MRSmembers', 'Home::MRSmembers');
$routes->get('/listWorks', 'Home::listWorks');
$routes->get('/licensing', 'Home::licensing');
$routes->get('/licensingPurpose', 'Home::licensingPurpose');
$routes->get('/copyrightInfringement', 'Home::copyrightInfringement');
$routes->get('/outletPremises', 'Home::outletPremises');
$routes->get('/singleEvent', 'Home::singleEvent');
$routes->get('/membershipsApplication', 'Home::membershipsApplication');
$routes->get('/staffDirectory', 'Home::staffDirectory');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/news', 'Home::news');
$routes->get('/news-details/(:num)', 'Home::newsDetails/$1');

//Admin Routes
$routes->group('admin', function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->get('register', 'Register::index', ['filter' => 'authFilter']);
    $routes->post('register', 'Register::register', ['filter' => 'authFilter']);
    $routes->post('login', 'Login::authenticate', ['filter' => 'guestFilter']);
    $routes->get('logout', 'Login::logout', ['filter' => 'authFilter']);
    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'authFilter']);
    $routes->get('profile', 'Dashboard::profile', ['filter' => 'authFilter']);
    $routes->post('update-profile', 'Dashboard::profileupdate', ['filter' => 'authFilter']);
    $routes->post('change-password', 'Dashboard::changepassword', ['filter' => 'authFilter']);
    $routes->get('members', 'MemberController::index', ['filter' => 'authFilter']);
    $routes->post('members-add', 'MemberController::memberstore', ['filter' => 'authFilter']);
    $routes->get('members-edit/(:num)', 'MemberController::memberedit/$1', ['filter' => 'authFilter']);
    $routes->post('members-update', 'MemberController::memberupdate', ['filter' => 'authFilter']);
    $routes->get('members-delete/(:num)', 'MemberController::memberdelete/$1', ['filter' => 'authFilter']);
    $routes->get('listofwork', 'WorkController::index', ['filter' => 'authFilter']);
    $routes->post('works-add', 'WorkController::workStore', ['filter' => 'authFilter']);
    $routes->get('works-edit/(:num)', 'WorkController::workEdit/$1', ['filter' => 'authFilter']);
    $routes->post('works-update', 'WorkController::workUpdate', ['filter' => 'authFilter']);
    $routes->get('works-delete/(:num)', 'WorkController::workDelete/$1', ['filter' => 'authFilter']);
    $routes->get('staff', 'StaffController::index', ['filter' => 'authFilter']);
    $routes->post('staff-add', 'StaffController::staffStore', ['filter' => 'authFilter']);
    $routes->get('staff-edit/(:num)', 'StaffController::staffEdit/$1', ['filter' => 'authFilter']);
    $routes->post('staff-update', 'StaffController::staffUpdate', ['filter' => 'authFilter']);
    $routes->get('staff-delete/(:num)', 'StaffController::staffDelete/$1', ['filter' => 'authFilter']);
    $routes->get('gallery', 'GalleryController::index', ['filter' => 'authFilter']);
    $routes->post('gallery-add', 'GalleryController::galleryStore', ['filter' => 'authFilter']);
    $routes->get('gallery-delete/(:num)', 'GalleryController::galleryDelete/$1', ['filter' => 'authFilter']);
    $routes->get('news', 'NewsController::index', ['filter' => 'authFilter']);
    $routes->post('news-add', 'NewsController::newsStore', ['filter' => 'authFilter']);
    $routes->get('news-edit/(:num)', 'NewsController::newsEdit/$1', ['filter' => 'authFilter']);
    $routes->post('news-update', 'NewsController::newsUpdate', ['filter' => 'authFilter']);
    $routes->get('news-delete/(:num)', 'NewsController::newsDelete/$1', ['filter' => 'authFilter']);
    $routes->group('pages', function ($routes) {
        $routes->get('home', 'PageEditorController::index', ['filter' => 'authFilter']);
        $routes->post('update-page', 'PageEditorController::indexupdate', ['filter' => 'authFilter']);
    });
});

//user Routes
$routes->group('user', function ($routes) {
    $routes->get('logout', 'Login::logout', ['filter' => 'authFilter']);
    $routes->get('dashboard', 'Dashboard::userindex', ['filter' => 'authFilter']);
    $routes->get('profile', 'Dashboard::userprofile', ['filter' => 'authFilter']);
    $routes->post('update-profile', 'Dashboard::userprofileupdate', ['filter' => 'authFilter']);
    $routes->post('change-password', 'Dashboard::userchangepassword', ['filter' => 'authFilter']);
    $routes->get('members', 'MemberController::userindex', ['filter' => 'authFilter']);
    $routes->post('members-add', 'MemberController::usermemberstore', ['filter' => 'authFilter']);
    $routes->get('members-edit/(:num)', 'MemberController::usermemberedit/$1', ['filter' => 'authFilter']);
    $routes->post('members-update', 'MemberController::usermemberupdate', ['filter' => 'authFilter']);
    $routes->get('members-delete/(:num)', 'MemberController::usermemberdelete/$1', ['filter' => 'authFilter']);
    $routes->get('listofwork', 'WorkController::userindex', ['filter' => 'authFilter']);
    $routes->post('works-add', 'WorkController::userworkStore', ['filter' => 'authFilter']);
    $routes->get('works-edit/(:num)', 'WorkController::userworkEdit/$1', ['filter' => 'authFilter']);
    $routes->post('works-update', 'WorkController::userworkUpdate', ['filter' => 'authFilter']);
    $routes->get('works-delete/(:num)', 'WorkController::userworkDelete/$1', ['filter' => 'authFilter']);
    $routes->get('staff', 'StaffController::userindex', ['filter' => 'authFilter']);
    $routes->post('staff-add', 'StaffController::userstaffStore', ['filter' => 'authFilter']);
    $routes->get('staff-edit/(:num)', 'StaffController::userstaffEdit/$1', ['filter' => 'authFilter']);
    $routes->post('staff-update', 'StaffController::userstaffUpdate', ['filter' => 'authFilter']);
    $routes->get('staff-delete/(:num)', 'StaffController::userstaffDelete/$1', ['filter' => 'authFilter']);
    $routes->get('gallery', 'GalleryController::userindex', ['filter' => 'authFilter']);
    $routes->post('gallery-add', 'GalleryController::usergalleryStore', ['filter' => 'authFilter']);
    $routes->get('gallery-delete/(:num)', 'GalleryController::usergalleryDelete/$1', ['filter' => 'authFilter']);
    $routes->get('news', 'NewsController::userindex', ['filter' => 'authFilter']);
    $routes->post('news-add', 'NewsController::usernewsStore', ['filter' => 'authFilter']);
    $routes->get('news-edit/(:num)', 'NewsController::usernewsEdit/$1', ['filter' => 'authFilter']);
    $routes->post('news-update', 'NewsController::usernewsUpdate', ['filter' => 'authFilter']);
    $routes->get('news-delete/(:num)', 'NewsController::usernewsDelete/$1', ['filter' => 'authFilter']);
    $routes->group('pages', function ($routes) {
        $routes->get('home', 'PageEditorController::userindex', ['filter' => 'authFilter']);
        $routes->post('update-page', 'PageEditorController::userindexupdate', ['filter' => 'authFilter']);
    });
});
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
