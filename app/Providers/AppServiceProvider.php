<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 411feb6 (modification page)

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
<<<<<<< HEAD
        //
    }
}
=======
        // Fix erreur "Key too long" MySQL (utf8mb4)
        Schema::defaultStringLength(191);
    }
}
>>>>>>> 411feb6 (modification page)
