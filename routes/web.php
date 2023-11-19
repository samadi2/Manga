<?php


use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
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




Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('/shonens', [ArticleController::class, 'ShonenMangas']);
Route::get('/seinens', [ArticleController::class, 'SeinenMangas']);
Route::get('/shojos', [ArticleController::class, 'ShojoMangas']);
Route::get('/joseis', [ArticleController::class, 'JoseiMangas']);
Route::get('/search', [ArticleController::class, 'search'])->name('articles.search');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'create'])->name('cart.create');
Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.destroy');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('articles', AdminArticleController::class);
    });

        

});

require __DIR__.'/auth.php';
