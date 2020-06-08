<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\category;
use App\Helper\CartHelper;
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
        // view()->share([
        //     'category'=> Category::where('status',1)->get()
        // ]);
        // 5.share view chung cho các  trang khác nữa
           view()->composer('*',function($view){
            $view->with([

                'category'=>Category::where('status',1)->get(),
                 'cart'=>new CartHelper()

            ]);

           });

    }
}
