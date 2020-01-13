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
$route['default_controller'] = 'frontend';
 
// $route['market']='frontend/market';
// $route['testimonials']='frontend/testimonials';
// $route['trade-navigator']='frontend/trade_navigator';
$route['trade-station']='frontend/trade_station';
$route['get-the-ebook']='frontend/get_the_ebook';
// $route['mentoring']='frontend/mentoring';
// $route['cot-reports']='frontend/cot_reports';
// $route['contact-us']='frontend/contact_us';
// $route['courses']='frontend/courses';
// $route['pug']='frontend/pug';
$route['free-daily-persons-pivots']='frontend/daily_persons_pivots';
$route['example']='frontend/example';
$route['events-algo']='frontend/events_algo';
$route['persons-pivot-triggers']='frontend/persons_pivot_triggers';
$route['the-advance-trading-indicator']='frontend/advance_trading_indicator';
$route['john-lifetime-package']='frontend/john_lifetime_package';
$route['instructional-videos']='frontend/instructional_videos';
$route['resources']='frontend/resources';
// $route['algo-optimizer-training']='frontend/algo_optimizer_training';
$route['td-ameritrade-thinkorswim-platform']='frontend/td_ameritrade';
$route['tradeshark-software']='frontend/tradeshark_software';
$route['algo-trading']='frontend/algo_trading';
$route['station']='frontend/station';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['calendar']='frontend/calendar/index';
$route['testmonials']='frontend/page/testmonials/';
$route['courses']='frontend/page/courses/';
$route['courses/(:any)']='frontend/page/courses/$1';
$route['events/(:any)']='frontend/page/events/$1';
$route['testmonials/(:num)']='frontend/page/testmonials/$1';
$route['(:any)']='frontend/page/singlePage/$1';
