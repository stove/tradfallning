<?php

    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\PostCommentsController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\SessionsController;
    use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
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
    /*  Here is the blog and admin section  */
    Route::get('/pages/tradfallning.php',[\App\Http\Controllers\PageController::class,'tradfallning'])->name('tradfallning');
    Route::get('/blog', [PostController::class, 'index'])->name('home');

    Route::get('posts/{post:slug}', [PostController::class, 'show']);
    Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

   // Route::post('newsletter', NewsletterController::class);

    Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
    Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
    Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

    Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin Section
    Route::middleware('can:admin')->group(function () {
        Route::resource('admin/posts', AdminPostController::class)->except('show');
    });
    //end of admin section


    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/cars', CarsController::class);

//Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tradfallning', [\App\Http\Controllers\PageController::class, 'tradfallning'])->name('tradfallning');
Route::get('/rojning', [\App\Http\Controllers\PageController::class, 'rojning'])->name('rojning');
Route::get('/kontakt', [\App\Http\Controllers\PageController::class, 'kontakt'])->name('kontakt');
Route::get('/fragor', [\App\Http\Controllers\PageController::class, 'fragor'])->name('fragor');
Route::get('/omoss', [\App\Http\Controllers\PageController::class, 'omoss'])->name('omoss');

