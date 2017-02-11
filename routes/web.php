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

Route::get('/{id}', 'NetworkController@verifyNetwork');



/*
 * User login
 * User sign up
 * User change Password
 * User forgot Password
 * Delete(soft) account
 * User can use tha app as a guest, but he can't upload a new key
 */
//Route::resource('user', 'UserController');

/*
 * addNetwork
 * editNetwork/:net_id
 * removeNetwork/:net_id
 * verifyNetwork/:id //If the key is working (from Notifications)
 * myNetworks
 * network/:net_id -> no auth
 * allNetworks -> no auth
 *
 */
//Route::resource('network', 'NetworkController');
