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

Route::group(['middleware' => 'auth'], function(){
	//Route Admin
	Route::get('/admin/dashboard', 'admincontroller@index');
	//Artikel
	Route::get('/admin/artikel', 'ArtikelController@index')->name('a-artikel');
	Route::put('/admin/artikel/{id}/', 'ArtikelController@update')->name('admin.a-artikel.edit');
	Route::get('/admin/artikel/{id}/edit', 'ArtikelController@edit')->name('edit_artikel');
	Route::delete('/admin/artikel/{id}/delete', 'ArtikelController@destroy')->name('admin.a-artikel.delete');
	Route::get('/admin/artikel/create', 'ArtikelController@create')->name('admin.a-artikel.create');
	Route::post('/admin/artikel', 'ArtikelController@store')->name('admin.a-artikel.store');
	//Kontak
	Route::get('/admin/kontak', 'KontakController@index')->name('a-kontak');
	//Organisasi
	Route::get('/admin/organisasi', 'OrganisasiController@index')->name('a-organisasi');
	Route::get('/admin/organisasi/{id}/edit', 'OrganisasiController@edit')->name('edit_organisasi');
	Route::patch('/admin/organisasi', 'OrganisasiController@update')->name('admin.a-organisasi');
	//PKH
	Route::get('/admin/pkh', 'PkhController@index')->name('a-pkh');
	Route::delete('/admin/pkh/{id}/delete', 'PkhController@destroy')->name('admin.a-pkh.delete');
	Route::put('/admin/pkh/{id}/', 'PkhController@update')->name('admin.a-pkh.edit');
	Route::get('/admin/pkh/{id}/edit', 'PkhController@edit')->name('edit_pkh');
	Route::get('/admin/pkh/{id}', 'PkhController@show')->name('admin.{id}.show');
	//ISDH
	Route::get('/admin/isdh', 'IsdhController@index')->name('a-isdh');
	Route::delete('/admin/isdh/{id}/delete', 'IsdhController@destroy')->name('admin.a-isdh.delete');
	Route::put('/admin/isdh/{id}/', 'IsdhController@update')->name('admin.a-isdh.edit');
	Route::get('/admin/isdh/{id}/edit', 'IsdhController@edit')->name('edit_isdh');
	Route::get('/admin/isdh/{id}', 'IsdhController@show')->name('admin.{id}.show');
	//Pegawai
	Route::get('/admin/pegawai', 'PegawaiController@index')->name('a-pegawai');
	Route::put('/admin/pegawai/{id}/', 'PegawaiController@update')->name('admin.a-pegawai.edit');
	Route::get('/admin/pegawai/{id}/edit', 'PegawaiController@edit')->name('edit_pegawai');
	Route::delete('/admin/pegawai/{id}/delete', 'PegawaiController@destroy')->name('admin.a-pegawai.delete');
	Route::get('/admin/pegawai/create', 'PegawaiController@create')->name('admin.a-pegawai.create');
	Route::post('/admin/pegawai', 'PegawaiController@store')->name('admin.a-pegawai.store');
	//Pemanfaatan
	Route::get('/admin/pemanfaatan', 'PemanfaatanController@index')->name('a-pemanfaatan');
	Route::delete('/admin/pemanfaatan/{id}/delete', 'PemanfaatanController@index')->name('admin.a-pemanfaatan.delete');
	//Peraturan
	Route::get('/admin/peraturan', 'PeraturanController@index')->name('a-peraturan');
	Route::put('/admin/peraturan/{id}/', 'PeraturanController@update')->name('admin.a-peraturan.edit');
	Route::get('/admin/peraturan/{id}/edit', 'PeraturanPperaturanController@edit')->name('edit_pegawai');
	Route::delete('/admin/peraturan/{id}/delete', 'PeraturanController@destroy')->name('admin.a-peraturan.delete');
	Route::get('/admin/peraturan/create', 'PeraturanController@create')->name('admin.a-peraturan.create');
	Route::post('/admin/peraturan', 'PeraturanController@store')->name('admin.a-peraturan.store');
	//Ppkh
	Route::get('/admin/ppkh', 'PpkhController@index')->name('a-ppkh');
	Route::get('/admin/ppkh/create', 'PpkhController@create')->name('admin.a-ppkh.create');
	Route::post('/admin/ppkh', 'PpkhController@store')->name('admin.a-ppkh.store');
	// Sejarah
	Route::get('/admin/sejarah','SejarahController@index')->name('a-sejarah');
	Route::get('/admin/sejarah/{id}/edit','SejarahController@edit')->name('edit_sejarah');
	Route::patch('/admin/sejarah','SejarahController@update')->name('admin.a-sejarah');

	//Tuspoksi
	Route::get('/admin/tuspoksi', 'TuspoksiController@index')->name('a-tuspoksi');
	Route::get('/admin/tuspoksi/{id}/edit','TuspoksiController@edit')->name('edit_tuspoksi');
	Route::patch('/admin/tuspoksi', 'TuspoksiController@update')->name('admin.a-tuspoksi');
	//visimisi
	Route::get('/admin/visimisi', 'VisimisiController@index')->name('a-visimisi');
	Route::get('/admin/visimisi/{id}/edit','VisimisiController@edit')->name('edit_visimisi');
	Route::patch('/admin/visimisi', 'VisimisiController@update')->name('admin.a-visimisi');

	// buat test upload file excel
	Route::get('/admin/excel', 'ExcelController@index')->name('admin.excel-index');
	Route::get('/admin/excel/create', 'ExcelController@create')->name('admin.excel-create');
	Route::post('/admin/excel', 'ExcelController@store')->name('admin.excel-post');
	
});


Route::get('/', function()
{
	return view('welcome');
});

Auth::routes();


Route::get('/admin/logout', function()
{
	Auth::logout();
	return redirect('/login');
});



//Routes Website
Route::get('/d', function () {
    return view('website.home');
});

Route::get('/tatausaha', function (){
    return view('website.tatausaha');
});

Route::get('/peraturan', function (){
    return view('website.peraturan');
});

Route::get('/WebArtikel', function(){
	return view('website.artikel');
});

Route::get('/WebEnumerasi', function(){
	return view('website.enumerasi');
});

Route::get('/WebKph', function(){
	return view('website.kph');
});

Route::get('/WebOrganisasi', function(){
	return view('website.organisasi');
});

Route::get('/WebPcg', function(){
	return view('website.pcg');
});

Route::get('/WebPelepasan', function(){
	return view('website.pelepasan');
});

Route::get('/WebPemanfaatan', function(){
	return view('website.pemanfaatan');
});

Route::get('/WebPenggunaan', function(){
	return view('website.penggunaan');
});

Route::get('/WebTatabatas', function(){
	return view('website.tatabatas');
});

Route::get('/WebPpkh', function(){
	return view('website.ppkh');
});

Route::get('/WebSejarah', function(){
	return view('website.sejarah');
});

Route::get('/WebTuspoksi', function(){
	return view('website.tuspoksi');
});

Route::get('/WebVerifikasi', function(){
	return view('website.verifikasi');
});

Route::get('/WebVisimisi', function(){
	return view('website.visimisi');
});

Route::get('/WebWilayah', function(){
	return view('website.wilayah');
});

// buat belajar
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/artikels', 'artikelController@index');

//Kontak
Route::get('/contact', 'contactcontroller@index');
Route::get('/isdh', 'WebisdhController@index');
Route::get('/pkh', 'WebpkhController@index');

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
