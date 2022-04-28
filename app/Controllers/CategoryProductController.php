<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;

class CategoryProductController extends Controller 
{
    public static function add($data)
    {
        # code...
    }

    public static function remove($data)
    {
        # code...
    }

    /**
     * Tem como finalidade verificar o relacionamento entre Produtos e Categorias através da tabela Pivô
     * @var array
     * @return boolean
     */
    public function verifyRelationship($data)
    {
        $model = new Product();
        $product = $model->findById($data['product_id']);

        $model = new Category();
        $category = $model->findById($data['category_id']);

        if ($product != null && $category != null)
        {
            $model = new CategoryProduct();
            $relationships = $model->find()->fetch(true);

            $relationAlreadyExists = false;

            foreach ($relationships as $relation)
            {
                if ($relation->product_id == $product->id && $relation->category_id == $category->id)
                {
                    $relationAlreadyExists = true;
                }
            }

            if ($relationAlreadyExists == false)
            {
                /**
                 * Ao retornar como true, sinalizamos a função que ela pode criar o registro.
                 */
                return true;
            } 
            else 
            {
                /**
                 * Se o relacionamento já existir retornamos false sinalizando para que 
                 * o registro não seja criado para não duplicar.
                 */
                return false;
            }
        }
        else
        {
            return false;
        }
    }
}