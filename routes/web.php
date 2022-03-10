<?php

use App\Http\Controllers\AddRentalHouse;
use App\Http\Controllers\AddSellHouse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeleteHouse;
use App\Http\Controllers\DeleteSellHouse;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LockScreen;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ExpenseReportsController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\UpdateHouse;
use App\Http\Controllers\UpdateSellHouse;
use App\Http\Controllers\ViewHouseDetailController;
use App\Http\Controllers\ViewRenter;
use App\Http\Controllers\ViewSellDetailController;
use App\Http\Controllers\ViewSeller;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- main dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('em/dashboard', [App\Http\Controllers\HomeController::class, 'emDashboard'])->name('em/dashboard');


// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [App\Http\Controllers\LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [App\Http\Controllers\LockScreen::class, 'unlock'])->name('unlock');


//view renter

Route::get('/view/renter',[ViewRenter::class,'index'])->name('viewRenter');
Route::get('/view/houseDetail/{id}',[ViewHouseDetailController::class,'index'])->name('viewHouseDetail');
Route::get('/view/houseDetailn/{id}',[ViewHouseDetailController::class,'index2'])->name('viewHouseDetail');
Route::get('/house/delete/{id}',[DeleteHouse::class,'index']);
Route::get('/house/permanentlydelete/{id}',[DeleteHouse::class,'pdelete']);
Route::get('/house/restore/{id}',[DeleteHouse::class,'restoreDelete']);
Route::get('/house/update/{id}',[UpdateHouse::class,'index']);
Route::post('/house/submit/{id}',[UpdateHouse::class,'update']);
Route::post('house/updat/{id}',[UpdateHouse::class,'update']);
Route::get('/house/add',[AddRentalHouse::class,'index'])->name('addrentalhouse');
Route::post('/house/submit',[AddRentalHouse::class,'insertHouse']);


//view seller
Route::get('/view/seller',[ViewSeller::class,'index'])->name('viewSeller');
Route::get('/view/sellDetail/{id}',[ViewSellDetailController::class,'index'])->name('viewSellDetail');
Route::get('/view/sellDetaild/{id}',[ViewSellDetailController::class,'index2'])->name('viewSellDetail');
Route::get('/house/updatesell/{id}',[UpdateHouse::class,'index2']);
Route::get('/sellhouse/delete/{id}',[DeleteSellHouse::class,'index']);
Route::get('/sellhouse/permanentlydelete/{id}',[DeleteSellHouse::class,'pdelete']);
Route::get('/sellhouse/restore/{id}',[DeleteSellHouse::class,'restoreDelete']);
Route::get('/sellhouse/update/{id}',[UpdateSellHouse::class,'index']);
Route::post('/sellhouse/submit/{id}',[UpdateSellHouse::class,'update']);
Route::get('/sellhouse/add',[AddSellHouse::class,'index'])->name('addsellhouse');
Route::post('/sellhouse/submit',[AddSellHouse::class,'insertHouse']);


Route::get('add/customer/',[CustomerController::class,'index'])->name('addcustomer');
Route::post('add/customer/new',[CustomerController::class,'addcustomer']);
Route::get('/view/customer',[CustomerController::class,'viewCustomer'])->name('viewcustomer');
