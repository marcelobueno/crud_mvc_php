<?php include_once(__DIR__.'/layouts/header.php'); ?>

    <div class="container col">
        <div class="d-flex align-items-center justify-content-between padding-y">
            <h1 class="page-title">Categories</h1>
            <a class="btn" href="#">New category</a>
        </div>
        <div class="table-area">
            <table>
                <thead>
                    <tr>
                        <th class="max-70">ID</th>
                        <th class="justify-content-start">Name</th>
                        <th class="max-200">Actions</th>
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
    
<?php include_once(__DIR__.'/layouts/footer.php'); ?>