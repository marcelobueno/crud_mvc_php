<?php

namespace App\Controllers;

class CategoryController extends Controller 
{
    public function index($data)
    {
        echo $this->view->render('categories', ['data' => $data]);
    }
}