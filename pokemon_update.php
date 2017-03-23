<?php include "db.php";?>
<?php include "functions.php";?>

<?php
if(isset($_POST['update'])){
    atualizaTabela();
}
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">ATUALIZAR POKEMON</h1>
        <form action="pokemon_update.php" method="post">
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

              <div class="form-group">

                  <select name="id" id="">
                      <?php
                        mostraDados();
                      ?>
                  </select>

              </div>

 <input class="btn btn-primary" type="submit" name="update" value="Atualizar">

<?php include "buttons.php"; ?>

        </form>

    </div>
<?php include "footer.php"; ?>
