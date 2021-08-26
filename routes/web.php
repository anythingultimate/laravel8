<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

// Route::get('ping', function (){

//     $mailchimp = new \MailchimpMarketing\ApiClient();

//     $mailchimp->setConfig([
//         'apiKey' => config('services.mailchimp.key'),
//         'server' => 'us2'
//     ]);

//     $response = $mailchimp->lists->getAllLists();
//     ddd($response);

// });

Route::get('/', [PostController::class, 'index'])->name('home');

Route::post('newsletter', NewsletterController::class);

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [CommentController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
