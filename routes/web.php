<?php

// use Google\Service\Analytics;
use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;


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

    $analyticsData = Analytics::FetchVisitorsAndPageViews(Period::days(7));

    return view('welcome', ['analyticsData' => $analyticsData]);
});
