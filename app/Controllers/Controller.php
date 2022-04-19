<?php

namespace App\Controllers;

use League\Plates\Engine;

class Controller 
{
    public $templates;

    public function __construct()
    {
        $this->templates = new Engine(__DIR__ . '/../../public/Views');
    }
}