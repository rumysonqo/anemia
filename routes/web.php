<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('grf_porc_2017','Ctrl_Anemia@dat_graf_porc_2017');




Route::get('prov_datos/{yea}','Ctrl_Anemia@prov_datos');
Route::get('mic_datos/{yea}','Ctrl_Anemia@mic_datos');

//graficos 2017
Route::get('graf_prov_2017','Ctrl_Anemia@prov_graf_2017');
Route::get('grf_prov_2017','Ctrl_Anemia@dat_graf_prov_2017');

Route::get('graf_mic_2017','Ctrl_Anemia@mic_graf_2017');
Route::get('grf_mic_2017','Ctrl_Anemia@dat_graf_mic_2017');

//graficos 2016
Route::get('graf_prov_2016','Ctrl_Anemia@prov_graf_2016');
Route::get('grf_prov_2016','Ctrl_Anemia@dat_graf_prov_2016');

Route::get('graf_mic_2016','Ctrl_Anemia@mic_graf_2016');
Route::get('grf_mic_2016','Ctrl_Anemia@dat_graf_mic_2016');

//graficos 2015
Route::get('graf_prov_2015','Ctrl_Anemia@prov_graf_2015');
Route::get('grf_prov_2015','Ctrl_Anemia@dat_graf_prov_2015');

Route::get('graf_mic_2015','Ctrl_Anemia@mic_graf_2015');
Route::get('grf_mic_2015','Ctrl_Anemia@dat_graf_mic_2015');

//graficos 2014
Route::get('graf_prov_2014','Ctrl_Anemia@prov_graf_2014');
Route::get('grf_prov_2014','Ctrl_Anemia@dat_graf_prov_2014');

Route::get('graf_mic_2014','Ctrl_Anemia@mic_graf_2014');
Route::get('grf_mic_2014','Ctrl_Anemia@dat_graf_mic_2014');

Route::get('graf_micro','Ctrl_Anemia@graf_micro');
Route::get('grf_mic/{mr}','Ctrl_Anemia@datos_graf_micro');

Route::get('graf_estab','Ctrl_Anemia@graf_estab');
Route::get('dat_eess/{mr}','Ctrl_Anemia@datos_eess');
Route::get('grf_eess/{estab}','Ctrl_Anemia@datos_graf_eess');