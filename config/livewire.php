<?php

return [
    'layout' => 'layouts.app',
    'asset_url' => null,
    'app_url' => null,
    'inject_assets' => true,
    'turbo' => false,
    'navigate' => true,
    'class_namespace' => 'App\Livewire',
    'view_path' => resource_path('views/livewire'),
    'component_path' => app_path('Livewire'),
    'middleware_group' => 'web',
    'back_button_cache' => false,
    'pagination_theme' => 'tailwind',
    'temporary_file_upload' => [
        'disk' => null,
        'rules' => 'file|max:5120',
        'directory' => 'livewire-tmp',
        'middleware' => null,
        'preview_mimes' => [
            'png', 'gif', 'bmp', 'svg', 'wav', 'mp4',
            'mov', 'avi', 'wmv', 'mp3', 'm4a',
            'jpg', 'jpeg', 'mpga', 'webp', 'wma',
        ],
        'max_upload_time' => 5,
    ],
    'manifest_path' => null,
    'backup_query_path' => null,
    'inject_assets' => env('LIVEWIRE_INJECT_ASSETS', true),
    'legacy_model_binding' => false,
    'pagination_theme' => 'tailwind',
];
