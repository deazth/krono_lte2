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

Route::redirect('/', '/login');
Auth::routes(['register' => false]);

// Route::get('/', 'MiscController@index')->name('misc.index');
Route::group(['middleware' => ['auth']], function () {

  Route::get('/home', 'MiscController@home')->name('misc.home');
  Route::get('/role', 'RoleController@index')->name('role.index');

  // clock-in related
  Route::get('/punch',      'MiscController@showPunchView')->name('punch.list');
  Route::post('/punch/in',  'MiscController@doClockIn')->name('punch.in');
  Route::post('/punch/out', 'MiscController@doClockOut')->name('punch.out');


//Company
Route::get( '/admin/companies','CompanyController@show')->name('company.show');
Route::post('/admin/company/add','CompanyController@store')->name('company.store');
Route::get( '/admin/Company/list','CompanyController@list')->name('company.list');
Route::post('/admin/company/destroy','CompanyController@destroy')->name('company.destroy');
Route::post( '/admin/company/update','CompanyController@update')->name('company.update');

//test

  // admins ------------------------------------
  // Route::get('/admin/shift_pattern', 'ShiftPatternController@index')->name('sp.index');
  // Route::post('/admin/shift_pattern/add', 'ShiftPatternController@addShiftPattern')->name('sp.add');
  // Route::post('/admin/shift_pattern/detail', 'ShiftPatternController@viewSPDetail')->name('sp.view');



  // /admins ------------------------------------
  Route::get('/admin/cda', 'TempController@loadDummyUser')->name('temp.cda');

  //start state admin
  Route::post('/admin/state/store'    ,'Admin\StateController@store'    )->name('state.store');
  Route::get( '/admin/restState'      ,'Admin\StateController@list'     )->name('state.list');
  Route::post('/admin/state/destroy'  ,'Admin\StateController@destroy'  )->name('state.destroy');
  Route::get( '/admin/state/show'     ,'Admin\StateController@show'   )->name('state.show');
  Route::post( '/admin/state/update'  ,'Admin\StateController@update'   )->name('state.update');
  //end state admin

  //List staff
  Route::get('/staff/list', 'MiscController@listStaff')->name('staff.list');
  Route::get('/staff/search', 'MiscController@searchStaff')->name('staff.search');
  Route::post('/staff/search', 'MiscController@doSearchStaff')->name('staff.dosearch');


});
