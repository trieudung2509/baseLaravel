<?php

namespace App\Providers;

use App\Enum\SystemEnum;
use App\Models\Cate_post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    private $limit_Category = 5;
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Cate_post::where([
            'status' => SystemEnum::SYSTEM_STATUS,
            'deleted_at' => NULL
        ])->select('name_vi','slug_vi')->get();
        View::share('categories', $categories);
    }
}
