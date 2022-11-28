<?php

use App\Models\education;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\UserDetailController;

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
    return view('main');
});

Route::get('user-detail/create',[UserDetailController::class,'create'])->name('user-detail.create');
Route::post('user-detail',[UserDetailController::class,'store']);

Route::get('education/create',[EducationController::class,'create'])->name('education.create');
Route::post('education',[EducationController::class,'store']);

Route::get('experience/create',[ExperienceController::class,'create'])->name('experience.create');
Route::post('experience',[ExperienceController::class,'store']);

Route::get('skill/create',[SkillController::class,'create'])->name('skill.create');
Route::post('skill',[SkillController::class,'store']);

Route::get('user-liste',[UserDetailController::class,'index']);

Route::get('resume',[ResumeController::class,'index'])->middleware('anth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
