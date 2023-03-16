<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// rotta per avere la lista dei project
Route::get('/projects', [ProjectController::class, 'index']);

// tutte per il dettaglio del project
Route::get('/projects/{project}', [ProjectController::class, 'show']);

// rotta per il recupero dei project che appartengono ad un type
Route::get('/types/{id}/projects', [ProjectController::class, 'typeProjectsIndex']);



// tutte le rotte 
// Route::apiResource('projects', ProjectController::class);
