<?php
use App\Router;
use App\Controllers\PublicController;
use App\Controllers\AuthController;

// Router::addRoute('/',['App\\Controllers/PublicController','index']);
// Router::addRoute('/page1', ['App\\Controllers/PublicController','page1']);

// Router::addRoute('/page2', ['App\\Controllers/PublicController','page2']);

Router::get('/', [PublicController::class, 'index']);
Router::get('/page1', [PublicController::class, 'page1']);
Router::get('/page2', [PublicController::class, 'page2']);
Router::get('/login', [AuthController::class,'login']);
Router::get('/register',[AuthController::class, 'register']);
Router::post('/register',[AuthController::class, 'store']);
