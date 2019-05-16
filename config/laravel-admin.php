<?php

return [
    'default_body_classes' => [],

    'use_bootstrap_cdn' => true,

    'use_fontawesome' => true,
    'fontawesome_url' => 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',

    'show_header_search' => true,

    'show_account_dropdown' => true,
    'account_dropdown_menu' => [
        [
            'url' => '/user/profile',
            'label' => 'Profile'
        ],
        [
            'url' => '/user/preferences',
            'label' => 'Preferences',
        ]
    ],

    'main_navigation' => [
        [
            "url" => "/",
            "label" => "Dashboard",
            "icon" => "<i class='fa fa-fw fa-home'></i>",
            "is_home" => true,
        ],
        'products' => [
            "url" => "/products",
            "label" => "Products",
            "icon" => "<i class='fa fa-fw fa-shopping-bag'></i>",
            "children" => [
                [
                    "url" => "/product-1",
                    "label" => "Product One"
                ],
                [
                    "url" => "/product-2",
                    "label" => "Product Two",
                    "children" => [
                        [
                            "url" => "/version1",
                            "label" => "Product Version 1",
                        ],
                        [
                            "url" => "/version2",
                            "label" => "Alternate Version",
                        ],
                    ]
                ],
                [
                    "url" => "/product-3",
                    "label" => "Another Product"
                ],
                [
                    "url" => "/product-4",
                    "label" => "Big Long Product Name"
                ]
            ]
        ],
        'services' => [
            "url" => "/services",
            "label" => "Services",
            "icon" => "<i class='fa fa-fw fa-cubes'></i>",
            "auth" => "test_permission"
        ],
        'messages' => [
            "url" => "/messages",
            "label" => "Messages",
            "icon" => "<i class='fa fa-fw fa-envelope-o'></i>",
            "auth" => ["can_view" => App\Message::class]
        ],
        'settings' => [
            "url" => "/settings",
            "label" => "Settings",
            "icon" => "<i class='fa fa-fw fa-gears'></i>"
        ],
    ]
];
