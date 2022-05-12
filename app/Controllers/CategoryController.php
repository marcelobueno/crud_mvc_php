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

    public function show($data)
    {
        $model = new Category();
        $category = $model->findById($data['id']);

        echo $this->view->render('show_category', ['data' => $data, 'category' => $category]);
    }

    public function create($data)
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->save();

        header('Location: '.URL_BASE.'/categories');
    }

    public function edit($data)
    {
        $model = new Category();
        $category = $model->findById($data['id']);

        echo $this->view->render('edit_category', ['data' => $data, 'category' => $category]);
    }

    public function update($data)
    {
        $model = new Category();
        $category = $model->findById($data['category_id']);

        $category->name = $data['name'];
        $category->save();

        header('Location: '.URL_BASE.'/categories');
    }

    public function delete($data)
    {
        $model = new Category();
        $category = $model->findById($data['category_id']);

        $category->destroy();

        header('Location: '.URL_BASE.'/categories');
    }
}