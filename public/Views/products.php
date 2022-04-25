<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Products</h1>
            <a class="btn" id="new-product">New product</a>
        </div>
        <div class="table-area">
            <table>
                <thead>
                    <tr>
                        <th class="max-70">ID</th>
                        <th class="justify-content-start">Name</th>
                        <th class="max-120">Sku</th>
                        <th class="max-200">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($products as $product)
                        { ?>
                            <tr>
                                <td class="max-70"><?= $product->id ?></td>
                                <td class="justify-content-start"><?= $product->name ?></td>
                                <td class="max-120"><?= $product->sku ?></td>
                                <td class="max-200">
                                    <a class="action-btn bg-green" title="View" 
                                        href="#"><i class="bi bi-search"></i></a>
                                    <a class="action-btn bg-blue" title="Edit" 
                                        href="#"><i class="bi bi-pencil"></i></a>
                                    <a class="action-btn bg-red" title="Delete" 
                                        href="#"><i class="bi bi-trash2"></i></a>
                                </td>
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-area">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">New product</div>
                <div class="modal-close"><i title="Fechar" class="bi bi-x-circle-fill"></i></div>
            </div>
            <div class="modal-body">
                <form action="<?=URL_BASE?>/products/store" method="post">
                    <input type="hidden" name="_method" value="POST">
                    <label for="name">
                        Product name
                        <input type="text" name="name" id="name">
                    </label>
                    <label for="sku">
                        Product sku
                        <input type="text" name="sku" id="sku">
                    </label>
                    <label for="description">
                        Description
                        <textarea name="description" id="description"></textarea>
                    </label>
                    <label for="quantity">
                        Quantity
                        <input type="number" name="quantity" id="quantity" step="1">
                    </label>
                    <label for="price">
                        Price $
                        <input type="number" name="price" id="price" step="0.01">
                    </label>
                    <button class="btn" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>