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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });
Route::resource('/', 'IndexController');
Route::resource('logout', 'LogoutController');

/*layout*/ 
Route::get('/layoutadmin',function(){
	return view('site.layoutadmin');
});
Route::get('/Loginadmin',function(){
	return view('site.layoutloginadmin');
});

// Route::get('/layoutuser',function(){
// 	return view('site.layoutuser');
// });

Route::resource('layoutuser', 'LayoutuserController');


/* ==================admin=====================*/
Route::resource('Pray', 'PrayController');

Route::get('/PrayAdminAdd', function () {
    return view('Admin.PrayAdminAdd');
});
Route::get('/Praydeletefile/{id}','PrayController@deletepray');
Route::get('/Praydeletesound/{id}','PrayController@deletesound');



Route::resource('Place', 'PlaceController');
Route::get('/Placepicdelete/{id}','PlaceController@deletepic');
Route::get('/PlaceadminAdd', function () {
    return view('Admin.PlaceAdminAdd');
});



Route::resource('Ebook1', 'EbookController');
Route::get('/Ebookdelete/{id}','EbookController@deletefile');
Route::get('/EbookadminAdd', function () {
    return view('Admin.EbookadminAdd');
});




Route::resource('Guest', 'GuestbookController');



Route::resource('Gallery', 'GalleryController');
Route::get('/Gallerydelete/{id}','GalleryController@deletepic');





Route::resource('Sacred', 'SacredController');
Route::get('/Sacredpicadmin/{id}','SacredpicController@index')->name('addsacred');
Route::delete('/Sacredpic/{id}','SacredpicController@destroy');
Route::get('/SacredadminAdd', function () {
    return view('Admin.SacredadminAdd');
});
Route::post('/Sacredtype','SacredController@createtype');
Route::get('/Subpicsacred/{id}/create', 'SacredpicController@createpic');
Route::resource('Subpicsacred', 'SacredpicController@store');
Route::get('Sacredtype/{id}/edit', 'SacredController@edittype');
Route::get('Sacred/{id}', 'SacredController@update');
Route::post('/Sacredtypedelete','SacredController@deletetype');
Route::get('/Sacredpicdelete/{id}','SacredController@deletepic');


Route::resource('Worship', 'WorshipController');
Route::get('/Worshippicadmin/{id}','WorshippicController@index')->name('add');
Route::get('/Worshippicdelete/{id}','WorshipController@deletepic');
Route::get('/SubWorshippicdelete/{id}','WorshippicController@deletesubpic');
Route::delete('/Worshippic/{id}','WorshippicController@destroy');
Route::get('/WorshipadminAdd', function () {
    return view('Admin.WorshipadminAdd');
});
Route::get('/Subpicworship/{id}/create', 'WorshippicController@createpic');
Route::resource('Subpicworship', 'WorshippicController@store');
// Route::get('/Worshippicadmin/{id}','WorshippicController@index');
// Route::resource('/Worshippicsub/{id}','WorshippicController');
// Route::get('/Subpicworship', function () {
//   return view('Admin.Subpicworship');
// });

// Route::get('/Worshippicadmin/{id}/create','WorshippicController@index');


// Route::get('/Subpicworship', function () {
//     return view('Admin.Subpicworship');
// });




Route::resource('Kingpin', 'KingpinController');
Route::get('/Kingpinpicadmin/{id}','KingpinpicController@index')->name('addkingpin');
Route::get('/Kingpinpicdelete/{id}','KingpinController@deletepic');
Route::delete('/Kingpinpic/{id}','KingpinpicController@destroy');
Route::get('/KingpinadminAdd', function () {
    return view('Admin.KingpinadminAdd');
});
Route::get('/Subpickingpin/{id}/create', 'KingpinpicController@createpic');
Route::resource('Subpickingpin', 'KingpinpicController@store');
Route::post('/Kingpintype','KingpinController@createtype');
Route::post('/Kingpintypedelete','KingpinController@deletetype');


Route::resource('Activity', 'ActivityController');
Route::get('/Activitypicadmin/{id}','ActivitypicController@index')->name('addactivity');
Route::delete('/Activitypic/{id}','ActivitypicController@destroy');
Route::get('/Activitypicdelete/{id}','ActivityController@deletepic');
Route::get('/ActivityadminAdd', function () {
    return view('Admin.ActivityadminAdd');
});
Route::get('/Subpicactivity/{id}/create', 'ActivitypicController@createpic');
Route::post('Subpicactivity', 'ActivitypicController@store');




Route::resource('News', 'NewsController');
Route::get('/Newspicadmin/{id}','NewspicController@index')->name('addnews');
Route::get('/Newspicdelete/{id}','NewsController@deletepic');
Route::get('/Newsfiledelete/{id}','NewsController@deletefile');
Route::delete('/Newspic/{id}','NewspicController@destroy');
Route::get('/NewsAdd', function () {
    return view('Admin.News');
});
Route::get('/NewsadminAdd', function () {
    return view('Admin.NewsadminAdd');
});
Route::get('/Subpicnews/{id}/create', 'NewspicController@createpic');
Route::post('Subpicnews', 'NewspicController@store');





Route::resource('Directory', 'DirectoryController');
Route::get('/Directorypicadmin/{id}','DirectorypicController@index')->name('adddirectory');
Route::get('/Directorypicdelete/{id}','DirectoryController@deletepic');
Route::delete('/Directorypic/{id}','DirectorypicController@destroy');
Route::get('/DirectoryadminAdd', function () {
    return view('Admin.DirectoryadminAdd');
});
Route::get('/Subpicdirectory/{id}/create', 'DirectorypicController@createpic');
Route::post('Subpicdirectory', 'DirectorypicController@store');



Route::resource('Loginadmin', 'AdloginController');
Route::post('/login','AdloginController@login');
// Route::get('/Loginadmin', function () {
//     return view('Admin.Loginadmin');
// });





Route::get('/Personpicdelete/{id}','PersonsController@deletepic');
Route::resource('Persons', 'PersonsController');
Route::get('/PersonsadminAdd', function () {
    return view('Admin.PersonsadminAdd');
});




/* ==========================user=============================*/

Route::resource('Guestbookuser', 'GuestbookuserController');


Route::resource('ActivityMainUser', 'ActivitymainuserController');
// Route::get('/ActivityUser', function () {
//     return view('User.ActivityUser');
// });


Route::resource('NewsMainUser', 'NewsmainuserController');
Route::get('NewsMainUser/{id}', 'NewsmainuserController@show');
// Route::get('/NewsUser', function () {
//     return view('User.NewsUser');
// });


Route::resource('PrayMainUser', 'PraymainuserController');
// Route::get('/PrayUser', function () {
//     return view('User.PrayUser');
// });

// Route::resource('/EbookMainUser', 'EbookmainuserController');


Route::resource('KingpinMainUser', 'KingpinmainuserController');

// Route::get('/KingpinUser/{id}','KingpinuserController@index');
// Route::get('/KingpinUser/{id}','KingpinuserController@index');

/*
Route::get('/KingpinUser', function () {
    return view('User.KingpinUser');
});
*/



Route::resource('WorshipMainUser','WorshipmainuserController');

// Route::get('/WorshipUser/{id}','WorshipuserController@index');
// Route::get('/WorshipUser', function () {
//     return view('User.WorshipUser');
// });





// Route::resource('SacredMainUser', 'SacredmainuserController');
// Route::get('/SacredUser', function () {
//     return view('User.SacredUser');
// });
Route::resource('SacredTypeUser', 'SacredtypeuserController');
Route::get('SacredTypeUser/{id}', 'SacredtypeuserController@show');
Route::get('SacredMainUser/{id}', 'SacredmainuserController@show');




Route::resource('KingpinTypeUser', 'KingpintypeuserController');
Route::get('KingpinTypeUser/{id}', 'KingpintypeuserController@show');
Route::get('KingpinMainUser/{id}', 'KingpinmainuserController@show');

Route::resource('DirectoryMainUser', 'DirectorymainuserController');
Route::get('/DirectoryUser', function () {
    return view('User.DirectoryUser');
});



Route::resource('PlaceUser', 'PlaceuserController');
Route::resource('PersonsUser', 'PersonsuserController');



Route::get('/MapUser', function () {
    return view('User.MapUser');
});



Route::resource('GalleryUser', 'GalleryuserController');



Route::get('/Ebookforuser', function () {
    return view('User.Ebookforuser');
});



Route::get('/Developer', function () {
    return view('User.Developer');
});

Route::get('/History', function () {
    return view('User.History');
});