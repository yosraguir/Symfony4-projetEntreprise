<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'employee' => [[], ['_controller' => 'App\\Controller\\EmployeeController::index'], [], [['text', '/employee']], [], []],
    'layaout' => [[], ['_controller' => 'App\\Controller\\EmployeeController::layaout'], [], [['text', '/layaout']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\EmployeeController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\EmployeeController::logoutAction'], [], [['text', '/logout']], [], []],
    'ajout_emp' => [[], ['_controller' => 'App\\Controller\\EmployeeController::ajout'], [], [['text', '/ajout']], [], []],
    'modifemp' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::modificationemp'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifemp']], [], []],
    'listemp' => [[], ['_controller' => 'App\\Controller\\EmployeeController::listeemp'], [], [['text', '/listemp']], [], []],
    'modif' => [[], ['_controller' => 'App\\Controller\\EmployeeController::modif'], [], [['text', '/modif']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete']], [], []],
    'ajout_team' => [[], ['_controller' => 'App\\Controller\\EmployeeController::ajout_team'], [], [['text', '/ajout_team']], [], []],
    'listteam' => [[], ['_controller' => 'App\\Controller\\EmployeeController::listTeam'], [], [['text', '/listteam']], [], []],
    'deleteteam' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::deleteteam'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteteam']], [], []],
    'modifteam' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::modificationteam'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifteam']], [], []],
    'modift' => [[], ['_controller' => 'App\\Controller\\EmployeeController::modift'], [], [['text', '/modift']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\EmployeeController::register'], [], [['text', '/register']], [], []],
    'ajout_projet' => [[], ['_controller' => 'App\\Controller\\EmployeeController::ajoutProjet'], [], [['text', '/ajout_projet']], [], []],
    'listprojet' => [[], ['_controller' => 'App\\Controller\\EmployeeController::listProjet'], [], [['text', '/listprojet']], [], []],
    'modifprojet' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::modificationprojet'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifprojet']], [], []],
    'modifp' => [[], ['_controller' => 'App\\Controller\\EmployeeController::modifprojet'], [], [['text', '/modifp']], [], []],
    'deletep' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::deleteprojet'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deletep']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\EmployeeController::layaout'], [], [['text', '/']], [], []],
];
