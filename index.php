<?php 

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace('app\Controllers');

$router->group(null);
$router->get('/', "NavigationController:index");

$router->group('products');
$router->get('/', "ProductController:index");
$router->post('/store', "ProductController:create");
$router->get('/edit/{id}', "ProductController:edit");
$router->put('/update', "ProductController:update");
$router->delete('/delete', "ProductController:delete");

$router->group('categories');
$router->get('/', "CategoryController:index");

$router->group("ooops");
$router->get("/{errcode}", "NavigationController:error");

$router->dispatch();

if ($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}
