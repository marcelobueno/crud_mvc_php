<?php

namespace App\Controllers;

use App\Models\CategoryProduct;

class CategoryProductController extends Controller 
{
    /**
     * Tem como objetivo sincronizar as informações de relacionamento entre Produtos e Categorias.
     */
    public function sync($data)
    {
        var_dump($data);

        $model = new CategoryProduct();
        $params = http_build_query(["pid" => $data['product_id']]);
        $productCategories = $model->find('product_id = :pid', $params)->fetch(true);

        if ($productCategories != null)
        {
            /**
             * Remove todos os registros atuais.
             */
            foreach ($productCategories as $cP)
            {
                $this->remove($cP);
            }
        }

        if ($data['categories'] != null)
        {
            /**
             * Cria os registros sincronizados com as categorias selecionadas pelo usuário.
             */
            foreach ($data['categories'] as $category)
            {
                $this->add($data['product_id'], $category);
            }
        }
    }

    /**
     * Adiciona um relacionamento entre Produto e Categoria
     */
    public function add($product_id, $category_id)
    {
        $cP = new CategoryProduct();
        $cP->product_id = $product_id;
        $cP->category_id = $category_id;
        $cP->save();

        return $cP;
    }

    /**
     * Remove um relacionamento entre Produto e Categoria
     */
    public function remove(CategoryProduct $cP)
    {
        $cP->destroy();

        return true;
    }
}