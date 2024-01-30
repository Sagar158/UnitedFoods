<?php

use App\Models\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CertificationsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Frontend\HomeController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('the-team','team')->name('management-team');
    Route::get('/','index')->name('home');
    Route::get('about-us','aboutus')->name('about-us');
    Route::get('product','products')->name('product');
    Route::get('event','events')->name('event');
    Route::get('contactus','contactus')->name('contactus');
    Route::post('contact/store','contactStore')->name('contactStore');
    Route::get('certificates','certificates')->name('certificates');
    Route::get('privacypolicy','privacypolicy')->name('privacypolicy');
    Route::get('terms','terms')->name('terms');
    Route::get('event/{id}/details','eventDetails')->name('eventDetails');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::prefix('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('edit','edit')->name('edit');
    });

    Route::name('home.certifications.')->prefix('certifications')->controller(CertificationsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
        Route::get('data','getCertificationsData')->name('getCertificationsData');
    });

    Route::name('home.slider.')->prefix('slider')->controller(SliderController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
        Route::get('data','getSlidersData')->name('getSlidersData');
    });

    Route::name('home.aboutus.')->prefix('home/about-us')->controller(AboutUsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
    });

    Route::name('home.aboutus.team.')->prefix('team')->controller(TeamsController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('data','getTeamData')->name('getTeamData');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
    });

    Route::name('products.')->prefix('products')->controller(ProductsController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
        Route::get('data','getProductData')->name('getProductData');
    });

    Route::name('events.')->prefix('events')->controller(EventController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('data','getEventData')->name('getEventData');
    });

    Route::name('contact-us.')->prefix('contact-us')->controller(ContactUsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('data','getContactData')->name('getContactData');
        Route::get('show/{id}','show')->name('show');
        Route::post('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/information', 'information')->name('information');
        Route::post('information/update/{id}', 'update')->name('information.update');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('theme/change/{theme}',[ThemeController::class,'changeTheme'])->name('theme.change');

});

require __DIR__.'/auth.php';
