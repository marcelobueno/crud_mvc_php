<?php

namespace App\Controllers;

class NavigationController extends Controller
{
    public function index($data)
    {
        echo $this->templates->render('home', ['data' => $data]);
    }

    public function error($data)
    {
        echo "<h1>Erro {$data['errcode']}</h1>";
    }
}