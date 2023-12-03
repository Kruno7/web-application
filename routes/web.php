<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => [\Spatie\Permission\Middleware\RoleMiddleware::using('admin')]], function () {
    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');

    Route::get('/city',        [App\Http\Controllers\Admin\CityController::class, 'index'])->name('admin.city.index');
    Route::get('/city/create', [App\Http\Controllers\Admin\CityController::class, 'create'])->name('admin.city.create');
    Route::post('/city/store', [App\Http\Controllers\Admin\CityController::class, 'store'])->name('admin.city.store');

    Route::get('/apartment', [App\Http\Controllers\Admin\ApartmentController::class, 'index'])->name('admin.apartment.index');
    Route::get('/apartment/create', [App\Http\Controllers\Admin\ApartmentController::class, 'create'])->name('admin.apartment.create');
    Route::post('/apartment/store', [App\Http\Controllers\Admin\ApartmentController::class, 'store'])->name('admin.apartment.store');
});

Route::group(['prefix' => 'renter', 'middleware' => [\Spatie\Permission\Middleware\RoleMiddleware::using('renter')]], function () {
    Route::get('/apartment', [App\Http\Controllers\Renter\ApartmentController::class, 'index'])->name('renter.apartment.index');
    Route::get('/apartment/create', [App\Http\Controllers\Renter\ApartmentController::class, 'create'])->name('home.renter.create');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/apartment', [App\Http\Controllers\ApartmentController::class, 'index'])->name('user.apartment.index');

//Route::get('/home/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
/*Route::get('/home/city', [App\Http\Controllers\Admin\CityController::class, 'index'])->name('home.city.index');
Route::get('/home/city/create', [App\Http\Controllers\Admin\CityController::class, 'create'])->name('home.city.create');
Route::post('/home/city/store', [App\Http\Controllers\Admin\CityController::class, 'store'])->name('home.city.store'); */





//Route::get('/home/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->middleware('role:admin');



/*Route::middleware('role:admin')->get('/home/users', function () {
    return "OKKK";
}); */