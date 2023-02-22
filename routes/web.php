<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\HomeController;

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

//index - Show all data --> listings
//show - Show single data --> listing
//create - Show form to create new --> listing
//store - Store Data --> New listing
//edit - Show form to edit data
//update - Update data
//destroy - Delete a data

//All Listing
Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/property', [ListingController::class, 'property']);

//Show Create Form
Route::get('/listings/create', [ListingController::class,'create'])->middleware('auth');

//Store Listing Data
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');

//Manage Listing
Route::get('/listings/manage', [ListingController::class,'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register / Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('user-role:admin');

Route::get('/dashboard/table', [DashboardController::class, 'table'])->middleware('user-role:admin');

Route::get('/dashboard/form', [DashboardController::class, 'form'])->middleware('user-role:admin');

//Contact 
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $content = $request->input('content');

    \Illuminate\Support\Facades\Mail::to('imperialhomes@gmail.com')
        ->send(new \App\Mail\ContactForm($name, $email, $content));

    return redirect('/contact')->with('success', 'Your message has been sent!');
});

//Roles

Auth::routes();
//User Route
Route::middleware(['auth', 'user-role:user'])->group(function () 
{
    Route::get('/home',[HomeController::class,'userHome'])->name('home');
});

//Admin Route
Route::middleware(['auth', 'user-role:admin'])->group(function () 
{
    Route::get('/admin/home',[HomeController::class,'adminHome'])->name('home.admin');
});

//Admin 

Route::get('/register/admin',[RegisterController::class, 'index']);

Route::post('/register/admin',[RegisterController::class, 'createAdmin'])->name('register.admin'); 

