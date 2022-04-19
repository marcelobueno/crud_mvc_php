<?php

namespace App\Controllers;

class CategoryController extends Controller 
{
    public function index($data)
    {
        echo $this->templates->render('categories', ['data' => $data]);
    }
}