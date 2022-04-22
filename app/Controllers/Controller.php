<?php

namespace App\Controllers;

use League\Plates\Engine;

class Controller 
{
    public $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . '/../../public/Views');
    }
}