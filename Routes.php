<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/add_data_mhs', 'Mahasiswa::add_data_mhs');
$routes->post('/proses_add_mhs', 'Mahasiswa::proses_add_mhs');
$routes->get('/edit_data_mhs/(:any)', 'Mahasiswa::edit_data_mhs/$1');
$routes->post('/proses_edit_mhs', 'Mahasiswa::proses_edit_mhs');
$routes->get('/delete_data_mhs/(:any)', 'Mahasiswa::delete_data_mhs/$1');
