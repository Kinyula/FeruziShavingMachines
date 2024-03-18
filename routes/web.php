<?php

use App\Http\Controllers\AboutTextOfAnAdminController;
use App\Http\Controllers\AddPhoneNumbersController;
use App\Http\Controllers\AddProductCategoryController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AddProductPriceController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DasshboardController;
use App\Http\Controllers\EditAdminAboutTextController;
use App\Http\Controllers\EditAdminPhoneNumberController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\FrontEndLayoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ViewAdminAboutTextController;
use App\Http\Controllers\ViewNewPhoneNumbersController;
use App\Models\PhoneNumber;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
    $categoryImages = Product::with(['product_category'])->get();
    $SalonClothings = Product::with(['product_category'])->where('product_category_id' , '2')->get();
    $Machine = Product::with(['product_category'])->where('product_category_id' , '3')->get();
    $Knives = Product::with(['product_category'])->where('product_category_id' , '6')->get();
    $SmootherMachines = Product::with(['product_category'])->where('product_category_id' , '11')->get();
    $Bag = Product::with(['product_category'])->where('product_category_id' , '10')->get();
    $Sponge = Product::with(['product_category'])->where('product_category_id' , '8')->get();
    $NeckClothings = Product::with(['product_category'])->where('product_category_id' , '9')->get();
    $Gloves = Product::with(['product_category'])->where('product_category_id' , '5')->get();
    $Blades = Product::with(['product_category'])->where('product_category_id' , '4')->get();
    $Compressor = Product::with(['product_category'])->where('product_category_id' , '1')->get();
    $Brush = Product::with(['product_category'])->where('product_category_id' , '7 ')->get();
    $Holders = Product::with(['product_category'])->where('product_category_id' , '12 ')->get();
    $phoneNumber = PhoneNumber::get();

    return view('welcome', compact('categoryImages', 'SalonClothings', 'Blades', 'Holders', 'Brush', 'Compressor', 'Gloves',
'NeckClothings', 'Sponge', 'Bag', 'SmootherMachines', 'Knives', 'Machine', 'phoneNumber'));

});

Route::get('shop', [ShopController::class, 'index']);

Route::get('/dashboard', [DasshboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/{id}', [DasshboardController::class, 'deleteProduct'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('feruzi-shaving-machines/view-new-phone-numbers', [ViewNewPhoneNumbersController::class, 'index'])->middleware('auth');
Route::get('/layout', [FrontEndLayoutController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/add-about-text', [AboutTextOfAnAdminController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/add-product-category', [AddProductCategoryController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/add-products', [AddProductController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/add-product-price', [AddProductPriceController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/edit-products/{id}', [EditProductController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/edit-admin-about-text/{id}', [EditAdminAboutTextController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/view-admin-about-text', [ViewAdminAboutTextController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/edit-admin-phone-number/{id}', [EditAdminPhoneNumberController::class, 'index'])->middleware('auth');
Route::get('feruzi-shaving-machines/add-phone-numbers', [AddPhoneNumbersController::class, 'index'])->middleware('auth');
require __DIR__ . '/auth.php';
