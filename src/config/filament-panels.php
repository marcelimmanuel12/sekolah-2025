<?php

use App\Providers\Filament\AdminPanelProvider;
use App\Providers\Filament\MuridPanelProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Panels
    |--------------------------------------------------------------------------
    |
    | This array is where you may specify all of the panel providers used by
    | your application. Multiple panels may be registered here.
    |
    */

    'panels' => [
        AdminPanelProvider::class,
        MuridPanelProvider::class, // ← Tambahkan ini
    ],

];
