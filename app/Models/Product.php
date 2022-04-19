<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer
{
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("products", ["id", "name", "sku", "description", "quantity", "price"]);
    }
}