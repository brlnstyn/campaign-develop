<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DashboardController;
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
    return view('auth.login');
});

Route::get('form-login', [AuthController::class, 'formlogin'])->name('form-login');
Route::post('login', [AuthController::class, 'storeLogin'])->name('login');
Route::get('form-register', [AuthController::class, 'formRegister'])->name('form-register');
Route::post('register', [AuthController::class, 'storeRegister'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' =>['auth']],  function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('database', DatabaseController::class);

    Route::get('campaign', [CampaignController::class, 'index'])->name('campaign.index');
    Route::get('campaign/create-step-one', [CampaignController::class, 'createStepOne'])->name('campaign.create.step.one');
    Route::post('campaign/create-step-one', [CampaignController::class, 'postCreateStepOne'])->name('campaign.create.step.one.post');

    Route::get('campaign/create-step-two', [CampaignController::class, 'createSteptwo'])->name('campaign.create.step.two');
    Route::post('campaign/create-step-two', [CampaignController::class, 'postCreateSteptwo'])->name('campaign.create.step.two.post');

    Route::get('campaign/create-step-three', [CampaignController::class, 'createStepthree'])->name('campaign.create.step.three');
    Route::post('campaign/create-step-three', [CampaignController::class, 'postCreateStepthree'])->name('campaign.create.step.three.post');

    Route::get('campaign/create-step-four', [CampaignController::class, 'createStepfour'])->name('campaign.create.step.four');
    Route::post('campaign/create-step-four', [CampaignController::class, 'postCreateStepfour'])->name('campaign.create.step.four.post');

    Route::post('import-file', [DatabaseController::class, 'import'])->name('import');
    Route::get('campaign/campaign', [CampaignController::class, 'campaign'])->name('campaign.campaign');
    Route::get('campaign/history', [CampaignController::class, 'history'])->name('campaign.history');
    Route::get('campaign/overview', [CampaignController::class, 'overview'])->name('campaign.overview');
});

