<?php
use App\Http\Controllers\Auth\SteamLoginController;
use kanalumaddela\LaravelSteamLogin\Facades\SteamLogin;
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

Route::get('login', 'Auth\SteamLoginController@login')->name('login.steam');
Route::get('auth/steam', 'Auth\SteamLoginController@authenticate')->name('auth.steam'); // callback route when returning from steam

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'Home\IndexController@index');
Route::get('products', 'Home\ProductController@index');


/*MIDDLEWARE STEAM AUTH*/
Route::group(['middleware' => ['SteamAuth']], function () {
	/*USER DASHBOARD*/
	Route::prefix('user')->group(function () {
		Route::get('{user}/profile', 'User\IndexController@profile');
		Route::get('{user}/purchases', 'User\IndexController@purchases');
		Route::get('{user}/addons', 'User\IndexController@addons');
		Route::get('{user}/wishlist', 'User\IndexController@wishlist');
		Route::get('{user}/reputation', 'User\IndexController@reputation');
		Route::get('{user}/tweets', 'User\IndexController@tweets');
		Route::get('{user}/threads', 'User\IndexController@threads');
		Route::get('{user}/blocked', 'User\IndexController@blocked');
		Route::get('{user}/blocked', 'User\IndexController@jobs');
		Route::get('{user}/settings', 'User\IndexController@settings');
	});
	/*END USER DASHBOARD*/

	/*ADMIN DASHBOARD MIDDLEWARE*/
	Route::group(['middleware' => ['SteamAuth']], function () {
		Route::get('dashboard', 'Dashboard\IndexController@index');
	});
	/*END ADMIN DASHBOARD MIDDLEWARE*/
});
/*END STEAM AUTH*/

