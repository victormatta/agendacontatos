<?php

include_once('templates/header.php');
include_once('config/process.php');

include_once('templates/buttonbk.php');

?>

<div class="container">
    <h1 id="main-tittle">Visualização de Dados</h1>
    
    <?php if(isset($_GET['id'])): ?>

        <p id="main-tittle">ID: <?= $contact['id'] ?></p>
        <p id="main-tittle">Name: <?= $contact['name'] ?></p>
        <p id="main-tittle">Phone: <?= $contact['phone'] ?></p>
        <p id="main-tittle">Observations: <?= $contact['observations'] ?></p>
          
    <?php endif; ?>
</div>

<?php

include_once('templates/footer.php');

?>