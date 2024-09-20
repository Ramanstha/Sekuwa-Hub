<?php

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

//////////////////////////////////////////////////////User//////////////////////////////////////////////////////

Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'Home'])->name('Home');
Route::get('/about-us',[App\Http\Controllers\Frontend\HomeController::class,'aboutus'])->name('about.us');
Route::get('/services',[App\Http\Controllers\Frontend\AboutusController::class,'service'])->name('service');
Route::get('/menus',[App\Http\Controllers\Frontend\AboutusController::class,'menu'])->name('menu');
Route::get('/contact-us',[App\Http\Controllers\Frontend\ContactusController::class,'Contact'])->name('contact');
Route::get('/our-special',[App\Http\Controllers\Frontend\ContactusController::class,'special'])->name('special');
Route::get('/testimonial',[App\Http\Controllers\Frontend\ContactusController::class,'testimonial'])->name('testimonial');


//////////////////////////////////////////////////////Admin//////////////////////////////////////////////////////

Route::get('/admin-login',[App\Http\Controllers\Auth\LoginController::class,'Login'])->name('login');
Route::post('/admin-postlogin',[App\Http\Controllers\Auth\LoginController::class,'PostLogin'])->name('login.perform');

Route::get('/admin',[App\Http\Controllers\Backend\DashboardController::class,'Dashboard'])->name('Dashboard');
// Route::group(['middleware' => ['auth']],function () {


// Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'Logout'])->name('logout');

// });

////////////////Sitesetting////////////////
Route::get('/sitesetting',[App\Http\Controllers\Backend\SitesettingController::class,'Sitesetting'])->name('create.sitesetting');
Route::post('/sitesetting-store',[App\Http\Controllers\Backend\SitesettingController::class,'Store'])->name('store.sitesetting');
Route::get('/sitesetting-view',[App\Http\Controllers\Backend\SitesettingController::class,'View'])->name('view.sitesetting');
Route::get('/sitesetting-edit/{id}',[App\Http\Controllers\Backend\SitesettingController::class,'Edit'])->name('edit.sitesetting');
Route::post('/sitesetting-update/{id}',[App\Http\Controllers\Backend\SitesettingController::class,'Update'])->name('update.sitesetting');
Route::get('/sitesetting-delete/{id}',[App\Http\Controllers\Backend\SitesettingController::class,'Delete'])->name('delete.sitesetting');
Route::get('/sitesetting-status',[App\Http\Controllers\backend\SitesettingController::class,'Status'])->name('status.sitesetting');

//////////////////Banner//////////////////
Route::get('/banner',[App\Http\Controllers\Backend\BannerController::class,'Banner'])->name('create.banner');
Route::post('/banner-store',[App\Http\Controllers\Backend\BannerController::class,'Store'])->name('store.banner');
Route::get('/banner-view',[App\Http\Controllers\Backend\BannerController::class,'View'])->name('view.banner');
Route::get('/banner-edit/{id}',[App\Http\Controllers\Backend\BannerController::class,'Edit'])->name('edit.banner');
Route::post('/banner-update/{id}',[App\Http\Controllers\Backend\BannerController::class,'Update'])->name('update.banner');
Route::get('/banner-delete/{id}',[App\Http\Controllers\Backend\BannerController::class,'Delete'])->name('delete.banner');
Route::get('/banner-status',[App\Http\Controllers\Backend\BannerController::class,'bannerstatus'])->name('status.banner');

//////////////////Aboutus//////////////////
Route::get('/aboutus',[App\Http\Controllers\Backend\AboutusController::class,'Aboutus'])->name('create.aboutus');
Route::post('/aboutus-store',[App\Http\Controllers\Backend\AboutusController::class,'Store'])->name('store.aboutus');
Route::get('/aboutus-view',[App\Http\Controllers\Backend\AboutusController::class,'View'])->name('view.aboutus');
Route::get('/aboutus-edit/{id}',[App\Http\Controllers\Backend\AboutusController::class,'Edit'])->name('edit.aboutus');
Route::post('/aboutus-update/{id}',[App\Http\Controllers\Backend\AboutusController::class,'Update'])->name('update.aboutus');
Route::get('/aboutus-delete/{id}',[App\Http\Controllers\Backend\AboutusController::class,'Delete'])->name('delete.aboutus');
Route::get('/aboutus-status',[App\Http\Controllers\Backend\AboutusController::class,'aboutusstatus'])->name('status.aboutus');

//////////////////Contact//////////////////
Route::get('/contact',[App\Http\Controllers\Backend\ContactController::class,'Contact'])->name('create.contact');
Route::post('/contact-store',[App\Http\Controllers\Backend\ContactController::class,'Store'])->name('store.contact');
Route::get('/contact-view',[App\Http\Controllers\Backend\ContactController::class,'View'])->name('view.contact');
Route::get('/contact-edit/{id}',[App\Http\Controllers\Backend\ContactController::class,'Edit'])->name('edit.contact');
Route::post('/contact-update/{id}',[App\Http\Controllers\Backend\ContactController::class,'Update'])->name('update.contact');
Route::get('/contact-delete/{id}',[App\Http\Controllers\Backend\ContactController::class,'Delete'])->name('delete.contact');
Route::get('/contact-status',[App\Http\Controllers\Backend\ContactController::class,'contactstatus'])->name('status.contact');

//////////////////socialmedia//////////////////
Route::get('/socialmedia',[App\Http\Controllers\Backend\SocialmediaController::class,'Socialmedia'])->name('create.socialmedia');
Route::post('/socialmedia-store',[App\Http\Controllers\Backend\SocialmediaController::class,'Store'])->name('store.socialmedia');
Route::get('/socialmedia-view',[App\Http\Controllers\Backend\SocialmediaController::class,'View'])->name('view.socialmedia');
Route::get('/socialmedia-edit/{id}',[App\Http\Controllers\Backend\SocialmediaController::class,'Edit'])->name('edit.socialmedia');
Route::post('/socialmedia-update/{id}',[App\Http\Controllers\Backend\SocialmediaController::class,'Update'])->name('update.socialmedia');
Route::get('/socialmedia-delete/{id}',[App\Http\Controllers\Backend\SocialmediaController::class,'Delete'])->name('delete.socialmedia');
Route::get('/socialmedia-status',[App\Http\Controllers\Backend\SocialmediaController::class,'socialmediastatus'])->name('status.socialmedia');

//////////////////Gallery//////////////////
Route::get('/gallery',[App\Http\Controllers\Backend\GalleryController::class,'Gallery'])->name('create.gallery');
Route::post('/gallery-store',[App\Http\Controllers\Backend\GalleryController::class,'Store'])->name('store.gallery');
Route::get('/gallery-view',[App\Http\Controllers\Backend\GalleryController::class,'View'])->name('view.gallery');
Route::get('/gallery-edit/{id}',[App\Http\Controllers\Backend\GalleryController::class,'Edit'])->name('edit.gallery');
Route::post('/gallery-update/{id}',[App\Http\Controllers\Backend\GalleryController::class,'Update'])->name('update.gallery');
Route::get('/gallery-delete/{id}',[App\Http\Controllers\Backend\GalleryController::class,'Delete'])->name('delete.gallery');
Route::get('/gallery-status',[App\Http\Controllers\Backend\GalleryController::class,'gallerystatus'])->name('status.gallery');

//////////////////Special//////////////////
Route::get('/special',[App\Http\Controllers\Backend\SpecialController::class,'Special'])->name('create.special');
Route::post('/special-store',[App\Http\Controllers\Backend\SpecialController::class,'Store'])->name('store.special');
Route::get('/special-view',[App\Http\Controllers\Backend\SpecialController::class,'View'])->name('view.special');
Route::get('/special-edit/{id}',[App\Http\Controllers\Backend\SpecialController::class,'Edit'])->name('edit.special');
Route::post('/special-update/{id}',[App\Http\Controllers\Backend\SpecialController::class,'Update'])->name('update.special');
Route::get('/special-delete/{id}',[App\Http\Controllers\Backend\SpecialController::class,'Delete'])->name('delete.special');
Route::get('/special-status',[App\Http\Controllers\Backend\SpecialController::class,'specialstatus'])->name('status.special');

/////////////////Client//////////////////
Route::get('/client',[App\Http\Controllers\Backend\ClientController::class,'client'])->name('create.client');
Route::post('/client-store',[App\Http\Controllers\Backend\ClientController::class,'Store'])->name('store.client');
Route::get('/client-view',[App\Http\Controllers\Backend\ClientController::class,'View'])->name('view.client');
Route::get('/client-edit/{id}',[App\Http\Controllers\Backend\ClientController::class,'Edit'])->name('edit.client');
Route::post('/client-update/{id}',[App\Http\Controllers\Backend\ClientController::class,'Update'])->name('update.client');
Route::get('/client-delete/{id}',[App\Http\Controllers\Backend\ClientController::class,'Delete'])->name('delete.client');
Route::get('/client-status',[App\Http\Controllers\Backend\ClientController::class,'clientstatus'])->name('status.client');

/////////////////Category//////////////////
Route::get('/category',[App\Http\Controllers\Backend\CategoryController::class,'Category'])->name('create.category');
Route::post('/category-store',[App\Http\Controllers\Backend\CategoryController::class,'Store'])->name('store.category');
Route::get('/category-view',[App\Http\Controllers\Backend\CategoryController::class,'View'])->name('view.category');
Route::get('/category-edit/{id}',[App\Http\Controllers\Backend\CategoryController::class,'Edit'])->name('edit.category');
Route::post('/category-update/{id}',[App\Http\Controllers\Backend\CategoryController::class,'Update'])->name('update.category');
Route::get('/category-delete/{id}',[App\Http\Controllers\Backend\CategoryController::class,'Delete'])->name('delete.category');
Route::get('/category-status',[App\Http\Controllers\Backend\CategoryController::class,'categorystatus'])->name('status.category');

/////////////////Subcategory//////////////////
Route::get('/subcategory',[App\Http\Controllers\Backend\SubcategoryController::class,'Subcategory'])->name('create.subcategory');
Route::post('/subcategory-store',[App\Http\Controllers\Backend\SubcategoryController::class,'Store'])->name('store.subcategory');
Route::get('/subcategory-view',[App\Http\Controllers\Backend\SubcategoryController::class,'View'])->name('view.subcategory');
Route::get('/subcategory-edit/{id}',[App\Http\Controllers\Backend\SubcategoryController::class,'Edit'])->name('edit.subcategory');
Route::post('/subcategory-update/{id}',[App\Http\Controllers\Backend\SubcategoryController::class,'Update'])->name('update.subcategory');
Route::get('/subcategory-delete/{id}',[App\Http\Controllers\Backend\SubcategoryController::class,'Delete'])->name('delete.subcategory');
Route::get('/subcategory-status',[App\Http\Controllers\Backend\SubcategoryController::class,'subcategorystatus'])->name('status.subcategory');

/////////////////Menu//////////////////
Route::get('/menu',[App\Http\Controllers\Backend\MenuController::class,'Menu'])->name('create.menu');
Route::post('/menu-store',[App\Http\Controllers\Backend\MenuController::class,'Store'])->name('store.menu');
Route::get('/menu-view',[App\Http\Controllers\Backend\MenuController::class,'View'])->name('view.menu');
Route::get('/menu-edit/{id}',[App\Http\Controllers\Backend\MenuController::class,'Edit'])->name('edit.menu');
Route::post('/menu-update/{id}',[App\Http\Controllers\Backend\MenuController::class,'Update'])->name('update.menu');
Route::get('/menu-delete/{id}',[App\Http\Controllers\Backend\MenuController::class,'Delete'])->name('delete.menu');
Route::get('/menu-status',[App\Http\Controllers\Backend\MenuController::class,'menustatus'])->name('status.menu');

//////////////////////////////////////////////////////////////User//////////////////////////////////////////////////////////////


