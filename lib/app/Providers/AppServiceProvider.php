<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cate;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $data['cate'] = Cate::where('parent_cate_id', 0)->get();
        $data['cate2'] = Cate::where('parent_cate_id', '!=', 0)->get();
        $data['cate3'] = Cate::all();
        $data['page'] = Page::where('page_status', '!=', 1)->get();
        $data['page_favicon'] = Page::select('page_image', 'meta_key', 'meta_desc')->where('page_status', '==', 1)->first();
        view()->share($data);
    }
}
