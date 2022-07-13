<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth:web'], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('allusers', [App\Http\Controllers\UserController::class, 'allusers'])->name('allusers');
    Route::get('allhrusers', [App\Http\Controllers\UserController::class, 'allhrusers'])->name('allhrusers');

    Route::get('all-admin-users', [App\Http\Controllers\UserController::class, 'alladminusers'])->name('alladminusers');
    Route::get('all-admin-hr-users', [App\Http\Controllers\UserController::class, 'alladminhrusers'])->name('alladminhrusers');

    Route::get('useredit/{id}', [App\Http\Controllers\UserController::class, 'useredit'])->name('useredit/{id}');
    Route::post('userupdate', [App\Http\Controllers\UserController::class, 'userupdate'])->name('userupdate');
    Route::get('userdelete/{id}', [App\Http\Controllers\UserController::class, 'userdelete'])->name('userdelete/{id}');
    Route::post('store', [App\Http\Controllers\UserController::class, 'store'])->name('store');
    Route::post('admin-store', [App\Http\Controllers\UserController::class, 'adminstore'])->name('adminstore');
    Route::get('createrecord', [App\Http\Controllers\RecordController::class, 'createrecord'])->name('createrecord');
    Route::post('storerecord', [App\Http\Controllers\RecordController::class, 'storerecord'])->name('storerecord');
    Route::get('allrecord', [App\Http\Controllers\RecordController::class, 'allrecord'])->name('allrecord');
    Route::get('all-hr-record', [App\Http\Controllers\RecordController::class, 'allhrrecord'])->name('allhrrecord');
    Route::get('recordedit/{id}', [App\Http\Controllers\RecordController::class, 'editrecord'])->name('recordedit/{id}');
    Route::post('updateerecord', [App\Http\Controllers\RecordController::class, 'updaterecord'])->name('updateerecord');
    Route::get('recorddelete/{id}', [App\Http\Controllers\RecordController::class, 'deleterecord'])->name('recorddelete/{id}');
    Route::get('data', [App\Http\Controllers\DataController::class, 'data'])->name('data');
    Route::post('monthdata', [App\Http\Controllers\DataController::class, 'store'])->name('monthdata');
    Route::get('allmonthlydatachange', [App\Http\Controllers\DataController::class, 'allmonthlydatachange'])->name('allmonthlydatachange');
    Route::get('monthlydatachangeedit/{id}', [App\Http\Controllers\DataController::class, 'monthlyedit'])->name('monthlydatachangeedit/{id}');
    Route::post('monthdataupdate', [App\Http\Controllers\DataController::class, 'monthlyupdate'])->name('monthdataupdate');
    Route::get('monthlydatachangedelete/{id}', [App\Http\Controllers\DataController::class, 'monthlydelete'])->name('monthlydatachangedelete/{id}');
    Route::get('createyearlydatachange', [App\Http\Controllers\DataController::class, 'createyearlydatachange'])->name('createyearlydatachange');
    Route::post('storeyearlydatachange', [App\Http\Controllers\DataController::class, 'storeyearlydatachange'])->name('storeyearlydatachange');
    Route::get('allyearlydatachange', [App\Http\Controllers\DataController::class, 'allyearlydatachange'])->name('allyearlydatachange');
    Route::get('yearlydatachangeedit/{id}', [App\Http\Controllers\DataController::class, 'yearlyedit'])->name('yearlydatachangeedit/{id}');
    Route::post('updateyearlydatachange', [App\Http\Controllers\DataController::class, 'yearlyupdate'])->name('updateyearlydatachange');
    Route::get('yearlydatachangedelete/{id}', [App\Http\Controllers\DataController::class, 'yearlydelete'])->name('yearlydatachangedelete/{id}');
    Route::get('jobno/{job}', [App\Http\Controllers\RecordController::class, 'jobno'])->name('jobno/{job}');

    Route::get('/export-tasks', [App\Http\Controllers\RecordController::class, 'exportcsv'])->name('export-tasks');
    Route::get('/export-tasks-admin', [App\Http\Controllers\RecordController::class, 'exportcsvadmin'])->name('export-tasks-admin');
    Route::post('/import-tasks', [App\Http\Controllers\RecordController::class, 'importcsv'])->name('import-tasks');
    Route::get('getpdf/{job_id}', [App\Http\Controllers\RecordController::class, 'getpdf'])->name('getpdf/{job_id}');

    Route::get('/user-profile-active/{id}', [App\Http\Controllers\UserController::class, 'profile1']);
    Route::get('/user-profile-block/{id}', [App\Http\Controllers\UserController::class, 'profile0']);
});
