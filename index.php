<?php

include_once('templates/header.php');

?>

<div class="container">

    <!-- <p id="msg">TESTEEEEEEE</p> -->

    <?php if(isset($printMSG) && $printMSG != ''): ?>
        <p id="msg"><?= $printMSG ?></p>
    <?php endif; ?>
    <h1 id="main-tittle">Minha Agenda</h1>
    <?php if(count($contacts) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td scope="row"><?= $contact["id"] ?></td>
                        <td scope="row"><?= $contact["name"] ?></td>
                        <td scope="row"><?= $contact["phone"] ?></td>
                        <td class="actions">
                            <a href="visu.php?id=<?= $contact["id"] ?>" class="text-success"><i class="fas fa-eye check-icon"></i></a>
                            <a href="edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>    
                            <form action="config/process.php" method="POST" style="display: inline-block;">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                <button type="submit" class="btn btn-outline-danger delete-btn btn-sm" style=""><i class="fas fa-times delete-icon"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">LISTA DE DE CONTATOS VAZIA, <a href="./create.php">Clique aqui para adicionar</a>.</p>
    <?php endif; ?>
</div>

<?php
include_once('templates/footer.php');
?>