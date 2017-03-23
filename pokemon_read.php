<?php include "db.php";?>
<?php include "functions.php"; ?>
<?php include "header.php"; ?>
<div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">MOSTRA POKEMONS</h1>
        <pre>
        <?php
        leTabela();
        ?>
        </pre>

        <br><br>

        <a class="btn btn-primary" href="pokemon_create.php" role="button">CREATE</a>
        <a class="btn btn-primary" href="pokemon_read.php" role="button">READ</a>
        <a class="btn btn-primary" href="pokemon_update.php" role="button">UPDATE</a>
        <a class="btn btn-primary" href="pokemon_delete.php" role="button">DELETE</a>

    </div>
<?php include "footer.php"; ?>
