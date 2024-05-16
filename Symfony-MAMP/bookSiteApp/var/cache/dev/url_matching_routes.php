<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'book_index', '_controller' => 'App\\Controller\\BookListController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookListController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)(?'
                    .'|/edit(*:59)'
                    .'|(*:66)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookListController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        66 => [
            [['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookListController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
