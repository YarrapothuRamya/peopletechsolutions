<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', [App\Http\Controllers\PeoplesController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PeoplesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PeoplesController::class, 'contact'])->name('contact');
Route::get('/industries', [App\Http\Controllers\PeoplesController::class, 'industries'])->name('industries');

Route::get('/service', [App\Http\Controllers\PeoplesController::class, 'service'])->name('service');
Route::get('/workday', [App\Http\Controllers\PeoplesController::class, 'workday'])->name('workday');
Route::get('/salesforce', [App\Http\Controllers\PeoplesController::class, 'salesforce'])->name('salesforce');
Route::get('/peoplesoft', [App\Http\Controllers\PeoplesController::class, 'peoplesoft'])->name('peoplesoft');
Route::get('/mulesoft', [App\Http\Controllers\PeoplesController::class, 'mulesoft'])->name('mulesoft');
Route::get('/ukgkronos', [App\Http\Controllers\PeoplesController::class, 'ukgkronos'])->name('ukgkronos');
Route::get('/uipath', [App\Http\Controllers\PeoplesController::class, 'uipath'])->name('uipath');
Route::get('/clouddata', [App\Http\Controllers\PeoplesController::class, 'clouddata'])->name('clouddata');
Route::get('/infrastructure', [App\Http\Controllers\PeoplesController::class, 'infrastructure'])->name('infrastructure');
Route::get('/migration', [App\Http\Controllers\PeoplesController::class, 'migration'])->name('migration');
Route::get('/modernization', [App\Http\Controllers\PeoplesController::class, 'modernization'])->name('modernization');
Route::get('/analytics', [App\Http\Controllers\PeoplesController::class, 'analytics'])->name('analytics');
Route::get('/ai', [App\Http\Controllers\PeoplesController::class, 'ai'])->name('ai');
Route::get('/aienablement', [App\Http\Controllers\PeoplesController::class, 'aienablement'])->name('aienablement');
Route::get('/iot', [App\Http\Controllers\PeoplesController::class, 'iot'])->name('iot');
Route::get('/humanmachineinterface', [App\Http\Controllers\PeoplesController::class, 'humanmachineinterface'])->name('humanmachineinterface');
Route::get('/ux', [App\Http\Controllers\PeoplesController::class, 'ux'])->name('ux');
Route::get('/mvpdevelopment', [App\Http\Controllers\PeoplesController::class, 'mvpdevelopment'])->name('mvpdevelopment');
Route::get('/accessibility', [App\Http\Controllers\PeoplesController::class, 'accessibility'])->name('accessibility');
Route::get('/qaandvalidation', [App\Http\Controllers\PeoplesController::class, 'qaandvalidation'])->name('qaandvalidation');
Route::get('/mobile', [App\Http\Controllers\PeoplesController::class, 'mobile'])->name('mobile');
Route::get('/datacenters', [App\Http\Controllers\PeoplesController::class, 'datacenters'])->name('datacenters');
Route::get('/applicationdevelopment', [App\Http\Controllers\PeoplesController::class, 'applicationdevelopment'])->name('applicationdevelopment');
Route::get('/cloudservices', [App\Http\Controllers\PeoplesController::class, 'cloudservices'])->name('cloudservices');
Route::get('/dataplatform', [App\Http\Controllers\PeoplesController::class, 'dataplatform'])->name('dataplatform');
Route::get('/security', [App\Http\Controllers\PeoplesController::class, 'security'])->name('security');
Route::get('/bigdata', [App\Http\Controllers\PeoplesController::class, 'bigdata'])->name('bigdata');
Route::get('/machinelearning', [App\Http\Controllers\PeoplesController::class, 'machinelearning'])->name('machinelearning');
Route::get('/cloudmigration', [App\Http\Controllers\PeoplesController::class, 'cloudmigration'])->name('cloudmigration');
Route::get('/devopsautomation', [App\Http\Controllers\PeoplesController::class, 'devopsautomation'])->name('devopsautomation');
Route::get('/databasemigration', [App\Http\Controllers\PeoplesController::class, 'databasemigration'])->name('databasemigration');
Route::get('/dataanalytics', [App\Http\Controllers\PeoplesController::class, 'dataanalytics'])->name('dataanalytics');

