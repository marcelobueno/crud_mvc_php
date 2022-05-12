<?php 

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace('app\Controllers');

$router->group(null);
$router->get('/', "NavigationController:index");

$router->group('products');
$router->get('/', "ProductController:index");
$router->get('/show/{id}', "ProductController:show");
$router->post('/store', "ProductController:create");
$router->get('/edit/{id}', "ProductController:edit");
$router->put('/update', "ProductController:update");
$router->delete('/delete', "ProductController:delete");

$router->group('categories');
$router->get('/', "CategoryController:index");
$router->get('/show/{id}', "CategoryController:show");
$router->post('/store', "CategoryController:create");
$router->get('/edit/{id}', "CategoryController:edit");
$router->put('/update', "CategoryController:update");
$router->delete('/delete', "CategoryController:delete");

$router->group('category_product');
$router->get('/', "CategoryProductController:add");

$router->group("ooops");
$router->get("/{errcode}", "NavigationController:error");

$router->dispatch();

if ($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}
