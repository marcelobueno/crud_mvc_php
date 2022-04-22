<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($data)
    {
        $model = new Product();
        $products = $model->find()->fetch(true);

        echo $this->view->render('products', ['data' => $data, 'products' => $products]);
    }

    public function create($data)
    {
        $product = new Product();
        $product->name = "Produto teste";
        $product->sku = "25569-7845";
        $product->description = "Produto usado para teste de persistencia";
        $product->quantity = 100;
        $product->price = 10.50;
        $product->save();

        var_dump($product);
    }
}