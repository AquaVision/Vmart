<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


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
  |	http://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There area two reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router what URI segments to use if those provided
  | in the URL cannot be matched to a valid route.
  |
 */


$route['default_controller'] = "Vmart";
$route['404_override'] = '';

//$route['Auth/(:any)'] = "Auth/$1";
//$route['About_us/(:any)'] = "About_us/$1";
//$route['Contact_us/(:any)'] = "Contact_us/$1";
//$route['My_items/(:any)'] = "My_items/$1";
//$route['ShopSettings/(:any)'] = "ShopSettings/$1";
//$route['User_store/(:any)'] = "User_store/$1";
//$route['Vmart/(:any)'] = "Vmart/$1";
//$route['Vmart_alt/(:any)'] = "Vmart_alt/$1";
//$route['Web_cart/(:any)'] = "Web_cart/$1";
//$route['Wizardseller/(:any)'] = "Wizardseller/$1";
//$route['settings/(:any)'] = "settings/$1";
//
//
//
//$route['(:any)/(:any)'] = "$1/$2";
$route['(^[a-zA-Z0-9_.-]+[^/]$)'] = "User_store/seller/$1";

//$route['css/(:any)'] = "application/views/css/sellerfrontstyle.css";


/* End of file routes.php */
/* Location: ./application/config/routes.php */
