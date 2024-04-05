<?php
use App\Router;
use App\Controllers\PublicController;
use App\Controllers\AuthController;

// Router::addRoute('/',['App\\Controllers/PublicController','index']);
// Router::addRoute('/page1', ['App\\Controllers/PublicController','page1']);

// Router::addRoute('/page2', ['App\\Controllers/PublicController','page2']);

Router::addRoute('/', [PublicController::class, 'index']);
Router::addRoute('/page1', [PublicController::class, 'page1']);
Router::addRoute('/page2', [PublicController::class, 'page2']);
Router::addRoute('/login', [AuthController::class,'login']);