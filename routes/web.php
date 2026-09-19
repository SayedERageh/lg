<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| Language
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/

Route::get('/products', [PageController::class, 'products'])
    ->name('products');

Route::get('/products/{slug}', [PageController::class, 'product'])
    ->name('products.show');
Route::get('/language/{locale}', function (string $locale, Request $request) {

    abort_unless(
        in_array($locale, ['ar', 'en']),
        404
    );

    session(['locale' => $locale]);

    App::setLocale($locale);

    return redirect()->back();

})->name('language.switch');

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/services', [PageController::class, 'services'])
    ->name('services');

Route::get('/services/{slug}', [PageController::class, 'service'])
    ->name('services.show');

Route::get('/projects', [PageController::class, 'projects'])
    ->name('projects');

Route::get('/projects/{slug}', [PageController::class, 'project'])
    ->name('projects.show');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

 Route::get('/services/{slug}', [PageController::class, 'service'])
    ->name('services.show');