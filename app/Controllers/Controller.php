<?php

namespace App\Controllers;

use League\Plates\Engine;
use League\Plates\Extension\Asset;

class Controller 
{
    public $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . '/../../public/Views');

        $this->view->loadExtension(new Asset('public', false));
    }
}