<?php

return [

    // Broadcasting (Optional)
    'broadcasting' => [

        // Uncomment if you want to enable real-time notifications
        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],
    ],

    // Default Filesystem Disk
    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    // Assets Path
    'assets_path' => null,

    // Cache Path
    'cache_path' => base_path('bootstrap/cache/filament'),

    // Livewire Loading Delay
    'livewire_loading_delay' => 'default',

    // **Panels Section (Add this)**
    'panels' => [
        'default' => [
            'id' => 'default',
            'path' => '/',
            'resources' => [], // Add resources here
            'pages' => [],
            'widgets' => [],
        ],
    ],
];
