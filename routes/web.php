<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\COPSController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResearcherController;

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
    // return view('welcome');
    return view('index');
})->name('/');
Route::get('researchers', [ResearcherController::class, 'index'])->name('researchers');
Route::get('detail_researcher/{id}', [ResearcherController::class, 'detailResearcher'])->name('detail_researcher');

Route::get('cops', [COPSController::class, 'index'])->name('cops');
Route::get('cops_detail/{id}', [COPSController::class, 'copsDetail'])->name('cops_detail');
Route::get('cops_pdf/{name}', [COPSController::class, 'streamPdf'])->name('cops_pdf');
Route::post('cops_join_community', [COPSController::class, 'joinCommunity'])
    ->middleware(['role:student', 'permission:create communities_of_practice', 'auth'])
    ->name('cops_join_community');
Route::get('cops_community_group/{id}', [COPSController::class, 'copsGroup'])
    ->middleware(['role:student', 'permission:read communities_of_practice', 'auth'])
    ->name('cops_community_group');

Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::get('project_detail/{id}', [ProjectController::class, 'projectDetail'])->name('project_detail');
