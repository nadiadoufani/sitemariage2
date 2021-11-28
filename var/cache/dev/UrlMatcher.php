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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/centre/de/beaute' => [[['_route' => 'centre_de_beaute', '_controller' => 'App\\Controller\\CentreDeBeauteController::index'], null, null, null, false, false, null]],
        '/coiffure' => [[['_route' => 'coiffure', '_controller' => 'App\\Controller\\CoiffureController::index'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'comment_add', '_controller' => 'App\\Controller\\CommentaireController::add'], null, null, null, false, false, null]],
        '/comment/add1' => [[['_route' => 'comment_add1', '_controller' => 'App\\Controller\\CommentaireController::add1'], null, null, null, false, false, null]],
        '/comment/add2' => [[['_route' => 'comment_add2', '_controller' => 'App\\Controller\\CommentaireController::add2'], null, null, null, false, false, null]],
        '/comment/add3' => [[['_route' => 'comment_add3', '_controller' => 'App\\Controller\\CommentaireController::add3'], null, null, null, false, false, null]],
        '/comment/add4' => [[['_route' => 'comment_add4', '_controller' => 'App\\Controller\\CommentaireController::add4'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/costume' => [[['_route' => 'costume', '_controller' => 'App\\Controller\\CostumeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/musique/de/mariage' => [[['_route' => 'musique_de_mariage', '_controller' => 'App\\Controller\\MusiqueDeMariageController::index'], null, null, null, false, false, null]],
        '/photographe' => [[['_route' => 'photographe', '_controller' => 'App\\Controller\\PhotographeController::index'], null, null, null, false, false, null]],
        '/publicite1' => [[['_route' => 'publicite1', '_controller' => 'App\\Controller\\Publicite1Controller::index'], null, null, null, false, false, null]],
        '/publicite3' => [[['_route' => 'publicite3', '_controller' => 'App\\Controller\\Publicite3Controller::index'], null, null, null, false, false, null]],
        '/publicite' => [[['_route' => 'publicite', '_controller' => 'App\\Controller\\PubliciteController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/rendez/vous' => [[['_route' => 'rendez_vous', '_controller' => 'App\\Controller\\RendezVousController::index'], null, null, null, false, false, null]],
        '/salle/de/mariage' => [[['_route' => 'salle_de_mariage', '_controller' => 'App\\Controller\\SalleDeMariageController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/traiteurs' => [[['_route' => 'traiteurs', '_controller' => 'App\\Controller\\TraiteursController::index'], null, null, null, false, false, null]],
        '/voyage/de/noce' => [[['_route' => 'voyage_de_noce', '_controller' => 'App\\Controller\\VoyageDeNoceController::index'], null, null, null, false, false, null]],
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
                .'|/api/([^/]++)/edit(*:187)'
                .'|/calendar/([^/]++)(?'
                    .'|(*:216)'
                    .'|/edit(*:229)'
                    .'|(*:237)'
                .')'
                .'|/home/(?'
                    .'|detail(?'
                        .'|/(?'
                            .'|musique/([^/]++)(*:284)'
                            .'|centre/([^/]++)(*:307)'
                            .'|([^/]++)(*:323)'
                        .')'
                        .'|s/([^/]++)(*:342)'
                    .')'
                    .'|([^/]++)(*:359)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        216 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        284 => [[['_route' => 'home_detail_musique', '_controller' => 'App\\Controller\\HomeController::detailmusique'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'home_detail_centre', '_controller' => 'App\\Controller\\HomeController::detailcentre'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'home_detail', '_controller' => 'App\\Controller\\HomeController::detail'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'home_details', '_controller' => 'App\\Controller\\HomeController::details'], ['id'], null, null, false, true, null]],
        359 => [
            [['_route' => 'home_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
