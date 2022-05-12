<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Editando - <?=$category->name?></h1>
        </div>
        <form action="<?=URL_BASE?>/categories/update" method="post">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="category_id" value="<?=$category->id?>">
            <label for="name">
                Nome da categoria
                <input type="text" name="name" id="name" value="<?=$category->name?>" readonly>
            </label>
            <button class="btn" type="submit" style="display: none;">Salvar</button>
        </form>
    </div>
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>