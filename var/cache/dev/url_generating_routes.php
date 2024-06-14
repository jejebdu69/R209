<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'app_category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_competence_index' => [[], ['_controller' => 'App\\Controller\\CompetenceController::index'], [], [['text', '/competence/']], [], [], []],
    'app_competence_new' => [[], ['_controller' => 'App\\Controller\\CompetenceController::new'], [], [['text', '/competence/new']], [], [], []],
    'app_competence_show' => [['id'], ['_controller' => 'App\\Controller\\CompetenceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competence']], [], [], []],
    'app_competence_edit' => [['id'], ['_controller' => 'App\\Controller\\CompetenceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competence']], [], [], []],
    'app_competence_delete' => [['id'], ['_controller' => 'App\\Controller\\CompetenceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competence']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_cv' => [[], ['_controller' => 'App\\Controller\\DashboardController::cv'], [], [['text', '/cv']], [], [], []],
    'app_formation_index' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formation/']], [], [], []],
    'app_formation_new' => [[], ['_controller' => 'App\\Controller\\FormationController::new'], [], [['text', '/formation/new']], [], [], []],
    'app_formation_show' => [['id'], ['_controller' => 'App\\Controller\\FormationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'app_formation_edit' => [['id'], ['_controller' => 'App\\Controller\\FormationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'app_formation_delete' => [['id'], ['_controller' => 'App\\Controller\\FormationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'app_niveau_index' => [[], ['_controller' => 'App\\Controller\\NiveauController::index'], [], [['text', '/niveau/']], [], [], []],
    'app_niveau_new' => [[], ['_controller' => 'App\\Controller\\NiveauController::new'], [], [['text', '/niveau/new']], [], [], []],
    'app_niveau_show' => [['id'], ['_controller' => 'App\\Controller\\NiveauController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/niveau']], [], [], []],
    'app_niveau_edit' => [['id'], ['_controller' => 'App\\Controller\\NiveauController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/niveau']], [], [], []],
    'app_niveau_delete' => [['id'], ['_controller' => 'App\\Controller\\NiveauController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/niveau']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_veille_index' => [[], ['_controller' => 'App\\Controller\\VeilleController::index'], [], [['text', '/veille/']], [], [], []],
    'app_veille_new' => [[], ['_controller' => 'App\\Controller\\VeilleController::new'], [], [['text', '/veille/new']], [], [], []],
    'app_veille_show' => [['id'], ['_controller' => 'App\\Controller\\VeilleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/veille']], [], [], []],
    'app_veille_edit' => [['id'], ['_controller' => 'App\\Controller\\VeilleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/veille']], [], [], []],
    'app_veille_delete' => [['id'], ['_controller' => 'App\\Controller\\VeilleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/veille']], [], [], []],
    'App\Controller\CategoryController::index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], [], []],
    'App\Controller\CategoryController::new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], [], []],
    'App\Controller\CategoryController::show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'App\Controller\CategoryController::edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'App\Controller\CategoryController::delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'App\Controller\CompetenceController::index' => [[], ['_controller' => 'App\\Controller\\CompetenceController::index'], [], [['text', '/competence/']], [], [], []],
    'App\Controller\CompetenceController::new' => [[], ['_controller' => 'App\\Controller\\CompetenceController::new'], [], [['text', '/competence/new']], [], [], []],
    'App\Controller\CompetenceController::show' => [['id'], ['_controller' => 'App\\Controller\\CompetenceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competence']], [], [], []],
    'App\Controller\CompetenceController::edit' => [['id'], ['_controller' => 'App\\Controller\\CompetenceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competence']], [], [], []],
    'App\Controller\CompetenceController::delete' => [['id'], ['_controller' => 'App\\Controller\\CompetenceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competence']], [], [], []],
    'App\Controller\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\DashboardController::cv' => [[], ['_controller' => 'App\\Controller\\DashboardController::cv'], [], [['text', '/cv']], [], [], []],
    'App\Controller\FormationController::index' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formation/']], [], [], []],
    'App\Controller\FormationController::new' => [[], ['_controller' => 'App\\Controller\\FormationController::new'], [], [['text', '/formation/new']], [], [], []],
    'App\Controller\FormationController::show' => [['id'], ['_controller' => 'App\\Controller\\FormationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'App\Controller\FormationController::edit' => [['id'], ['_controller' => 'App\\Controller\\FormationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'App\Controller\FormationController::delete' => [['id'], ['_controller' => 'App\\Controller\\FormationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], [], []],
    'App\Controller\NiveauController::index' => [[], ['_controller' => 'App\\Controller\\NiveauController::index'], [], [['text', '/niveau/']], [], [], []],
    'App\Controller\NiveauController::new' => [[], ['_controller' => 'App\\Controller\\NiveauController::new'], [], [['text', '/niveau/new']], [], [], []],
    'App\Controller\NiveauController::show' => [['id'], ['_controller' => 'App\\Controller\\NiveauController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/niveau']], [], [], []],
    'App\Controller\NiveauController::edit' => [['id'], ['_controller' => 'App\\Controller\\NiveauController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/niveau']], [], [], []],
    'App\Controller\NiveauController::delete' => [['id'], ['_controller' => 'App\\Controller\\NiveauController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/niveau']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\VeilleController::index' => [[], ['_controller' => 'App\\Controller\\VeilleController::index'], [], [['text', '/veille/']], [], [], []],
    'App\Controller\VeilleController::new' => [[], ['_controller' => 'App\\Controller\\VeilleController::new'], [], [['text', '/veille/new']], [], [], []],
    'App\Controller\VeilleController::show' => [['id'], ['_controller' => 'App\\Controller\\VeilleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/veille']], [], [], []],
    'App\Controller\VeilleController::edit' => [['id'], ['_controller' => 'App\\Controller\\VeilleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/veille']], [], [], []],
    'App\Controller\VeilleController::delete' => [['id'], ['_controller' => 'App\\Controller\\VeilleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/veille']], [], [], []],
];
