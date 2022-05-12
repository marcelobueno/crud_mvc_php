<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Editando - <?=$product->name?></h1>
        </div>
        <form action="<?=URL_BASE?>/products/update" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="product_id" value="<?=$product->id?>">
            <label for="name">
                Nome do produto
                <input type="text" name="name" id="name" value="<?=$product->name?>" readonly>
            </label>
            <label for="sku">
                Sku do produto
                <input type="text" name="sku" id="sku" value="<?=$product->sku?>" readonly>
            </label>
            <label for="description">
                Descrição
                <textarea name="description" id="description" readonly><?=$product->description?></textarea>
            </label>
            <label for="quantity">
                Quantidade
                <input type="number" name="quantity" id="quantity" step="1" value="<?=$product->quantity?>" readonly>
            </label>
            <label for="price">
                Preço R$
                <input type="number" name="price" id="price" step="0.01" value="<?=$product->price?>" readonly>
            </label>
            <h1 class="page-subtitle">Categorias</h1>
            <div class="categories-area">
                <?php 
                    foreach ($categories as $category)
                    { ?>
                        <div class="category-item">
                            <input type="checkbox"
                                readonly 
                                name="categories[]" 
                                id="category<?=$category->id?>" 
                                value="<?=$category->id?>" 
                                <?php 
                                    if ($productCategories != null)
                                    {
                                        foreach ($productCategories as $productCategory)
                                        {
                                            if ($productCategory->category_id == $category->id){
                                                echo 'checked';
                                            }
                                        }
                                    }
                                ?>
                                >
                            <label for="category<?=$category->id?>"><?=$category->name?></label>
                        </div>
                    <?php }
                ?>
            </div>
            <button class="btn" type="submit" style="display: none;">Salvar</button>
        </form>
    </div>
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>