<?php

include_once('templates/header.php');
include_once('config/process.php');

include_once('templates/buttonbk.php');

?>

<div class="container">
    <h1 id="main-tittle">Criar contato</h1>
    
        <form action="config/process.php" method="post">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name"><b>Name:</b></label>
                <input name="name" id="name" type="text" placeholder="Type your name"  class="form-control" required>
            </div>

            <br><br>

            <div class="form-group">
                <label for="phone"><b>Phone:</b></label>
                <input name="phone" id="phone" type="tel" placeholder="Type your phone"  class="form-control" required>
            </div>

            <br><br>

            <div class="form-group">
                <label for="observations"><b>Observations:</b></label>
                <input name="observations" id="observations" type="text" placeholder="Type your observations"  class="form-control" required>
            </div>

            <br><br><br><br>

            <div class="container" id="main-tittle">
            <button type="submit" class="btn btn-outline-primary btn-lg">Send</button>
            </div>

        </form>

    <br><br><br><br><br><br>

    <p id="empty-list-text"><a href="index.php">Voltar para tela inicial</a>.</p>
</div>

<?php
include_once('templates/footer.php');
?>