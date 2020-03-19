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
    return view('welcome');
});


Route::get('/embed-zoom', function () {
    return view('embed-zoom');
})->name('embed-zoom');


Route::get('/meetings-list','MeetingsController@meetingsList')->name('meetings-list');


Route::get('/join-meeting','MeetingsController@getJoinMeeting');
Route::post('/joinMeeting','MeetingsController@JoinToMeeting')->name('joinToMeeting');
