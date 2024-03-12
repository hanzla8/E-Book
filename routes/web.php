<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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


require __DIR__.'/auth.php';

// this is our admin index page
route::get('/home', [ProfileController::class, 'adminProfile'])->name('home');

// this is our home welcome page
Route::get('/', [ProfileController::class, 'home']);

// middleware for admin pages

Route::middleware(['auth', 'admin'])->group(function(){

    // this is our route to create book in admin portion
    Route::get('/add_book', [ProfileController::class, 'add_book']);

    // this is our route to upload book into the database
    Route::post('/upload_book', [ProfileController::class, 'upload_book']);

    // this is our route to view book into the admin panel
    Route::get('/view_book', [ProfileController::class, 'view_book'])->name('admin.view_book');

    // this is our route to Delete book
    Route::get('/delete_book/{id}', [ProfileController::class, 'delete_book']);

    // this is our route to Update/edit book
    Route::get('/edit_book/{id}', [ProfileController::class, 'edit_book']);

    // this is our route to Update/edit book
    Route::post('/update_book/{id}', [ProfileController::class, 'update_book']);

    // shown order book in admin panel
    Route::get('/orders', [ProfileController::class, 'orders']);

});





// HOME CONTROLLER

Route::get('/book_detail/{id}', [HomeController::class, 'book_detail']);

// order book
Route::post('/order_book/{id}', [HomeController::class, 'order_book']);

// all book display

route::get('/books', [HomeController::class, 'book_display']);

// competion
Route::get('/competition', [HomeController::class, 'competition']);

// contact
route::get('contact', [HomeController::class, 'contact']);


// sameer work

Route::get('/submission', [HomeController::class, 'showSubmissionForm'])->name('submission.form');

// Route::get('/contests', [HomeController::class, 'date']);

Route::post('/submission', [HomeController::class, 'store'])->name('submission.store');


// abdullah work

route::get('essay_writing', [HomeController::class, 'essay_writing']);

route::post('your_essay_submission', [HomeController::class, 'your_essay_submission']);
