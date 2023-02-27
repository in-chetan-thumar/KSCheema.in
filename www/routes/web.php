<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\Admin\DashBoardController::class, 'lang']);

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/our-company', [App\Http\Controllers\FrontController::class, 'ourCompany'])->name('ourcompany');
Route::get('/media', [App\Http\Controllers\FrontController::class, 'media'])->name('media');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\FrontController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/mercedes-benz-central-star', [App\Http\Controllers\FrontController::class, 'mercedesBenzCentralStar'])->name('mercedes.benz.central.star');
Route::get('/ather', [App\Http\Controllers\FrontController::class, 'ather'])->name('ather');
Route::get('/car-wale', [App\Http\Controllers\FrontController::class, 'carWale'])->name('car.wale');
Route::get('/altigreen', [App\Http\Controllers\FrontController::class, 'altigreen'])->name('altigreen');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashBoardController::class, 'root'])->name('root');

    // User Profile Controller
    Route::resource('profiles', \App\Http\Controllers\Admin\UserProfileController::class);
    Route::get('/profile', [\App\Http\Controllers\Admin\UserProfileController::class, 'index'])->name('profile.index');
    Route::post('/change/password', [\App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('change.password');

    // User Controller Route
    Route::resource('usermanagements', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/usermanagement/status/{id}', [\App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('usermanagements.status');

    // Email Template Controller
    Route::resource('emailtemplates', \App\Http\Controllers\Admin\EmailTemplateController::class);
    Route::get('/email-template', [\App\Http\Controllers\Admin\EmailTemplateController::class, 'index'])->name('emailtemplate.index');

    // Role Controller
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\RoleController::class, 'changeStatus'])->name('role.status');
    // News Controller
    Route::resource("news", \App\Http\Controllers\Admin\NewsController::class);
    // Pagelist Controller
    Route::resource('page', \App\Http\Controllers\Admin\PageController::class);

});
