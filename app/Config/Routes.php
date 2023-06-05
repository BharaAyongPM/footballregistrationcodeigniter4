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

$routes->post('daftar/tambahpemain', 'Daftar::tambahpemain');
$routes->get('daftar/tambahpemain', 'Daftar::tambahpemain');
$routes->post('daftar/savepemain', 'Daftar::savepemain');
$routes->get('daftar/savepemain', 'Daftar::savepemain');
$routes->get('coba', 'Coba::index');
$routes->get('/assets/img', 'img');
$routes->get('daftar', 'Daftar::index');
$routes->get('daftar', 'Daftar::index');
$routes->get('notification', 'Message::showSweetAlertMessages');

// ADMIN
$routes->post('admin/dbadmin', 'Admin\Dbadmin::index');
$routes->get('admin/masuk', 'Admin\Masuk::index');
$routes->post('admin/masuk/auth', 'Admin\Masuk::auth');
$routes->get('admin/masuk/logout', 'Admin\Masuk::logout');
$routes->get('admin/dbadmin', 'Admin\Dbadmin::index');
$routes->get('admin/pemain', 'Admin\Pemain::index');
$routes->get('admin/pemain/tambahpemain', 'Admin\pemain::tambahpemain');
$routes->post('admin/pemain/savepemain', 'Admin\Pemain::savepemain');
$routes->get('admin/pemain/edit/(:segment)', 'Admin\Pemain::edit/$1');
$routes->post('admin/pemain/update/(:segment)', 'Admin\Pemain::update/$1');
$routes->delete('admin/pemain/lihatpemain/admin/pemain/delete/(:segment)', 'Admin\Pemain::delete/$1');
$routes->get('admin/pemain/lihatpemain/(:segment)', 'Admin\Pemain::lihatpemain/$1');
$routes->get('admin', 'Admin\Masuk::index');
$routes->get('admin/pemain/editfoto/(:segment)', 'Admin\Pemain::editfoto/$1');
$routes->post('admin/pemain/gantifoto/(:segment)', 'Admin\Pemain::gantifoto/$1');
$routes->get('admin/pemain/editktp/(:segment)', 'Admin\Pemain::editktp/$1');
$routes->post('admin/pemain/gantiktp/(:segment)', 'Admin\Pemain::gantiktp/$1');
$routes->get('admin/pemain/surat/(:segment)', 'Admin\Pemain::surat/$1');
$routes->post('admin/pemain/gantipdf/(:segment)', 'Admin\Pemain::gantipdf/$1');
$routes->get('admin/pemain/downloadfoto/(:segment)', 'admin\pemain::downloadfoto/$1');
$routes->get('admin/pemain/downloadktp/(:segment)', 'admin\pemain::downloadktp/$1');
$routes->get('admin/pemain/downloadsurat/(:segment)', 'admin\pemain::downloadsurat/$1');
$routes->get('admin/pemain/export', 'admin\Pemain::export');


//LATIHAN
$routes->get('admin/latihan', 'Admin\Latihan::index');
$routes->post('admin/latihan/save', 'Admin\Latihan::save');
$routes->get('admin/latihan/viewjadwal', 'Admin\Latihan::viewjadwal');
$routes->get('admin/latihan/viewpeserta', 'Admin\Latihan::viewpeserta');
$routes->get('admin/latihan/team', 'Admin\Latihan::team');
$routes->post('admin/latihan/team', 'Admin\Latihan::team');
$routes->get('admin/latihan/team/(:segment)', 'Admin\Latihan::team/$1');
$routes->get('admin/latihan/masuktim', 'Admin\Latihan::masuktim');
$routes->match(['get', 'post', 'put', 'delete'],'admin/latihan/masuk/(:segment)', 'Admin\Latihan::masuk/$1');
$routes->match(['get', 'post', 'put', 'delete'],'admin/latihan/masuk', 'Admin\Latihan::masuk');

//beranda
$routes->get('/', 'Pages::beranda');
$routes->get('pages/peserta', 'Pages::index');
$routes->get('pages/lihattim/(:segment)', 'Pages::lihattim/$1');
// LOLOS
$routes->get('admin/dbadmin/lolos', 'Admin\Dbadmin::lolos');
$routes->get('admin/lolos/pemainlolos/(:segment)', 'Admin\Lolos::pemainlolos/$1');
$routes->get('admin/lolos/editlolos/(:segment)', 'Admin\Lolos::editlolos/$1');
$routes->post('admin/lolos/updatelolos/(:segment)', 'Admin\Lolos::updatelolos/$1');
$routes->delete('admin/lolos/pemainlolos/admin/lolos/deletelolos/(:segment)', 'Admin\Lolos::deletelolos/$1');
$routes->get('admin/lolos/editfotololos/(:segment)', 'Admin\Lolos::editfotololos/$1');
$routes->post('admin/lolos/gantifotololos/(:segment)', 'Admin\Lolos::gantifotololos/$1');
$routes->get('admin/lolos/editktplolos/(:segment)', 'Admin\Lolos::editktplolos/$1');
$routes->post('admin/lolos/gantiktplolos/(:segment)', 'Admin\Lolos::gantiktplolos/$1');
$routes->get('admin/lolos/suratlolos/(:segment)', 'Admin\Lolos::suratlolos/$1');
$routes->post('admin/lolos/gantipdflolos/(:segment)', 'Admin\Lolos::gantipdflolos/$1');
$routes->get('admin/lolos/downloadfotololos/(:segment)', 'admin\Lolos::downloadfotololos/$1');
$routes->get('admin/lolos/downloadktplolos/(:segment)', 'admin\Lolos::downloadktplolos/$1');
$routes->get('admin/lolos/downloadsuratlolos/(:segment)', 'admin\Lolos::downloadsuratlolos/$1');
$routes->get('admin/lolos/exportlolos', 'admin\Lolos::exportlolos');
// $routes->match(['get', 'post', 'put', 'delete'],'admin/pemain/movePemain/(:segment)', 'Admin\Pemain::movePemain/$1');
// tunggu
$routes->get('admin/dbadmin/tunggu', 'Admin\Dbadmin::tunggu');
// $routes->match(['get', 'post', 'put', 'delete'],'admin/pemain/movePemain/(:segment)', 'Admin\Pemain::movePemain/$1');

// JAKARTA 
$routes->get('pages/peserta', 'Pages::peserta');
$routes->post('pages/peserta', 'Pages::peserta');
$routes->get('pages/pesertalolos', 'Pages::pesertalolos');
$routes->post('pages/pesertalolos', 'Pages::pesertalolos');

// TUNGGU
$routes->get('admin/tunggu/pemaintunggu/(:segment)', 'Admin\Tunggu::pemaintunggu/$1');
$routes->match(['get', 'post', 'put', 'delete'],'admin/tunggu/loloskan/(:segment)', 'Admin\Tunggu::loloskan/$1');
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
