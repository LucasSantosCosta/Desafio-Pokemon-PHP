<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php criaDados(); ?>
<?php include "header.php"; ?>

<div class="container">

    <div class="col-sm-6">

      <h1 class="text-center">INSERIR POKEMONS</h1>

        <form action="pokemon_create.php" method="post">

            <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" name="type" class="form-control">
            </div>

            <div class="form-group">
            <label for="hp">HP</label>

            <input type="range" min="0" max="300" step="5" onchange="showValue(this.value)" name="hp" class="form-control">
            <span id="range" name="hp">0</span>

            <script type="text/javascript">
              function showValue(newValue){
                document.getElementById("range").innerHTML=newValue;
            }
            </script>
            </div>

            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
<?php include "buttons.php"; ?>

        </form>
    </div>
<?php include "footer.php"; ?>
