<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\EnquiryController;

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

Route::get('/', [SiteController::class, 'homepage'])
    ->name('homepage');

Route::get('/about', [SiteController::class, 'about'])
    ->name('about');

Route::get('/contact', [SiteController::class, 'contact'])
    ->name('contact');

Route::post('/contact-send', [EnquiryController::class, 'store'])
    ->name('contact.send');

Route::get('/services/landscaping', [SiteController::class, 'landscaping'])
    ->name('services.landscaping');

Route::get('/services/shop-fitting', [SiteController::class, 'shopFitting'])
    ->name('services.shopfitting');

Route::get('/services/electrical-data', [SiteController::class, 'electrical'])
    ->name('services.electrical');

Route::get('/services/cabinet-making', [SiteController::class, 'cabinetMaking'])
    ->name('services.cabinetmaking');

Route::get('/services/security-surveillance', [SiteController::class, 'security'])
    ->name('services.security');

Route::get('/services/property-maintenance', [SiteController::class, 'propertyMaintenance'])
    ->name('services.propertymaintenance');

Route::middleware(['auth'])
    ->group(function () {
        Route::get('/home', [AdminController::class, 'home'])
            ->name('admin.home');

        Route::resources([
            'quotes' => QuoteController::class,
            'enquiries' => EnquiryController::class,
        ]);
    });
