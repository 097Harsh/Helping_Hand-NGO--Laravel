<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VolunteerController;


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [Users::class, 'index'])->name('home');
Route::get('/About', [Users::class, 'about'])->name('about');
Route::get('/Contact', [Users::class, 'contact'])->name('contact');
Route::post('/store_contact', [Users::class, 'store_contact'])->name('store_contact');
Route::get('/Register', [Users::class, 'register'])->name('register');
Route::get('/Login', [Users::class, 'login'])->name('login');
//Registration URL
Route::post('/registration_store', [RegisterController::class, 'registration_store'])->name('store_register');
//Login URL
Route::post('/login_store', [LoginController::class, 'login_store'])->name('store_login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

// ******************** Admin URL's **********************************
Route::get('/Dashboard', [AdminController::class, 'dashboard'])->name('Dashboard')->middleware('Isadmin');
Route::get('/ShowCategory', [AdminController::class, 'all_category'])->name('ShowCategory')->middleware('Isadmin');
Route::get('/add_cat', [AdminController::class, 'add_cat'])->name('add_cat')->middleware('Isadmin');
Route::post('/store_cat', [AdminController::class, 'store_cat'])->name('store_cat')->middleware('Isadmin');
Route::get('/delete_categroy/{cat_id}', [AdminController::class, 'delete_category'])->name('delete_categroy')->middleware('Isadmin');
//to update category
Route::get('/edit_category/{cat_id}', [AdminController::class, 'edit_category'])->name('edit_category')->middleware('Isadmin');
Route::post('/update_category/{cat_id}', [AdminController::class, 'update_cat'])->name('update_category')->middleware('Isadmin');
//View users
Route::get('/ViewUser', [AdminController::class, 'ShowUsers'])->name('ViewUser')->middleware('Isadmin');
Route::get('/ViewProfile/{user_id}', [AdminController::class, 'ViewProfile'])->name('ViewProfile')->middleware('Isadmin');
//View Volunteer
Route::get('/ViewVolunteer', [AdminController::class, 'ShowVolunteer'])->name('ViewVolunteer')->middleware('Isadmin');
Route::get('/ViewVolunteerProfile/{user_id}', [AdminController::class, 'ViewVolunteerProfile'])->name('ViewVolunteerProfile')->middleware('Isadmin');
//View Feed-Back
Route::get('/ViewFeedBack', [AdminController::class, 'ShowFeedBack'])->name('ViewFeedBack')->middleware('Isadmin');
//View Contacts
Route::get('/ViewInquery', [AdminController::class, 'ShowInqury'])->name('ViewInquery')->middleware('Isadmin');
//Pending Donation Request 
Route::get('/PendingRequest', [AdminController::class, 'PendingDonation'])->name('PendingRequest')->middleware('Isadmin');
//view Full details of pending request
Route::get('/viewDoantioRequest/{d_id}', [AdminController::class, 'PendingDonationDetails'])->name('viewDoantioRequest')->middleware('Isadmin');

Route::get('/CompleteRequest', [AdminController::class, 'CompleteDonation'])->name('CompleteRequest')->middleware('Isadmin');
Route::get('/MoneyDonation', [AdminController::class, 'MoneyDonation'])->name('Money_Donation')->middleware('Isadmin');





//  *******************************  User URL's    *********************************
//  Feed-Back
Route::get('/feedback', [Users::class, 'feedback'])->name('feedback')->middleware('Isadmin');
Route::post('/store_Feedback/{user_id}', [Users::class, 'store_feedback'])->name('store_Feedback')->middleware('Isadmin');
// Donation - Form
Route::get('/Donation', [Users::class, 'Donation'])->name('Donation')->middleware('Isadmin');
Route::post('/store_donation/{user_id}', [Users::class, 'store_donation'])->name('store_donation')->middleware('Isadmin');
//  Money Donation Process
Route::get('/m_donation',[Users::class,'MoneyDonation'])->name('MoneyDonation')->middleware('Isadmin');
Route::post('/store_money/{user_id}', [Users::class, 'PaymentPage'])->name('store_money')->middleware('Isadmin');
Route::post('/success/{user_id}', [Users::class, 'success'])->name('success')->middleware('Isadmin');
Route::get('/MyDonation/{MyDonation}', [Users::class, 'MyDonation'])->name('MyDonation')->middleware('Isadmin');
Route::get('/MyMoneyDonation/{MyDonation}', [Users::class, 'MyMoneyDonation'])->name('MyMoneyDonation')->middleware('Isadmin');
//Cancle Donation Request 
Route::get('/CancleRequest/{d_id}', [Users::class, 'CancleRequest'])->name('CancleRequest')->middleware('Isadmin');
//Edit profile 
//  Route::get('/EditProfile/{user_id}', [Users::class, 'EditProfile'])->name('EditProfile')->middleware('Isadmin');


//  *******************************  Volunteer URL's    ***********************************************
Route::get('/volunteer_feedback', [VolunteerController::class, 'volunteer_feedback'])->name('volunteer_feedback')->middleware('Isadmin');
Route::get('/Donation_post/{v_id}', [VolunteerController::class, 'show_donation_post'])->name('Donation_post')->middleware('Isadmin');
Route::get('/Donation_details/{d_id}', [VolunteerController::class, 'Dontaion_Details'])->name('Donation_details')->middleware('Isadmin');
Route::get('/Accept_Donation/{d_id}/{v_id}', [VolunteerController::class, 'Accept_Donation'])->name('Accept_Donation')->middleware('Isadmin');
//My post
Route::get('/MyPost/{v_id}', [VolunteerController::class, 'Mypost'])->name('MyPost')->middleware('Isadmin');
//Received post
Route::get('/Recevied/{d_id}', [VolunteerController::class, 'ReceviedDonation'])->name('Recevied')->middleware('Isadmin');
//Delivered Donation
Route::get('/Delivered/{d_id}', [VolunteerController::class, 'DeliveredDonation'])->name('Delivered')->middleware('Isadmin');


