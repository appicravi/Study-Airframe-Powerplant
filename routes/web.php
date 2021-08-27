<?php

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

//databse-u175865466_scrubbing
//user-u175865466_scrubbing
//password-Developer@123

Route::get('/', function () {
    //return view('welcome');
	return view('suparAdmin.suparadminlogin');
});

// user routes 

Route::get('/user', function () {
        return view('users.home');
});
Route::get('/user/login', function () {
	return view('users.login');
});
Route::get('user/signup', function () {

    return view('users.signup');
});
Route::get('/booking',function(){
	return view('users.booking');
});

Route::get('checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('checkout','App\Http\Controllers\CheckoutController@afterpayment')->name('checkout.payment');

Route::get('action/checkout','App\Http\Controllers\CheckoutController@payment');

Route::post('/action/check', "App\Http\Controllers\customerController@locationCheck");
Route::get('user/cleaner-info','App\Http\Controllers\customerController@cleanerInfo');
Route::post('/action/register', "App\Http\Controllers\customerController@customerSignUp");
Route::post('/action/login', "App\Http\Controllers\customerController@customerLogin");
Route::post('/action/review', "App\Http\Controllers\customerController@customerReview");
Route::post('/action/reschedule', "App\Http\Controllers\customerController@customerReschedule");
Route::post('/action/contact', "App\Http\Controllers\customerController@customerInTouch");
Route::post('/action/change', "App\Http\Controllers\customerController@customerChange");

Route::get('action/password_reset','App\Http\Controllers\customerController@resetPassword');
Route::post('/user/password_reset','App\Http\Controllers\customerController@sendResetPasswordEmail');

Route::get('/user/new-password/{token}','App\Http\Controllers\customerController@enterPassword');

Route::post('/user/password_update','App\Http\Controllers\customerController@updatePassword');

Route::post('/actions/reschedule_booking', 'App\Http\Controllers\bookingController@changeReschedule');

Route::get('/action/booking_py','App\Http\Controllers\bookingController@saveBooking_py');

Route::get('/user/payment','App\Http\Controllers\customerController@Payment');
Route::post('/user/makepayment','App\Http\Controllers\customerController@paymentMake');


Route::get('/user/welcome', 'App\Http\Controllers\customerController@welcome');

Route::get('/superadmin/login', function () {
	if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
		return view('suparAdmin.suparadminlogin');
	}else{
		return view('suparAdmin.suparadmindash');

	}
});

Route::get('/super-admin/dashboard', 'App\Http\Controllers\suparAdminController@dashboard');
/*-------------- Views Admin -------------------*/
//changed by vinod  super-admin/reshedule-list'super-admin/ super-admin/view-reviews  super-admin/reports

Route::get('/super-admin/contacts', 'App\Http\Controllers\suparAdminController@viewContact');

Route::get('/super-admin/view-reviews/{id}', 'App\Http\Controllers\cleanerController@viewReview');
Route::get('/super-admin/change-list', 'App\Http\Controllers\bookingController@changeList');
Route::get('/super-admin/reshedule-list', 'App\Http\Controllers\bookingController@rescheduleList');
Route::get('/super-admin/add-user', 'App\Http\Controllers\customerController@customertAdd');
Route::get('/super-admin/userlist', 'App\Http\Controllers\customerController@userList');
Route::get('/super-admin/customerlist/fetch_data', 'App\Http\Controllers\customerController@fetch_data');

// Route::get('/super-admin/add-agent', 'App\Http\Controllers\cleanerController@cleanerAdd');
Route::get('/super-admin/agentlist', 'App\Http\Controllers\cleanerController@agentList');
Route::get('/super-admin/bookings', 'App\Http\Controllers\bookingController@bookingList');
Route::get('/super-admin/view-booking/{id}', 'App\Http\Controllers\bookingController@viewBooking');
Route::get('/super-admin/edit-agent/{id}', 'App\Http\Controllers\cleanerController@getAgentEditData');
Route::get('/super-admin/locationlist', 'App\Http\Controllers\locationController@locationList');
Route::get('/super-admin/add-location', 'App\Http\Controllers\locationController@locationAdd');
Route::post('/actions/locationManager', 'App\Http\Controllers\locationController@locationManager');
Route::post('/actions/locationManager', 'App\Http\Controllers\locationController@locationManager');
Route::get('/super-admin/edit-location/{id}', 'App\Http\Controllers\locationController@getLocationEditData');
Route::get('/super-admin/servicelist', 'App\Http\Controllers\serviceController@serviceList');
Route::get('/super-admin/add-service', 'App\Http\Controllers\serviceController@serviceAdd');
Route::post('/actions/serviceManager', 'App\Http\Controllers\serviceController@serviceManager');
Route::post('/actions/serviceManager', 'App\Http\Controllers\serviceController@serviceManager');
Route::get('/super-admin/edit-service/{id}', 'App\Http\Controllers\serviceController@getServiceEditData');
Route::post('/action/price','App\Http\Controllers\priceController@getPrice');
Route::post('/action/booking','App\Http\Controllers\bookingController@saveBooking');
Route::post('/action/assign','App\Http\Controllers\bookingController@assignBooking');

Route::get('/super-admin/subscription', 'App\Http\Controllers\serviceController@subscriptionList');
Route::get('/super-admin/taxlist', 'App\Http\Controllers\serviceController@taxList');

Route::get('/super-admin/edit-user/{id}', 'App\Http\Controllers\customerController@getUserEditData');
/*-------------- Actions Admin -------------------*/
Route::post('/actions/suparAdmin', 'App\Http\Controllers\suparAdminController@suparAdminLogin');
Route::post('/actions/delete', 'App\Http\Controllers\deleteController@delete');
Route::post('/actions/paymentManager', 'App\Http\Controllers\paymentMethodController@paymentManager');
Route::post('/actions/customerManager', 'App\Http\Controllers\customerController@customerManager');
Route::post('/actions/customerManager', 'App\Http\Controllers\customerController@customerManager');
Route::post('/actions/cleanerManager', 'App\Http\Controllers\cleanerController@cleanerManager');
Route::post('/actions/cleanerManager', 'App\Http\Controllers\cleanerController@cleanerManager');


Route::post('/actions/logout', 'App\Http\Controllers\loggedController@logout');

Route::get('/actions/logout-user', 'App\Http\Controllers\loggedController@logoutUser');

Route::post('/actions/refersh', 'App\Http\Controllers\customerController@refershWelcome');

Route::get('/super-admin/profile', 'App\Http\Controllers\suparAdminController@profile');
// Route::post('/actions/profileUpdate', 'App\Http\Controllers\suparAdminController@profileUpdate');
//change by vinod
Route::post('/actions/changeStatus', 'App\Http\Controllers\customerController@changeUserStatus');


Route::post('/actions/orderStatus', 'App\Http\Controllers\suparAdminController@orderStatus');
Route::post('/actions/assign', 'App\Http\Controllers\bookingController@assignCleaner');
Route::post('/actions/searchCleaner', 'App\Http\Controllers\suparAdminController@searchCleaner');
Route::post('/actions/globalSearch', 'App\Http\Controllers\suparAdminController@globalSearch');
Route::post('/actions/searchCustomer', 'App\Http\Controllers\suparAdminController@searchCustomer');

Route::post('/actions/searchLocation', 'App\Http\Controllers\suparAdminController@searchLocation');
Route::post('/actions/searchService', 'App\Http\Controllers\suparAdminController@searchService');
Route::post('/actions/searchContact', 'App\Http\Controllers\suparAdminController@searchContact');

Route::get('/super-admin/reports', 'App\Http\Controllers\suparAdminController@reportList');
Route::post('/actions/shortReports', 'App\Http\Controllers\reportController@shortReports');
Route::post('/actions/shortTypesReports', 'App\Http\Controllers\reportController@shortTypesReports');
Route::get('/super-admin/adminreport', 'App\Http\Controllers\reportController@adminreport');
Route::post('/actions/shortByDate', 'App\Http\Controllers\reportController@shortByDate');

Route::get('/paypal/{type}/{order_id}', 'App\Http\Controllers\ordersController@Paypal');
Route::get('/pay-sucess/{type}/{order_id}', 'App\Http\Controllers\ordersController@paySuccess');
Route::get('/pay-cancel/{type}/{order_id}', 'App\Http\Controllers\ordersController@payCancel');
Route::get('/pay-notify', 'App\Http\Controllers\ordersController@payNotify');

Route::get('/question/add-Question', 'App\Http\Controllers\QuestionController@question');
Route::post('/question/addQuestion', 'App\Http\Controllers\QuestionController@getquestion');
Route::get('/question/questionlist', 'App\Http\Controllers\QuestionController@questionlist');
// Route::get('/question/questionedit', 'App\Http\Controllers\QuestionController@edit_question');	
Route::post('/question/question_edit', 'App\Http\Controllers\QuestionController@edit_question');
Route::get('/question/edit/{id}', 'App\Http\Controllers\QuestionController@edit');
Route::post('/importfile', 'App\Http\Controllers\QuestionController@importExcel');
Route::post('/change_password', 'App\Http\Controllers\QuestionController@changepassword')->name('change_password');