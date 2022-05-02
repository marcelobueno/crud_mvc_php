<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
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

    public function edit($data)
    {
        $model = new Product();
        $product = $model->findById($data['id'])->data();

        $model = new CategoryProduct();
        $params = http_build_query(["product_id" => $product->id]);
        $productCategories = $model->find('product_id = :product_id', $params)->fetch(true);

        $model = new Category();
        $categories = $model->find()->fetch(true);

        echo $this->view->render('edit_product', [
            'data' => $data, 
            'product' => $product, 
            'categories' => $categories,
            'productCategories' => $productCategories
        ]);
    }

    public function update($data)
    {
        var_dump($data); die;
        $model = new Product();
        $product = $model->findById($data['product_id']);

        $product->name = $data['name'];
        $product->sku = $data['sku'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->save();

        header('Location: '.URL_BASE.'/products');
    }

    public function delete($data)
    {
        $model = new Product();
        $product = $model->findById($data['product_id']);

        $product->destroy();

        header('Location: '.URL_BASE.'/products');
    }
}