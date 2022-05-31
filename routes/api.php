<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MenuController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

	//get Events with Workshopdata as per question
	Route::get('/getEventsWithWorkshops' , [EventsController::class,'getEventsWithWorkshops']);
	//get Menu with menu-items as per question
	Route::get('/menu' , [MenuController::class,'getMenuItems']);
	


