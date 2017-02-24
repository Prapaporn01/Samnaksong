<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});



/*layout*/ 
Route::get('/layoutadmin',function(){
	return view('site.layoutadmin');
});

Route::get('/loginadmin',function(){
	return view('site.layoutloginadmin');
});

Route::get('/layoutuser',function(){
	return view('site.layoutuser');
});


/* ==================admin=====================*/
Route::resource('Pray', 'PrayController');

Route::get('/PrayAdminAdd', function () {
    return view('Admin.PrayAdminAdd');
});

Route::get('/Praydelete/{id}','PrayController@deletepray');

Route::resource('Place', 'PlaceController');

Route::get('/Placepicdelete/{id}','PlaceController@deletepic');

Route::get('/PlaceadminAdd', function () {
    return view('Admin.PlaceAdminAdd');
});



Route::resource('Guest', 'GuestbookController');

Route::resource('Ebook', 'EbookController');


Route::get('/EbookadminAdd', function () {
    return view('Admin.EbookadminAdd');
});

Route::resource('Sacred', 'SacredController');
Route::get('/Sacredpicadmin/{id}','SacredpicController@index');
Route::get('/Sacredpicdelete/{id}','SacredController@deletepic');
Route::delete('/Sacredpic/{id}','SacredpicController@destroy');
Route::get('/SacredadminAdd', function () {
    return view('Admin.SacredadminAdd');
});


Route::resource('Worship', 'WorshipController');
Route::get('/Worshippicadmin/{id}','WorshippicController@index');
Route::get('/Worshippicdelete/{id}','WorshipController@deletepic');

Route::delete('/Worshippic/{id}','WorshippicController@destroy');
Route::get('/WorshipadminAdd', function () {
    return view('Admin.WorshipadminAdd');
});


Route::resource('Kingpin', 'KingpinController');
Route::get('/Kingpinpicadmin/{id}','KingpinpicController@index');
Route::get('/Kingpinpicdelete/{id}','KingpinController@deletepic');

Route::delete('/Kingpinpic/{id}','KingpinpicController@destroy');

Route::get('/KingpinadminAdd', function () {
    return view('Admin.KingpinadminAdd');
});

Route::resource('Activity', 'ActivityController');
Route::get('/Activitypicadmin/{id}','ActivitypicController@index');
Route::delete('/Activitypic/{id}','ActivitypicController@destroy');

Route::get('/ActivityadminAdd', function () {
    return view('Admin.ActivityadminAdd');
});




Route::resource('News', 'NewsController');
Route::get('/Newspicadmin/{id}','NewspicController@index');
Route::get('/Newspicdelete/{id}','NewsController@deletepic');


Route::get('/NewsAdd', function () {
    return view('Admin.News');
});
Route::get('/NewsadminAdd', function () {
    return view('Admin.NewsadminAdd');
});
/*Route::get('/NewsAdd', function () {
    return view('Admin.News');
});*/


Route::resource('Directory', 'DirectoryController');
Route::get('/DirectoryadminAdd', function () {
    return view('Admin.DirectoryadminAdd');
});

Route::get('/Successadmin', function () {
    return view('Admin.Successadmin');
});

Route::get('/Loginadmin', function () {
    return view('Admin.Loginadmin');
});



Route::get('/Personpicdelete/{id}','PersonsController@deletepic');
Route::resource('Persons', 'PersonsController');
Route::get('/PersonsadminAdd', function () {
    return view('Admin.PersonsadminAdd');
});




/* ==========================user=============================*/

Route::resource('Guestbookuser', 'GuestbookuserController');

Route::resource('ActivityMainUser', 'ActivitymainuserController');


Route::get('/ActivityUser', function () {
    return view('User.ActivityUser');
});

Route::get('/NewsUser', function () {
    return view('User.NewsUser');
});

Route::resource('NewsMainUser', 'NewsmainuserController');

Route::resource('PrayMainUser', 'PraymainuserController');

Route::get('/PrayUser', function () {
    return view('User.PrayUser');
});

Route::resource('KingpinMainUser', 'KingpinmainuserController');


Route::get('/KingpinUser', function () {
    return view('User.KingpinUser');
});

Route::get('/WorshipUser', function () {
    return view('User.WorshipUser');
});

Route::resource('WorshipMainUser', 'WorshipmainuserController');

Route::resource('SacredMainUser', 'SacredmainuserController');

Route::get('/SacredUser', function () {
    return view('User.SacredUser');
});

Route::resource('SacredTypeUser', 'SacredtypeuserController');

Route::resource('DirectoryMainUser', 'DirectorymainuserController');


Route::get('/DirectoryUser', function () {
    return view('User.DirectoryUser');
});


Route::resource('PlaceUser', 'PlaceuserController');

Route::resource('PersonsUser', 'PersonsuserController');



