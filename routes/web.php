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
Route::get('/',function(){
    return redirect('home');
});
Route::get('/home', 'HomeController@index');

Route::get('/project','AboutController@project');

Route::get('/locations','AboutController@location');

Route::get('/governance-and-transparency',function () {
    return view('about.governance-and-transparency');
});

Route::get('/innovations-and-technologies',function () {
    return view('about.innovations-and-technologies');
});

Route::get('collaborations-and-partnerships',function () {
    return view('about.collaborations-and-partnerships');
});

Route::get('testimonials',function () {
    return view('about.testimonials');
});

Route::get('governing-council','ProjectManagementController@governingCouncil');

Route::get('management-board','ProjectManagementController@managementBoard');

Route::get('core-team','ProjectManagementController@coreTeam');

Route::get('challenges','ChallengeController@index');

Route::get('gallery','GalleryController@index');

Route::get('sponsor_us','SponsorController@index');
Route::post('sponsor_us/sponsor_org','SponsorController@create');

Route::get('contact_us',function () {
    return view('contact_us.index');
});

