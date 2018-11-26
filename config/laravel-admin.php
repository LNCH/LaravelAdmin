<?php

return [
    'default_body_classes' => [],
    'bootstrap_url' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',

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
            "title" => "Menu",
        ],
        [
            "url" => "/",
            "label" => "Dashboard",
            "icon" => "<i class='fa fa-fw fa-home'></i>"
        ],
        [
            "url" => "/products",
            "label" => "Products",
            "icon" => "<i class='fa fa-fw fa-shopping-bag'></i>",
            "counter" => 2,
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
        [
            "url" => "/services",
            "label" => "Services",
            "icon" => "<i class='fa fa-fw fa-cubes'></i>"
        ],
        [
            "url" => "/messages",
            "label" => "Messages",
            "counter" => 4,
            "icon" => "<i class='fa fa-fw fa-envelope-o'></i>"
        ],
        [
            "url" => "/settings",
            "label" => "Settings",
            "icon" => "<i class='fa fa-fw fa-gears'></i>"
        ],
    ]
];
