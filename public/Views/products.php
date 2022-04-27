<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col min-h-80">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Produtos</h1>
            <a class="btn" id="new-product">Novo produto</a>
        </div>
        <div class="table-area">
            <table>
                <thead>
                    <tr>
                        <th class="max-70">ID</th>
                        <th class="justify-content-start">Nome</th>
                        <th class="max-120">Sku</th>
                        <th class="max-120">Quantidade</th>
                        <th class="max-120">Preço</th>
                        <th class="max-200">Ações</th>
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
                                <td class="max-120"><?= $product->quantity ?></td>
                                <td class="max-120">R$ <?= number_format($product->price, 2, ',', '.') ?></td>
                                <td class="max-200">
                                    <a class="action-btn bg-green" title="Visualizar" 
                                        href="#"><i class="bi bi-search"></i></a>
                                    <a class="action-btn bg-blue" title="Editar" 
                                        href="<?=URL_BASE?>/products/edit/<?=$product->id?>"><i class="bi bi-pencil"></i></a>
                                    <a class="action-btn bg-red" title="Deletar" 
                                        onclick="showModal('modalDeleteProduct<?=$product->id?>')"  
                                        href="#"><i class="bi bi-trash2"></i></a>
                                    <div class="modal-area" id="modalDeleteProduct<?=$product->id?>">
                                        <div class="modal modal-small">
                                            <div class="modal-header bg-red">
                                                <div class="modal-title">Excluir produto - <?= $product->name ?></div>
                                                <div class="modal-close" onclick="hideModal('modalDeleteProduct<?=$product->id?>')"><i title="Fechar" class="bi bi-x-circle-fill"></i></div>
                                            </div>
                                            <div class="modal-body col">
                                                Tem certeza que deseja exluir este produto?
                                                <br><br>
                                                Após confirmar não será possível reverter esta operação.

                                                <div class="delete-options d-flex">
                                                    <a class="btn-green" onclick="hideModal('modalDeleteProduct<?=$product->id?>')" href="#">Cancelar</a>
                                                    <form action="<?=URL_BASE?>/products/delete" method="post">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="product_id" value="<?=$product->id?>">

                                                        <label class="btn-red" for="submit<?=$product->id?>">
                                                            Confirmar
                                                            <button hidden name="submit<?=$product->id?>" id="submit<?=$product->id?>" type="submit"></button>
                                                        </label>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-area" id="modalNewProduct">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Novo produto</div>
                <div class="modal-close" id="closeNewProduct"><i title="Fechar" class="bi bi-x-circle-fill"></i></div>
            </div>
            <div class="modal-body">
                <form action="<?=URL_BASE?>/products/store" method="post">
                    <input type="hidden" name="_method" value="POST">
                    <label for="name">
                        Nome do produto
                        <input type="text" name="name" id="name" required>
                    </label>
                    <label for="sku">
                        Sku do produto
                        <input type="text" name="sku" id="sku" required>
                    </label>
                    <label for="description">
                        Descrição
                        <textarea name="description" id="description" required></textarea>
                    </label>
                    <label for="quantity">
                        Quantidade
                        <input type="number" name="quantity" id="quantity" step="1" required>
                    </label>
                    <label for="price">
                        Preço R$
                        <input type="number" name="price" id="price" step="0.01" required>
                    </label>
                    <button class="btn" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>