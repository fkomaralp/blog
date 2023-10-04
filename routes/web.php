<?php
/* Livewire */
use App\Livewire\Settings;
use App\Livewire\Categories;
use App\Livewire\Comments;
use App\Livewire\Contact;
use App\Livewire\Posts;
use App\Livewire\Theme;
use App\Livewire\Users;
use App\Livewire\Socialmedia;
use Illuminate\Support\Facades\Route;

/* Livewire */
use App\Http\Controllers\BaseController;
use \App\Http\Controllers\PostDetail;


Route::get('/',[BaseController::class,'index'])->name('home');
Route::get('/posts/detail/{id}', [PostDetail::class,'index'])->name('post-detail');

Route::post('/commnetSave', [PostDetail::class,'commnetSave']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::name('contact.')->group(function (){
        Route::get('/contact', Contact\Index::class)->name('index');
    });

    Route::name('theme.')->group(function (){
        Route::get('/theme', Theme\Index::class)->name('index');
    });

    Route::name('comments.')->group(function (){
        Route::get('/comments', Comments\Index::class)->name('index');
    });

    Route::name('categories.')->group(function (){
        Route::get('/categories', Categories\Index::class)->name('index');
    });

    Route::name('settings.')->group(function (){
        Route::get('/settings', Settings\Index::class)->name('index');
    });
    Route::name('socialmedia.')->group(function (){
        Route::get('/socialmedia', Socialmedia\Index::class)->name('index');
    });
    Route::name('posts.')->group(function (){
        Route::get('/posts',Posts\Index::class)->name('index');
        Route::post('/PostSave' , [Posts\Index::class,'PostSave'])->name('save');
        Route::post('/PostUpdate{$id}' , [Posts\Index::class,'UpdatePost'])->name('update');
    });

    Route::name('users.')->group(function (){
        Route::get('/users',     Users\Index::class)->name('index');
    });
});
