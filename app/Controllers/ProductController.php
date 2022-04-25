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
        $product->name = $data['name'];
        $product->sku = $data['sku'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->save();

        header('Location: '.URL_BASE.'/products');
    }
}