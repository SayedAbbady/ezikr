<?php

namespace App\Providers;

use App\Models\inquer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class MasterViewServicerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('inquers')){
            $notifi = inquer::where('seen','0')->count();
            View::share('notifi',$notifi);
        }
    }
}
