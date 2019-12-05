<?php

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
    return view('home.index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', function () {
    return view('home.index');
});




Route::get('/features', function () {
    return view('features.index');
});
// Route::get('/register', function () {
    // return view('register.index');
// });

Route::get('/how_it_works', function () {
    return view('how_it_works.index');
});

Route::get('/faq', function () {
    return view('faq.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/about_us', function () {
    return view('about_us.index');
});

Route::get('/services', function () {
    return view('services.index');
});
Route::get('/onlineshop_transport', function () {
    return view('onlineshop_transport.index');
});
Route::get('/car_transport', function () {
    return view('car_transport.index');
});
Route::get('/motorcycle_transport', function () {
    return view('motorcycle_transport.index');
});
Route::get('/boats_transport', function () {
    return view('boats_transport.index');
});
Route::get('/moving_transport', function () {
    return view('moving_transport.index');
});

Route::get('/privacy', function () {
    return view('privacy.index');
});

Route::get('/terms', function () {
    return view('terms.index');
});

Route::get('/what_to_expect', function () {
    return view('what_to_expect.index');
});

Route::get('/transactions', function () {
    return view('transactions.index');
});

Route::get('/myaccount', function () {
    return view('myaccount.index');
});

// Route::get('/edit_profile', function () {
//     return view('edit_profile.index');
// });

Route::group(['middleware' => 'auth'], function() {
    Route::get('/edit_profile', 'UserController@edit');
    Route::put('/edit_profile/{id}', 'UserController@update');

    Route::get('/gethelp', 'MessageController@index');
    Route::put('/gethelp/{id}', 'MessageController@insert');
    Route::get('/transactions', 'QuoteController@index');
    Route::get('/view_transaction/{id}', 'QuoteController@getItem');
    
});

Route::put('/contact', 'MessageController@insert');
Route::put('/quote', 'QuoteController@insert');


Route::get('/start_transaction', function () {
    return view('start_transaction.index');
});

// Route::get('/gethelp', function () {
//     return view('gethelp.index');
// });

Route::get('/tracking', 'TrackingController@index');

// Route::get('/view_transaction', function () {
//     return view('view_transaction.index');
// });

Route::get('/quote', function () {
    return view('quote.index');
});




/******************************************************************
 * 
 *  ==================== Admin Panel APIs =======================
 * 
 * ***************************************************************/
// Admin Login Module
Route::match(array('get', 'post'), '/admin/login', 'AdminController@login')->name('admin.login');

 Route::group(['middleware' => 'is.admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin');
    
    // Dashboard Management Module
    Route::get('/dashboard', 'AdminController@index');
    
    // User Management Module
    Route::get('/users/business', 'AdminController@businessUsers')->name('admin.business');
    Route::get('/users/customers', 'AdminController@customers')->name('admin.customers');
    Route::get('/users/edit/{id}', 'AdminController@editUser');
    Route::put('/users/update/{id}', 'AdminController@updateUser');
    Route::delete('/users/delete/{id}', 'AdminController@deleteUser');
    
    // Mail Mangement Module
    Route::get('/mails/contact', 'AdminController@contactMails')->name('admin.contact');
    Route::get('/mails/ticket', 'AdminController@ticketMails')->name('admin.ticket');
    Route::post('/mails/reply', 'AdminController@reply');
    
    // Transaction Management Module
    Route::get('/transactions', 'AdminController@transactions')->name('admin.transaction');
    Route::post('/transactions/approve/{id}', 'AdminController@approveTransaction');
    Route::post('/transactions/sender/{id}', 'AdminController@sender');
    Route::get('/transactions/edit/{id}', 'AdminController@editTransaction');
    Route::put('/transactions/update/{id}', 'AdminController@updateTransaction');

    // Contact Info Management Module
    Route::get('/contact', 'AdminController@contactInfo')->name('admin.contactInfo');
    Route::get('/contact/edit', 'AdminController@editContactInfo');
    Route::put('/contact/update', 'AdminController@updateContactInfo');
});


// ============= Atisan CMD ============== //
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
    return response()->json(['result' => $exitCode], 200);
});

Route::get('/clear-config', function() {
    $exitCode = Artisan::call('config:clear');
    // return what you want
    return response()->json(['result' => $exitCode], 200);
});

Route::get('/storage-link', function() {
    $exitCode = Artisan::call('storage:link');
    // return what you want
    return response()->json(['result' => $exitCode], 200);
});