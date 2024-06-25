<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\Post\ShowPostController;
use App\Http\Controllers\Post\StorePostController;
use App\Http\Controllers\Post\CreatePostController;
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\UpdateBioProfileController;
use App\Http\Controllers\Post\StoreCommentController;
use App\Http\Controllers\UpdateNameProfileController;
use App\Http\Controllers\UpdateWorkProfileController;
use App\Http\Controllers\Post\DeleteCommentController;
use App\Http\Controllers\UpdatePhotoProfileController;

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

// Route::get('link-storage', function () {
//     symlink(storage_path('app/public'), public_path('storage'));
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', TimelineController::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin', AdminController::class)->name('admin');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/settings/profile', ProfileSettingsController::class)->name('profile.settings');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/settings/profile/foto', UpdatePhotoProfileController::class)->name('update.profile.image');
    Route::post('/settings/profile/bio', UpdateBioProfileController::class)->name('update.profile.bio');
    Route::post('/settings/profile/job', UpdateWorkProfileController::class)->name('update.profile.job');
    Route::post('/settings/profile/name', UpdateNameProfileController::class)->name('update.profile.name');
    Route::post('post', StorePostController::class)->name('post.store');
    Route::get('post/{post}', ShowPostController::class)->name('post.show');
    Route::get('/create/post', CreatePostController::class)->name('post.create');
    Route::post('post/{post}/comment', StoreCommentController::class)->name('post.comment.store');
    Route::delete('post/{post}/comment/{comment}', DeleteCommentController::class)->name('post.comment.destroy');
    Route::delete('post/{post}', [DashboardPostController::class, 'destroy'])->name('post.delete');
});
Route::resource('/create', DashboardPostController::class)->middleware('auth');

require __DIR__ . '/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
