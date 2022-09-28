<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

// gestion onboarding && login
Route::get("/", [FrontController::class, "home"])->name("home");
Route::get("/yourshop/onboarding/need-help-with", [
    FrontController::class,
    "choice",
])->name("signupstep1");
Route::get("/yourshop/onboarding/how-help", [
    FrontController::class,
    "help",
])->name("signupstep2");
Route::get("/yourshop/onboarding/shop", [
    FrontController::class,
    "createshop",
])->name("createshop");
Route::get("/yourshop/onboarding/createid", [
    FrontController::class,
    "createid",
])->name("createid");
Route::get("/yourshop/onboarding/paymentmode", [
    FrontController::class,
    "createpaymentmode",
])->name("createpayment");

Route::get("/yourshop/account", [
    FrontController::class,
    "account",
])->name("account");

Route::get("/article/show", [
    FrontController::class,
    "show",
])->name("showarticle");
Route::get("/youtube/videopresentation", [
    FrontController::class,
    "videodisplay",
])->name("videodisplay");

// gestion des contenus
// Route::get('/apropos-de-nous', [InfoController::class, 'about'])->name('about');
// Route::get('/Confidentialite', [InfoController::class, 'conf'])->name('confidentiel');
// Route::get('/Condition-utilisation', [InfoController::class, 'cond-util'])->name('cond-util');
// Route::get('/aide', [InfoController::class, 'help'])->name('help');

// gestions marketplaces display product product...
// Route::get('/shops', [AkabController::class, 'Showshops'])->name('Showshops');
// Route::get('/products', [AkabController::class, 'showsproduct'])->name('showsproduct');
// Route::get('/marchand', [AkabController::class, 'showsmarchands'])->name('showsmarchands');

// gestions des paiements
// Route::get('/addArticle', [FrontController::class, 'index'])->name('signupstep2');
// Route::get('/choicemode', [FrontController::class, 'index'])->name('signupstep3');
// Route::get('/display', [FrontController::class, 'index']);
// Route::get('/product', [FrontController::class, 'show']);
// Route::get('/shop', [FrontController::class, 'index']);
// Route::get('/aproposdenous', [FrontController::class, 'index']);