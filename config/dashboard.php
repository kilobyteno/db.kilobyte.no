<?php

return [
    /*
     * The dashboard supports these themes:
     *
     * - light: always use light mode
     * - dark: always use dark mode
     * - device: follow the OS preference for determining light or dark mode
     * - auto: use light mode when the sun is up, dark mode when the sun is down
     */
    'theme' => 'device',

    /*
     * When the dashboard uses the `auto` theme, these coordinates will be used
     * to determine whether the sun is up or down.
     */
    'auto_theme_location' => [
        'lat' => 51.260197,
        'lng' => 4.402771,
    ],

    /*
     * These scripts will be loaded when the dashboard is displayed.
     */
    'scripts' => [
        'alpinejs' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js',
    ],

    /*
     * These stylesheets will be loaded when the dashboard is displayed.
     */
    'stylesheets' => [
        'inter' => 'https://rsms.me/inter/inter.css',
    ],

    'tiles' => [
        'forge' => [
            'token' => env('FORGE_API_TOKEN'),
            'servers' => [
                'refresh_interval_in_seconds' => 3600,
            ],
            'recent_events' => [
                'refresh_interval_in_seconds' => 60,
            ],
        ],
        'plausible' => [
            'refresh_interval_in_seconds' => 60,
            'domains' => ['kilobyte.no', 'pokemon3d.net', 'lanms.net', 'dsbilling.no', 'mistetdisk.no', 'svelvikdiskgolfklubb.no', 'downlinkdg.no'],
        ],
        'packagist' => [
            'refresh_interval_in_seconds' => 300,
            'sort' => 'total', // options: name, daily, monthly, total, empty means no sorting.
            'reverse' => true, // reverse the order
            'with_abandoned' => true, // set to false to ignore them
            'display' => [
                'totals' => true,
                'faves' => true, // packagist faces
                'github_stars' => true, // github stars
            ],
            'vendors' => [
                // vendors from which you want to see all the packages
                'kilobyteno',
                'danielrtrd',
            ],
            'packages' => [], // specific packages that you want to see.
        ],
    ],
];
