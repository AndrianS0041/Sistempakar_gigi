<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['home'] = 'Halaman/view';
$route['konsultasi'] = 'Konsultasi_control/pertanyaan';
$route['cetak/(:any)'] = 'Konsultasi_control/cetak/$1';
$route['hasil_diagnosis/(:any)'] = 'Konsultasi_control/hasil_diagnosis/$1'; //hasil
$route['api_pertanyaan'] = 'Konsultasi_control/api_pertanyaan';
$route['api_rule'] = 'Konsultasi_control/api_rule';
$route['tips'] = 'Tips/index';
$route['petunjuk'] = 'Petunjuk/index';
$route['tentang'] = 'Tentang/index';
$route['default_controller'] = 'Halaman/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['cek/(:any)'] = 'Konsultasi_control/cek_diag/$1';

// $route['konsultasi'] = 'User/Diagnosa/pertanyaan';
// $route['cetak/(:any)'] = 'User/Diagnosa/cetak/$1';

$route['hasildiagnosa/(:any)'] = 'Diagnosa/hasil_diagnosa/$1';
$route['cek/(:any)'] = 'User/Diagnosa/cek_diag/$1';
