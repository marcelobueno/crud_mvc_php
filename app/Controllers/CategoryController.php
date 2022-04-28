<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends Controller 
{
    public function index($data)
    {
        $model = new Category();
        $categories = $model->find()->fetch(true);

        echo $this->view->render('categories', ['data' => $data, 'categories' => $categories]);
    }

    public function create($data)
    {
        # code...
    }

    public function edit($data)
    {
        # code...
    }

    public function update($data)
    {
        # code...
    }

    public function delete($data)
    {
        # code...
    }
}