<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/registrate' => [[['_route' => 'index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::loginUserForm'], null, ['GET' => 0], null, false, false, null]],
        '/user/login' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\UserController::loginUser'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'mainPage', '_controller' => 'App\\Controller\\StorefrontController::mainPage'], null, null, null, false, false, null]],
        '/order/create' => [[['_route' => 'add_order', '_controller' => 'App\\Controller\\StorefrontController::createOrder'], null, ['POST' => 0], null, false, false, null]],
        '/user/register' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::registerUser'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logoutUser'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\UserController::error'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'show_user', '_controller' => 'App\\Controller\\UserController::showUser'], null, ['POST' => 0], null, true, false, null]],
        '/user/delete' => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], null, ['POST' => 0], null, false, false, null]],
        '/user/update' => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::updateUser'], null, ['POST' => 0], null, false, false, null]],
        '/user/find' => [[['_route' => 'found_user', '_controller' => 'App\\Controller\\UserController::showUser'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
