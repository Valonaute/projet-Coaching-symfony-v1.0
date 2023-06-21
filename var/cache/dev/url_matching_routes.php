<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/review' => [[['_route' => 'app_review', '_controller' => 'App\\Controller\\ReviewController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PublicController::showHome'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserSecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserSecurityController::logout'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\PublicController::showFormations'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'forum', '_controller' => 'App\\Controller\\PublicController::showForum'], null, null, null, false, false, null]],
        '/store' => [[['_route' => 'store', '_controller' => 'App\\Controller\\PublicController::showStore'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\PublicController::showBlog'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\PublicController::showConnexion'], null, null, null, false, false, null]],
        '/mapsite' => [[['_route' => 'mapsite', '_controller' => 'App\\Controller\\PublicController::showMapsite'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\PublicController::showContact'], null, null, null, false, false, null]],
        '/valonauteinc' => [[['_route' => 'valonauteinc', '_controller' => 'App\\Controller\\PublicController::showValonauteinc'], null, null, null, false, false, null]],
        '/careers' => [[['_route' => 'careers', '_controller' => 'App\\Controller\\PublicController::showCareers'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\PublicController::showCgu'], null, null, null, false, false, null]],
        '/rgpd' => [[['_route' => 'rgpd', '_controller' => 'App\\Controller\\PublicController::showRgpd'], null, null, null, false, false, null]],
        '/user/home' => [[['_route' => 'user_home', '_controller' => 'App\\Controller\\UserSecurityController::showHome'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\AdminSecurityController::showDashboard'], null, null, null, false, false, null]],
        '/category/show' => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\CategoryController::showCategory'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryController::createCategory'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'show_product', '_controller' => 'App\\Controller\\ProductController::showProducts'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createproduct'], null, null, null, false, false, null]],
        '/admin/article/create' => [[['_route' => 'create_article', '_controller' => 'App\\Controller\\ArticleController::createArticle'], null, null, null, false, false, null]],
        '/articles/show' => [[['_route' => 'show_article', '_controller' => 'App\\Controller\\ArticleController::showArticles'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|category/(?'
                        .'|update/([^/]++)(*:206)'
                        .'|delete/([^/]++)(*:229)'
                    .')'
                    .'|product/(?'
                        .'|update/([^/]++)(*:264)'
                        .'|delete/([^/]++)(*:287)'
                    .')'
                    .'|article/(?'
                        .'|update/([^/]++)(*:322)'
                        .'|delete/([^/]++)(*:345)'
                    .')'
                .')'
                .'|/product/([^/]++)(*:372)'
                .'|/cart/add/([^/]++)(*:398)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'update_category', '_controller' => 'App\\Controller\\CategoryController::updateCategory'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        264 => [[['_route' => 'update_product', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'update_article', '_controller' => 'App\\Controller\\ArticleController::updateArticle'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\ArticleController::deleteArticle'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'product_front', '_controller' => 'App\\Controller\\ProductController::showProductFront'], ['id'], null, null, false, true, null]],
        398 => [
            [['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
