<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/registrate']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::loginUserForm'], [], [['text', '/login']], [], [], []],
    'login_user' => [[], ['_controller' => 'App\\Controller\\UserController::loginUser'], [], [['text', '/user/login']], [], [], []],
    'mainPage' => [[], ['_controller' => 'App\\Controller\\StorefrontController::mainPage'], [], [['text', '/']], [], [], []],
    'add_order' => [[], ['_controller' => 'App\\Controller\\StorefrontController::createOrder'], [], [['text', '/order/create']], [], [], []],
    'add_user' => [[], ['_controller' => 'App\\Controller\\UserController::registerUser'], [], [['text', '/user/register']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logoutUser'], [], [['text', '/logout']], [], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\UserController::error'], [], [['text', '/error']], [], [], []],
    'show_user' => [[], ['_controller' => 'App\\Controller\\UserController::showUser'], [], [['text', '/user/']], [], [], []],
    'delete_user' => [[], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['text', '/user/delete']], [], [], []],
    'update_user' => [[], ['_controller' => 'App\\Controller\\UserController::updateUser'], [], [['text', '/user/update']], [], [], []],
    'found_user' => [[], ['_controller' => 'App\\Controller\\UserController::showUser'], [], [['text', '/user/find']], [], [], []],
];