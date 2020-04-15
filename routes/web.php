<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Auth::routes();

// Main routes
Route::resource('/', 'WelcomeController');
Route::resource('home', 'HomeController');

// Page dir routes
Route::resource('about', 'AboutController');
Route::resource('faq', 'FaqController');
Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::resource('contact', 'ContactController');
Route::resource('nk-rules', 'NkRulesController');
Route::resource('gamerules', 'GameRulesController');


// UserDashboard routes
Route::resource('usersdashboard', 'UserController');
Route::get('/verify', 'UserController@verify')->name('verify');
Route::put('/verify_score', 'UserController@verifyScore')->name('verify_score');
Route::get('/gameSchedule', 'UserController@gameSchedule')->name('gameSchedule');

Route::resource('nieuwsfeed', 'NewNewsfeedController');
Route::post('countdown', 'DashboardController@response');

Route::get('/leaderboard', 'ScoreController@index')->name('leaderboard');

// Dashboard Routes
Route::resource('dashboard', 'DashboardController');
Route::resource('scoreinput', 'ScoresInputController');
Route::resource('rounds', 'RoundController');
Route::resource('players', 'PlayersController');
Route::resource('judges', 'JudgesController');
Route::resource('privileges', 'PrivilegesController');
Route::resource('checkin', 'CheckInController');

// News/Blog Routes
Route::resource('nieuwsfeed', 'NewNewsfeedController');
Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');

// Table arrangement Routes
Route::resource('tablearrangement', 'TableArrangementController');

Route::group(['prefix' => '{round}'], function () {
    Route::post('/arrangefirstround', 'TableArrangementController@arrangeStartingRound')->name('arrangeStartingRound');
    Route::delete('/deleteAllTables', 'TableArrangementController@deleteAllTables')->name('deleteAllTables');
    Route::post('/arrangeround', 'TableArrangementController@arrangeRound')->name('arrangeRound');
});

Route::post('/arrangebracketround', 'TableArrangementController@arrangeBracketRound')->name('arrangeBracketRound');

