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


//認証に関わる物を使う
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'ItemsController@showHome')->name('showhome');
Route::get('/agreement', 'TopController@showAgreement')->name('agreement');
Route::get('/register/convini', 'TopController@showConviniRegister')->name('register.convini');
Route::get('/register/user', 'TopController@showUserRegister')->name('register.user');
Route::get('/login/convini', 'TopController@showConvinilogin')->name('login.convini');
Route::get('/login/user', 'TopController@showUserLogin')->name('login.user');
Route::get('/search', 'ItemsController@showSearch')->name('Search');
Route::get('/itemdetail/{id}', 'ItemsController@showItemdetail')->name('itemdetail');




//ログイン必要
// Route::group(['middleware' => 'auth'], function () {
    Route::get('/mypage', 'ItemsController@showMypage')->name('mypage');
    Route::get('/mypage-items', 'ItemsController@showMypage')->name('mypage');//マイページでSPA表示に使用
    Route::get('/mypage-solditems', 'ItemsController@showMypage')->name('mypage');//マイページでSPA表示に使用
    
    Route::get('/mypage/profile', 'UsersController@showProfile')->name('mypage.profile');
    Route::post('/mypage/profile', 'UsersController@editProfile')->name('mypage.edit');
    Route::get('/mypage/item', 'ItemsController@newItem')->name('mypage.item');
    Route::post('/mypage/item', 'ItemsController@editItem')->name('item.edit');
    Route::get('/mypage/itemlist', 'ItemsController@showItemlist')->name('mypage.itemlist');
    Route::get('/mypage/itemlist-soldout', 'ItemsController@showItemlistSoldOut')->name('mypage.itemlist-soldout');
    Route::post('/item/delete', 'ItemsController@deleteItem')->name('item.delete');//TODO:id必要
// });
