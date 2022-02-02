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
        '/employee' => [[['_route' => 'employee', '_controller' => 'App\\Controller\\EmployeeController::index'], null, null, null, false, false, null]],
        '/layaout' => [[['_route' => 'layaout', '_controller' => 'App\\Controller\\EmployeeController::layaout'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\EmployeeController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\EmployeeController::logoutAction'], null, null, null, false, false, null]],
        '/ajout' => [[['_route' => 'ajout_emp', '_controller' => 'App\\Controller\\EmployeeController::ajout'], null, null, null, false, false, null]],
        '/listemp' => [[['_route' => 'listemp', '_controller' => 'App\\Controller\\EmployeeController::listeemp'], null, null, null, false, false, null]],
        '/modif' => [[['_route' => 'modif', '_controller' => 'App\\Controller\\EmployeeController::modif'], null, null, null, false, false, null]],
        '/ajout_team' => [[['_route' => 'ajout_team', '_controller' => 'App\\Controller\\EmployeeController::ajout_team'], null, null, null, false, false, null]],
        '/listteam' => [[['_route' => 'listteam', '_controller' => 'App\\Controller\\EmployeeController::listTeam'], null, null, null, false, false, null]],
        '/modift' => [[['_route' => 'modift', '_controller' => 'App\\Controller\\EmployeeController::modift'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\EmployeeController::register'], null, null, null, false, false, null]],
        '/ajout_projet' => [[['_route' => 'ajout_projet', '_controller' => 'App\\Controller\\EmployeeController::ajoutProjet'], null, null, null, false, false, null]],
        '/listprojet' => [[['_route' => 'listprojet', '_controller' => 'App\\Controller\\EmployeeController::listProjet'], null, null, null, false, false, null]],
        '/modifp' => [[['_route' => 'modifp', '_controller' => 'App\\Controller\\EmployeeController::modifprojet'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\EmployeeController::layaout'], null, null, null, false, false, null]],
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
                .'|/modif(?'
                    .'|emp/([^/]++)(*:190)'
                    .'|team/([^/]++)(*:211)'
                    .'|projet/([^/]++)(*:234)'
                .')'
                .'|/delete(?'
                    .'|/([^/]++)(*:262)'
                    .'|team/([^/]++)(*:283)'
                    .'|p/([^/]++)(*:301)'
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
        190 => [[['_route' => 'modifemp', '_controller' => 'App\\Controller\\EmployeeController::modificationemp'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'modifteam', '_controller' => 'App\\Controller\\EmployeeController::modificationteam'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'modifprojet', '_controller' => 'App\\Controller\\EmployeeController::modificationprojet'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'deleteteam', '_controller' => 'App\\Controller\\EmployeeController::deleteteam'], ['id'], null, null, false, true, null]],
        301 => [
            [['_route' => 'deletep', '_controller' => 'App\\Controller\\EmployeeController::deleteprojet'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
