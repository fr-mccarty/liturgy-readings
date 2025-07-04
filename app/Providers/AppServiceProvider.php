<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Component;

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
        Component::macro('notify', function ($message, $status = 'success') {
            $notification = [
                'message' => $message,
                'status' => $status
            ];
            $this->dispatchBrowserEvent('notify', $notification);
        });
    }
}
