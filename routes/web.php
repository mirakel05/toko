<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArrivalController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\WaktuController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Photo_footerController;
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


Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {

    //BACKEND

    Route::get('/index', function () {
        return view('backend.index');
    });

    //BACKEND-HOME

    Route::get('/pages-home.hero', [HeroController::class, 'index']);
    Route::get('/pages-home.hero-add', [HeroController::class, 'create']);
    Route::post('/pages-home.hero-add', [HeroController::class, 'store']);
    Route::get('/pages-home.hero-edit/{hero}', [HeroController::class, 'edit']);
    Route::post('/pages-home.hero-update/{hero}', [HeroController::class, 'update']);
    Route::get('/pages-home.hero-delete/{hero}', [HeroController::class, 'destroy']);

    Route::get('/pages-home.deal', [DealController::class, 'index']);
    Route::get('/pages-home.deal-edit/{deal}', [DealController::class, 'edit']);
    Route::post('/pages-home.deal-update/{deal}', [DealController::class, 'update']);

    Route::get('/pages-home.photo', [PhotoController::class, 'index']);
    Route::get('/pages-home.photo-add', [PhotoController::class, 'create']);
    Route::post('/pages-home.photo-add', [PhotoController::class, 'store']);
    Route::get('/pages-home.photo-edit/{photo}', [PhotoController::class, 'edit']);
    Route::post('/pages-home.photo-update/{photo}', [PhotoController::class, 'update']);
    Route::get('/pages-home.photo-delete/{photo}', [PhotoController::class, 'destroy']);


    Route::get('/pages-home.arrival', [ArrivalController::class, 'index']);
    Route::get('/pages-home.arrival-add', [ArrivalController::class, 'create']);
    Route::post('/pages-home.arrival-add', [ArrivalController::class, 'store']);
    Route::get('/pages-home.arrival-edit/{arrival}', [ArrivalController::class, 'edit']);
    Route::post('/pages-home.arrival-update/{arrival}', [ArrivalController::class, 'update']);
    Route::get('/pages-home.arrival-delete/{arrival}', [ArrivalController::class, 'destroy']);

    Route::get('/pages-home.review', [ReviewController::class, 'index']);
    Route::get('/pages-home.review-add', [ReviewController::class, 'create']);
    Route::post('/pages-home.review-add', [ReviewController::class, 'store']);
    Route::get('/pages-home.review-edit/{review}', [ReviewController::class, 'edit']);
    Route::post('/pages-home.review-update/{review}', [ReviewController::class, 'update']);
    Route::get('/pages-home.review-delete/{review}', [ReviewController::class, 'destroy']);

    //BACKEND-SHOP

    Route::get('/pages-shop.produk', [ProdukController::class, 'index']);
    Route::get('/pages-shop.produk-add', [ProdukController::class, 'create']);
    Route::post('/pages-shop.produk-add', [ProdukController::class, 'store']);
    Route::get('/pages-shop.produk-edit/{produk}', [ProdukController::class, 'edit']);
    Route::post('/pages-shop.produk-update/{produk}', [ProdukController::class, 'update']);
    Route::get('/pages-shop.produk-delete/{produk}', [ProdukController::class, 'destroy']);

    //BACKEND-ABOUT

    Route::get('/pages-about.layanan', [LayananController::class, 'index']);
    Route::get('/pages-about.layanan-add', [LayananController::class, 'create']);
    Route::post('/pages-about.layanan-add', [LayananController::class, 'store']);
    Route::get('/pages-about.layanan-edit/{layanan}', [LayananController::class, 'edit']);
    Route::post('/pages-about.layanan-update/{layanan}', [LayananController::class, 'update']);
    Route::get('/pages-about.layanan-delete/{layanan}', [LayananController::class, 'destroy']);

    Route::get('/pages-about.sejarah', [SejarahController::class, 'index']);
    Route::get('/pages-about.sejarah-add', [SejarahController::class, 'create']);
    Route::post('/pages-about.sejarah-add', [SejarahController::class, 'store']);
    Route::get('/pages-about.sejarah-edit/{sejarah}', [SejarahController::class, 'edit']);
    Route::post('/pages-about.sejarah-update/{sejarah}', [SejarahController::class, 'update']);
    Route::get('/pages-about.sejarah-delete/{sejarah}', [SejarahController::class, 'destroy']);

    Route::get('/pages-about.waktu', [WaktuController::class, 'index']);
    Route::get('/pages-about.waktu-add', [WaktuController::class, 'create']);
    Route::post('/pages-about.waktu-add', [WaktuController::class, 'store']);
    Route::get('/pages-about.waktu-edit/{waktu}', [WaktuController::class, 'edit']);
    Route::post('/pages-about.waktu-update/{waktu}', [WaktuController::class, 'update']);
    Route::get('/pages-about.waktu-delete/{waktu}', [WaktuController::class, 'destroy']);

    //BACKEND-CONTACT
    Route::get('/pages-contact.kontak', [KontakController::class, 'index']);
    Route::get('/pages-contact.kontak-add', [KontakController::class, 'create']);
    Route::post('/pages-contact.kontak-add', [KontakController::class, 'store']);
    Route::get('/pages-contact.kontak-edit/{kontak}', [KontakController::class, 'edit']);
    Route::post('/pages-contact.kontak-update/{kontak}', [KontakController::class, 'update']);
    Route::get('/pages-contact.kontak-delete/{kontak}', [KontakController::class, 'destroy']);

    Route::get('/pages-contact.contact', [ContactController::class, 'index']);
    Route::get('/pages-contact.contact-add', [ContactController::class, 'create']);
    Route::post('/pages-contact.contact-add', [ContactController::class, 'store']);

    //FOOTER

    Route::get('/pages-footer.photo_footer', [Photo_footerController::class, 'index']);
    Route::get('/pages-footer.photo_footer-add', [Photo_footerController::class, 'create']);
    Route::post('/pages-footer.photo_footer-add', [Photo_footerController::class, 'store']);
    Route::get('/pages-footer.photo_footer-edit/{photo_footer}', [Photo_footerController::class, 'edit']);
    Route::post('/pages-footer.photo_footer-update/{photo_footer}', [Photo_footerController::class, 'update']);
    Route::get('/pages-footer.photo_footer-delete/{photo_footer}', [Photo_footerController::class, 'destroy']);
});


//FRONTEND

Route::get('/', [FrontendController::class, 'index']);

Route::get('/shop', [FrontendController::class, 'shop']);

Route::get('/about', [FrontendController::class, 'about']);

Route::get('/contact', [FrontendController::class, 'kontak']);
Route::post('/contact', [FrontendController::class, 'contact_add']);

Route::get('/cart', [FrontendController::class, 'keranjang']);

Route::get('/checkout', [FrontendController::class, 'pembelian']);
