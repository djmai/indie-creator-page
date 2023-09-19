<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->addRedirect('/', 'en/auth/login');
$routes->addRedirect('(:segment)', 'en/(:segment)');
$routes->group('/{locale}', static function ($routes) {
    $routes->group('auth', static function ($routes) {
        $routes->get('login', 'AuthController::getLogin', ['as' => 'login', 'filter' => 'noauth']);
        $routes->post('login', 'AuthController::postLogin', ['filter' => 'noauth']);
        $routes->get('logout', 'AuthController::getLogout', ['as' => 'logout']);
    });
    $routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], static function ($routes) {
        $routes->get('', 'ProfileController::getProfile', ['as' => 'admin']);
        $routes->get('profile', 'ProfileController::getProfile', ['as' => 'profile']);
        $routes->get('account', 'AccountController::getAccount', ['as' => 'account']);
        $routes->group('translations',  static function ($routes) {
            $routes->get('', 'TranslationController::getListLanguages', ['as' => 'translations']);
            $routes->get('list-languages', 'TranslationController::getListLanguages');
            $routes->get('add-language', 'TranslationController::getAddLanguage');
            $routes->get('edit-language/(:hash)', 'TranslationController::getEditLanguage/$1');
        });
        $routes->get('links', 'LinkController::getLinks', ['as' => 'links']);
        $routes->group('projects',  static function ($routes) {
            $routes->get('', 'ProjectController::getListProjects', ['as' => 'projects']);
            $routes->get('list-projects', 'ProjectController::getListProjects');
            $routes->get('add-project', 'ProjectController::getAddProject');
            $routes->get('edit-project/(:hash)', 'ProjectController::getAddProject');
        });
    });
    $routes->get('(:segment)', 'HomeController::getUser/$1', ['as' => 'user']);
    $routes->get('(:segment)/(:segment)', 'HomeController::getProject/$1/$2', ['as' => 'project']);
});
