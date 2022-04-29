<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col min-h-80">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Editando - <?=$product->name?></h1>
        </div>
        <form action="<?=URL_BASE?>/products/update" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="product_id" value="<?=$product->id?>">
            <label for="name">
                Nome do produto
                <input type="text" name="name" id="name" value="<?=$product->name?>" required>
            </label>
            <label for="sku">
                Sku do produto
                <input type="text" name="sku" id="sku" value="<?=$product->sku?>" required>
            </label>
            <label for="description">
                Descrição
                <textarea name="description" id="description" required><?=$product->description?></textarea>
            </label>
            <label for="quantity">
                Quantidade
                <input type="number" name="quantity" id="quantity" step="1" value="<?=$product->quantity?>" required>
            </label>
            <label for="price">
                Preço R$
                <input type="number" name="price" id="price" step="0.01" value="<?=$product->price?>" required>
            </label>
            <br>
            <hr>
            <h5>Categorias</h5>
            <br>
            <select name="categories[]" id="categories">
                
            </select>
            <button class="btn" type="submit">Salvar</button>
        </form>
    </div>
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>