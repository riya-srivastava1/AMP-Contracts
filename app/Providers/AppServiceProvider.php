<?php

namespace App\Providers;

use App\Models\NewsLetter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Page;
use App\Models\SocialMedia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        View::composer('frontEnd.layouts.includes.header', function ($view) {
            $menus = Page::where(['is_menu' => '1', 'is_active' => '1'])->get(['title_name', 'slug_url']);
            $view->with([
                'menus' => $menus
            ]);
        });

        View::composer('frontEnd.layouts.includes.footer', function ($view) {
            $SocialMedias = SocialMedia::where('is_active', '1')->get();
            $newsletter = NewsLetter::get();
            $view->with([
                'SocialMedias' => $SocialMedias,
                'newsletter' => $newsletter,
            ]);
        });
    }
}
