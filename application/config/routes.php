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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;


/**
 * Url routing for admin panel
 */

$route['login'] = 'Login/index';
$route['user_login']='Login/login';
$route['dashboard'] = 'Dashboard/dashboard';
$route['logout'] = 'Login/logout';

/*project section routing*/
$route['project'] = 'Project_Controller/index';
$route['add_project'] = 'Project_Controller/add_project';
$route['add_project_data']='Project_Controller/insert_project_data';
$route['update_project/(:any)']='Project_Controller/edit/$1';
/*module section*/
$route['module_list/(:any)']='Project_Controller/view_module/$1';
$route['add_module'] = 'Project_Controller/add_module';
$route['add_module_data'] = 'Project_Controller/insert_module';
$route['delete_module/(:any)/(:any)']='Project_Controller/delete_module/$1/$2';
$route['edit_module/(:any)']='Project_Controller/edit_module/$1';
/*api section*/
$route['api/(:any)']='Project_Controller/api_list/$1';
$route['add_api']='Project_Controller/add_api';
$route['add_api_data'] = 'Project_Controller/insert_api';
$route['edit_api/(:any)']='Project_Controller/edit_api/$1';
$route['update_api'] = 'Project_Controller/update_api';




$route['request'] = 'Request_Controller/index';
$route['add_request'] = 'Request_Controller/add';
$route['insert_request'] = 'Request_Controller/insert_dt';
$route['edit_request/(:any)'] = "Request_Controller/edit/$1";

$route['role'] = 'RoleController/index';
$route['add_role'] = 'RoleController/add_role';
$route['insert_role'] = 'RoleController/insert_role';
$route['edit_role/(:any)'] = "RoleController/edit_role/$1";

$route['users'] = 'User_Controller/index';
$route['add_user'] = 'User_Controller/add_user';
$route['insert_user'] = 'User_Controller/insert_user';
$route['edit_user/(:any)'] = 'User_Controller/edit_user/$1';










