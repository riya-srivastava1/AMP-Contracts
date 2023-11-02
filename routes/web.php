<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\FooterController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\SubMenuController;
use App\Http\Controllers\Dashboard\ContactUsController;
use App\Http\Controllers\Dashboard\NewsLetterController;
use App\Http\Controllers\Dashboard\BannerImageController;
use App\Http\Controllers\Dashboard\SocialMediaController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\Dashboard\WebSiteInfoController;
use App\Http\Controllers\Dashboard\GalleryImageController;
use App\Http\Controllers\Dashboard\FooterContactUsController;
use App\Http\Controllers\FrontEndController\GalleryController;


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

Route::get('cache-clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::post('/user/status/{id}', [UserController::class, 'status'])->name('user.status');
    Route::resource('/website', WebSiteInfoController::class);
    Route::get('/trash/website', [WebSiteInfoController::class, 'trash'])->name('trash.website');
    Route::post('/restore/website/{id}', [WebSiteInfoController::class, 'restore'])->name('restore.website');
    Route::post('/delete/website/{id}', [WebSiteInfoController::class, 'delete'])->name('delete.website');

    //testimonial
    Route::resource('/testimonial', TestimonialController::class);
    Route::get('/trash/testimonial', [TestimonialController::class, 'trash'])->name('trash.testimonial');
    Route::post('/restore/testimonial/{id}', [TestimonialController::class, 'restore'])->name('restore.testimonial');
    Route::post('/delete/testimonial/{id}', [TestimonialController::class, 'delete'])->name('delete.testimonial');
    Route::post('/testimonial/status/{id}', [TestimonialController::class, 'status'])->name('testimonial.status');


    //gallery image
    Route::resource('/galleryimage', GalleryImageController::class);
    Route::get('/trash/galleryimage', [GalleryImageController::class, 'trash'])->name('trash.galleryimage');
    Route::post('/restore/galleryimage/{id}', [GalleryImageController::class, 'restore'])->name('restore.galleryimage');
    Route::post('/delete/galleryimage/{id}', [GalleryImageController::class, 'delete'])->name('delete.galleryimage');
    Route::post('/galleryimage/status/{id}', [GalleryImageController::class, 'status'])->name('galleryimage.status');
    Route::get('/slider', [GalleryImageController::class, 'slider'])->name('slider');

    //banner image
    Route::resource('/bannerimage', BannerImageController::class);
    Route::get('/trash/bannerimage', [BannerImageController::class, 'trash'])->name('trash.bannerimage');
    Route::post('/restore/bannerimage/{id}', [BannerImageController::class, 'restore'])->name('restore.bannerimage');
    Route::post('/delete/bannerimage/{id}', [BannerImageController::class, 'delete'])->name('delete.bannerimage');
    Route::post('/bannerimage/status/{id}', [BannerImageController::class, 'status'])->name('bannerimage.status');

    //page
    Route::resource('/page', PageController::class);
    Route::get('/trash/page', [PageController::class, 'trash'])->name('trash.page');
    Route::post('/restore/page/{id}', [PageController::class, 'restore'])->name('restore.page');
    Route::post('/delete/page/{id}', [PageController::class, 'delete'])->name('delete.page');
    Route::post('/page/menu/{id}', [PageController::class, 'menu'])->name('page.menu');
    Route::post('/page/status/{id}', [PageController::class, 'status'])->name('page.status');


    //submenu
    Route::resource('/submenu', SubMenuController::class);
    Route::get('/trash/submenu', [SubMenuController::class, 'trash'])->name('trash.submenu');
    Route::post('/restore/submenu/{id}', [SubMenuController::class, 'restore'])->name('restore.submenu');
    Route::post('/delete/submenu/{id}', [SubMenuController::class, 'delete'])->name('delete.submenu');
    Route::post('/submenu/status/{id}', [SubMenuController::class, 'status'])->name('submenu.status');

    //footer
    Route::resource('/footer', FooterController::class);
    Route::get('/trash/footer', [FooterController::class, 'trash'])->name('trash.footer');
    Route::post('/restore/footer/{id}', [FooterController::class, 'restore'])->name('restore.footer');
    Route::post('/delete/footer/{id}', [FooterController::class, 'delete'])->name('delete.footer');

    //Social Media
    Route::resource('/social', SocialMediaController::class);
    Route::post('/social/status/{id}', [SocialMediaController::class, 'status'])->name('social.status');
    Route::get('/trash/social', [SocialMediaController::class, 'trash'])->name('trash.social');
    Route::post('/restore/social/{id}', [SocialMediaController::class, 'restore'])->name('restore.social');
    Route::post('/delete/social/{id}', [SocialMediaController::class, 'delete'])->name('delete.social');

    //News Letter
    Route::get('/export/newsletter', [NewsLetterController::class, 'exportNewsletterEmail'])->name('export.newsletter');
    Route::get('/export/contact-us', [ContactUsController::class, 'exportContactUs'])->name('export.contact.us');



    //Contact Us
    Route::post('/contact/status/{id}', [ContactUsController::class, 'status'])->name('contact.status');
    Route::get('/trash/contact', [ContactUsController::class, 'trash'])->name('trash.contact');
    Route::post('/restore/contact/{id}', [ContactUsController::class, 'restore'])->name('restore.contact');
    Route::post('/delete/contact/{id}', [ContactUsController::class, 'delete'])->name('delete.contact');

    //Footer Contact Us
    Route::resource('/footercontact', FooterContactUsController::class);
    Route::post('/footercontact/status/{id}', [FooterContactUsController::class, 'status'])->name('footercontact.status');
    Route::get('/trash/footercontact', [FooterContactUsController::class, 'trash'])->name('trash.footercontact');
    Route::post('/restore/footercontact/{id}', [FooterContactUsController::class, 'restore'])->name('restore.footercontact');

    // Project
    Route::resource('/project', ProjectController::class);
    Route::post('/delete/project/{id}', [ProjectController::class, 'delete'])->name('delete.project');
});


require __DIR__ . '/auth.php';

Route::resource('/news', NewsLetterController::class);
Route::resource('/contact', ContactUsController::class);
Route::get('/', [GalleryController::class, 'slideshow'])->name('home');
Route::get('/about-us', [GalleryController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [GalleryController::class, 'contactUs'])->name('contact.us');
Route::get('/services', [GalleryController::class, 'services'])->name('services');
Route::get('/projects', [GalleryController::class, 'projects'])->name('projects');
Route::get('/pages/{slug}', [PageController::class, 'slug'])->name('add.page.slug');

