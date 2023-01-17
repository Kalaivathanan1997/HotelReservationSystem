<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RoleController;
use App\Http\Controller\PermissionController;
use App\Http\Controller\userController;
use App\Http\Controllers\CustomerLoginController;
use App\Models\Room;
use App\Models\Booking;

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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();



Route::group(['middleware'=>['auth']],function(){
    Route::get('/', function () {
        return view('welcome');
    });

Route::resource('roles', RoleController::class);
Route::resource('users', 'userController');
Route::resource('permissions', 'PermissionController');
Route::resource('rooms', 'RoomController');
Route::resource('tests', 'testController');
Route::resource('customerss', 'CustomerController');
Route::resource('bookings', 'BookingController');
Route::resource('payments', 'PaymentController');

Route::post('/payments/billing', 'PaymentController@billing')->name('payments.billing');
Route::get('/payment/report', 'PaymentController@report')->name('payments.report');
Route::get('/customer/report', 'CustomerController@report')->name('customers.report');
Route::get('/booking/report', 'BookingController@report')->name('bookings.report');



});

Route::resource('customerviews', 'CustomerLoginController');

Route::post('ajaxRequest', [CustomerLoginController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::post('customerLoginTestPost', [CustomerLoginController::class, 'CustomerLogin'])->name('customerLogin.post');
Route::post('customerLogoutTestPost', [CustomerLoginController::class, 'CustomerLogout'])->name('customerLogout.post');
Route::post('CustomerRoomBooking', [CustomerLoginController::class, 'CustomerRoomBooking'])->name('CustomerRoomBooking.post');
Route::get('Customer/BookingDetails/{id}', [CustomerLoginController::class, 'BookingDetails'])->name('CustomerRoomBooking.get');
Route::get('Customer/BookingDetailEdit/{id}', [CustomerLoginController::class, 'BookingDetailEdit'])->name('RoomBookingEdit.get');
Route::patch('Customer/BookingDetailStore/{id}', [CustomerLoginController::class, 'BookingDetailStore'])->name('RoomBookingStore.patch');

Route::get('customerview/roomdetail/{id}', [CustomerLoginController::class, 'show'])->name('customerview.roomdetail');

Route::get('customerview/rooms', function () {
    $rooms= Room ::All();
    $booking = Booking:: All();
    return view('customer.room',compact('rooms','booking'));
    });


Route::get('customerview/room-details', function () {  return view('customer.roomdetail');  });
Route::get('customerview/about', function () {  return view('customer.about');  });
Route::get('customerview/contact', function () { return view('customer.contact'); });
Route::get('customerview/404', function () { return view('customer.404'); });
