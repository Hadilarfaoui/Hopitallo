<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/event_admin' => [[['_route' => 'event_admin', '_controller' => 'App\\Controller\\AdminDashboardController::event_admin'], null, null, null, false, false, null]],
        '/hopitaux_admin' => [[['_route' => 'hopitaux_admin', '_controller' => 'App\\Controller\\AdminDashboardController::hopitaux_admin'], null, null, null, false, false, null]],
        '/participant_admin' => [[['_route' => 'participant_admin', '_controller' => 'App\\Controller\\AdminDashboardController::participant_admin'], null, null, null, false, false, null]],
        '/service_admin' => [[['_route' => 'service_admin', '_controller' => 'App\\Controller\\AdminDashboardController::service_admin'], null, null, null, false, false, null]],
        '/utilisateur_admin' => [[['_route' => 'utilisateur_admin', '_controller' => 'App\\Controller\\AdminDashboardController::utilisateur_admin'], null, null, null, false, false, null]],
        '/admin/event' => [[['_route' => 'app_admin_event_index', '_controller' => 'App\\Controller\\AdminEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/event/new' => [[['_route' => 'app_admin_event_new', '_controller' => 'App\\Controller\\AdminEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/participant' => [[['_route' => 'app_admin_participant_index', '_controller' => 'App\\Controller\\AdminParticipantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/participant/new' => [[['_route' => 'app_admin_participant_new', '_controller' => 'App\\Controller\\AdminParticipantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [
            [['_route' => 'event_index', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null],
            [['_route' => 'event', '_controller' => 'App\\Controller\\HomeController::event'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/hopital' => [[['_route' => 'hopital', '_controller' => 'App\\Controller\\HomeController::hopital'], null, null, null, false, false, null]],
        '/hopital_details' => [[['_route' => 'hopital_details', '_controller' => 'App\\Controller\\HomeController::hopital_details'], null, null, null, false, false, null]],
        '/medecin' => [[['_route' => 'medecin', '_controller' => 'App\\Controller\\HomeController::medecin'], null, null, null, false, false, null]],
        '/rdv' => [[['_route' => 'rdv', '_controller' => 'App\\Controller\\HomeController::rdv'], null, null, null, false, false, null]],
        '/hopital_urgence' => [[['_route' => 'hopital_urgence', '_controller' => 'App\\Controller\\HomeController::hopital_urgence'], null, null, null, false, false, null]],
        '/urgence' => [[['_route' => 'urgence', '_controller' => 'App\\Controller\\HomeController::urgence'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\HomeController::profil'], null, null, null, false, false, null]],
        '/medecin_dashboard' => [[['_route' => 'app_medecin_dashboard', '_controller' => 'App\\Controller\\MedecinDashboardController::index'], null, null, null, false, false, null]],
        '/medecin_profil' => [[['_route' => 'medecin_profil', '_controller' => 'App\\Controller\\MedecinDashboardController::medecin_profil'], null, null, null, false, false, null]],
        '/medecin_rdv' => [[['_route' => 'medecin_rdv', '_controller' => 'App\\Controller\\MedecinDashboardController::medecin_rdv'], null, null, null, false, false, null]],
        '/medecin_urgence' => [[['_route' => 'medecin_urgence', '_controller' => 'App\\Controller\\MedecinDashboardController::medecin_urgence'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|event/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|participant/([^/]++)(?'
                        .'|(*:84)'
                        .'|/edit(*:96)'
                        .'|(*:103)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:144)'
                    .'|wdt/([^/]++)(*:164)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:210)'
                            .'|router(*:224)'
                            .'|exception(?'
                                .'|(*:244)'
                                .'|\\.css(*:257)'
                            .')'
                        .')'
                        .'|(*:267)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_admin_event_show', '_controller' => 'App\\Controller\\AdminEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_admin_event_edit', '_controller' => 'App\\Controller\\AdminEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'app_admin_event_delete', '_controller' => 'App\\Controller\\AdminEventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_admin_participant_show', '_controller' => 'App\\Controller\\AdminParticipantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_admin_participant_edit', '_controller' => 'App\\Controller\\AdminParticipantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [[['_route' => 'app_admin_participant_delete', '_controller' => 'App\\Controller\\AdminParticipantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        144 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        164 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        210 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        224 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        244 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        257 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        267 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
