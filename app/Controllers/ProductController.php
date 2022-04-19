<?php

namespace App\Controllers;

class ProductController extends Controller
{
    public function index($data)
    {
        echo $this->templates->render('products', ['data' => $data]);
    }
}