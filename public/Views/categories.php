<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col min-h-80">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Categorias</h1>
            <a class="btn" href="#" onclick="showModal('modalNewCategory')">Nova categoria</a>
        </div>
        <div class="table-area">
            <table>
                <thead>
                    <tr>
                        <th class="max-70">ID</th>
                        <th class="justify-content-start">Nome</th>
                        <th class="max-200">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($categories as $category)
                        { ?>
                            <tr>
                                <td class="max-70"><?= $category->id ?></td>
                                <td class="justify-content-start"><?= $category->name ?></td>
                                <td class="max-200">
                                    <a class="action-btn bg-green" title="Visualizar" 
                                        href="<?=URL_BASE?>/categories/show/<?=$category->id?>"><i class="bi bi-search"></i></a>
                                    <a class="action-btn bg-blue" title="Editar" 
                                        href="<?=URL_BASE?>/categories/edit/<?=$category->id?>"><i class="bi bi-pencil"></i></a>
                                    <a class="action-btn bg-red m-0" title="Deletar" 
                                        onclick="showModal('modalDeleteCategory<?=$category->id?>')" 
                                        href="#"><i class="bi bi-trash2"></i></a>
                                    <div class="modal-area" id="modalDeleteCategory<?=$category->id?>">
                                        <div class="modal modal-small">
                                            <div class="modal-header bg-red">
                                                <div class="modal-title">Excluir categoria - <?= $category->name ?></div>
                                                <div class="modal-close" onclick="hideModal('modalDeleteCategory<?=$category->id?>')"><i title="Fechar" class="bi bi-x-circle-fill"></i></div>
                                            </div>
                                            <div class="modal-body col">
                                                Tem certeza que deseja exluir esta categoria?
                                                <br><br>
                                                Após confirmar não será possível reverter esta operação.

                                                <div class="delete-options d-flex">
                                                    <a class="btn-green" onclick="hideModal('modalDeleteCategory<?=$category->id?>')" href="#">Cancelar</a>
                                                    <form action="<?=URL_BASE?>/categories/delete" method="post">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="category_id" value="<?=$category->id?>">

                                                        <label class="btn-red" for="submit<?=$category->id?>">
                                                            Confirmar
                                                            <button hidden name="submit<?=$category->id?>" id="submit<?=$category->id?>" type="submit"></button>
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
    <div class="modal-area" id="modalNewCategory">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Nova categoria</div>
                <div class="modal-close" onclick="hideModal('modalNewCategory')"><i title="Fechar" class="bi bi-x-circle-fill"></i></div>
            </div>
            <div class="modal-body">
                <form action="<?=URL_BASE?>/categories/store" method="post">
                    <input type="hidden" name="_method" value="POST">
                    <label for="name">
                        Nome da categoria
                        <input type="text" name="name" id="name" required>
                    </label>
                    <button class="btn" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>