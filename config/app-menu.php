<?php

use App\Helpers\HtmlTagAtrributeHelpers;

return [
    'right' => [
        [
            'label' => 'Settings',
            'show_if_auth_is' => 'auth', //auth|no-auth|both -> default= both
            'subItems' => [
                [
                    'title' => 'Users',
                    'url' => '#!',
                    'route' => 'users.index',
                    'show_if_auth_is' => 'auth',
                    'icon' => null,
                    'attributes' => HtmlTagAtrributeHelpers::arrayToAtrributes([
                        // 'target' => '_blank',
                    ]),
                ],
            ],
        ],
        [
            'label' => 'User',
            'show_if_auth_is' => 'both',
            'subItems' => [
                [
                    'title' => 'Login',
                    'url' => '#!',
                    'show_if_auth_is' => 'no-auth',
                    'icon' => null,
                    'attributes' => HtmlTagAtrributeHelpers::arrayToAtrributes([]),
                ],
                [
                    'title' => 'Reset password',
                    'url' => '#!',
                    'show_if_auth_is' => 'no-auth',
                    'icon' => null,
                    'attributes' => HtmlTagAtrributeHelpers::arrayToAtrributes([]),
                ],
                [
                    'title' => 'Settings',
                    'url' => '#!',
                    'show_if_auth_is' => 'auth',
                    'icon' => null,
                    'attributes' => HtmlTagAtrributeHelpers::arrayToAtrributes([]),
                ],
                [
                    'title' => 'Logout',
                    'url' => '#!',
                    'show_if_auth_is' => 'auth',
                    'icon' => null,
                    'attributes' => HtmlTagAtrributeHelpers::arrayToAtrributes([]),
                ],
            ],
        ],
    ],

    'left' => [
        [
            'label' => 'Settings',
            'show_if_auth_is' => 'auth', //auth|no-auth|both -> default= both
            'subItems' => [
                [
                    'title' => 'Users',
                    'url' => '#!',
                    'route' => 'users.index',
                    'show_if_auth_is' => 'auth',
                    'icon' => null,
                    'attributes' => HtmlTagAtrributeHelpers::arrayToAtrributes([
                        // 'target' => '_blank',
                    ]),
                ],
            ],
        ],
    ],
];
