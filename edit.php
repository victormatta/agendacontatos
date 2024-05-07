<?php

include_once('templates/header.php');
include_once('config/process.php');

include_once('templates/buttonbk.php');

?>

<div class="container">

    <h1 id="main-tittle">Editar Contato</h1>

    <?php if(isset($_GET['id'])): ?>
        
        <form action="config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact["id"] ?>">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required value="<?= $contact["name"] ?>">
            </div>

            <br><br>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" class="form-control" required value="<?= $contact["phone"] ?>">
            </div>

            <br><br>

            <div class="form-group">
                <label for="observations">Observations</label>
                <input type="text" name="observations" id="observations" class="form-control" required value="<?= $contact["observations"] ?>">
            </div>

            <br><br>

            <div class="container" id="main-tittle">
                <button type="submit" class="btn btn-outline-primary btn-lg">Send</button>
            </div>

        </form>

    <?php endif; ?>

</div>

<?php
include_once('templates/footer.php');
?>