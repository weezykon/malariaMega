<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Patient Routes
$route['login'] = 'AuthController/login';
$route['register'] = 'AuthController/register';
$route['logout'] = 'AuthController/logout';

// Patient view result
$route['test/(:any)'] = 'HomeController/result/$1';

// Doctor
$route['doctor'] = 'DoctorController';

// Drugs
$route['doctor/drugs'] = 'DoctorController/drugs';
$route['doctor/drugs/create'] = 'DoctorController/createdrug';
$route['doctor/drugs/delete/(:num)'] = 'DoctorController/deletedrug/$1';

// Patients
$route['doctor/patients'] = 'DoctorController/patients';

// Test
$route['doctor/test'] = 'DoctorController/test';
$route['doctor/drug'] = 'DoctorController/drug';
$route['doctor/tests'] = 'DoctorController/tests';

//Auth
$route['doctor/login'] = 'AuthController/doctorLogin';
$route['doctor/logout'] = 'DoctorController/logout';

// DEFAULT ROUTES!
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
