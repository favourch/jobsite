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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['([a-zA-Z0-9]+[a-zA-Z\_0-9\.-]*)\/$']
$route['dang-ky'] = 'user/register';
$route['dang-nhap'] = 'user/login';
$route['nha-tuyen-dung/dang-nhap'] = 'companies/login';
$route['nha-tuyen-dung/dang-ky'] = 'companies/register';
$route['nha-tuyen-dung'] = 'companies/view';
$route['nha-tuyen-dung/cap-nhat-thong-tin'] = 'companies/edit';
$route['nha-tuyen-dung/dang-tin'] = 'companies/postjobs';
$route['nha-tuyen-dung/danh-sach-tin-dang'] = 'managejob';
$route['nha-tuyen-dung/danh-sach-tin-dang/(:num)'] = 'managejob/index/$1';
$route['nha-tuyen-dung/cap-nhat-tin-dang-(:num)'] = 'managejob/edit/$1';
$route['nha-tuyen-dung/doi-mat-khau'] = 'companies/change_pass';
$route['nha-tuyen-dung/ho-so-da-luu'] = 'companies/candidate_saved';
$route['nha-tuyen-dung/ung-vien-nop-ho-so'] = 'companies/candidate_applied';
$route['nha-tuyen-dung/ung-vien-nop-ho-so/(:num)'] = 'companies/candidate_applied/$1';


$route['ung-vien/dang-nhap'] = 'candidate/login';
$route['ung-vien/dang-ky'] = 'member_register/register';
$route['ung-vien'] = 'candidate/view';
$route['ung-vien/cap-nhat-thong-tin'] = 'candidate/update_cv';
$route['ung-vien/doi-mat-khau'] = 'candidate/changepass';
$route['ung-vien/dang-xuat'] = 'candidate/logout';
$route['ung-vien/nha-tuyen-dung-xem-ho-so'] = 'candidate/company_view';
$route['ung-vien/nha-tuyen-dung-xem-ho-so/(:num)'] = 'candidate/company_view/$1';
$route['ung-vien/viec-lam-da-ung-tuyen'] = 'candidate/job_applied';
$route['ung-vien/viec-lam-da-ung-tuyen/(:num)'] = 'candidate/job_applied/$1';
$route['ung-vien/viec-lam-da-luu'] = 'candidate/job_saved';
$route['ung-vien/viec-lam-da-luu/(:num)'] = 'candidate/job_saved/$1';

$route['ung-vien/nop-ho-so-(:num)'] = 'career/submitjob/$1';
$route['ung-vien/ho-so-mau'] = 'candidate/cvonline';
$route['ung-vien/mau-ho-so-1'] = 'candidate/intallcv';
$route['active?code=(:any)'] = 'candidate/activation?code=$1';
//rewrite danh muc việc làm
// $2 chinh laf bien :num (category_id)
$route['viec-lam/(:any)-d(:num)'] = 'career/index/$2';
$route['(:any)-(:num)-jv'] = 'career/view/$2';

$route['nha-tuyen-dung/tim-ung-vien'] = 'candidatelist/index';
$route['ho-so/(:num)/(:any).html'] = 'candidatelist/view/$1';
$route['ung-vien/(:num)/(:any).html'] = 'candidatelist/category/$1';

$route['(:any)-c(:num)'] = 'news/catnews/$2';
$route['(:any)-c(:num)/(:num)'] = 'news/catnews/$2/$3';
$route['(:any)-(:num).html'] = 'news/detail/$2';
//trang tin tức
$route['(:any)-pv(:num)'] = 'page/view/$2';