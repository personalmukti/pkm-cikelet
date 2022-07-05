<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Master Routing
$route['default_controller'] = 'PublicHub';
$route['central'] = 'BackendControl';

// Public menu 1 Routing
$route['profil'] = 'PublicHub/profil';
$route['visi-misi'] = 'PublicHub/visi';
$route['organisasi'] = 'PublicHub/organisasi';
$route['maklumat-pelayanan'] = 'PublicHub/maklumat';
$route['penghargaan-prestasi'] = 'PublicHub/penghargaan';
$route['ikm'] = 'PublicHub/ikm';
$route['program-inovasi'] = 'PublicHub/inovasi';

// Public menu 2 Routing
$route['semua-layanan'] = 'PublicHub/layanan';
$route['poli-umum'] = 'PublicHub/poliumum';
$route['tb-paru'] = 'PublicHub/tbparu';
$route['poli-gigi'] = 'PublicHub/kesgimul';
$route['layanan-lansia'] = 'PublicHub/lansia';
$route['layanan-imunisasi'] = 'PublicHub/imunisasi';
$route['kia-kb'] = 'PublicHub/kiakb';
$route['mtbs-mtbm'] = 'PublicHub/mtbs';
$route['pemeriksaan-jiwa'] = 'PublicHub/jiwa';
$route['farmasi-laboratorium'] = 'PublicHub/farmalab';
$route['ugd-poned-inap-rujukan'] = 'PublicHub/ugd';


// Public menu 3 Routing
$route['tenaga-medis'] = 'PublicHub/getdokter';

// Public menu 4 Routing
$route['artikel'] = 'PublicHub/getblog';

// Public menu 5 Routing
$route['hubungi-kami'] = 'PublicHub/kontak';

// Auth Routing
$route['sign-in'] = 'AuthControl/index';
$route['logout'] = 'AuthControl/logout';

// Backend Routing
$route['admin'] = 'BackendControl';
$route['post-berita'] = 'BackendControl/postberita';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
