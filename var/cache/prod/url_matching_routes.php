<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/adress' => [[['_route' => 'new_adress', '_controller' => 'App\\Controller\\AdressController::show'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/product' => [
            [['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null],
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/adress' => [[['_route' => 'user_adress', '_controller' => 'App\\Controller\\UserAdressController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/user_adress' => [[['_route' => 'adress', '_controller' => 'App\\Controller\\UserAdressController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/add/([^/]++)(*:20)'
                .'|/remove/([^/]++)(*:43)'
                .'|/delete/([^/]++)(*:66)'
                .'|/product/([^/]++)(*:90)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        20 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        43 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        66 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        90 => [
            [['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
