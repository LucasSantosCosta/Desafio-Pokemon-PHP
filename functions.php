<?php include "db.php";?>

<?php
function criaDados(){
  global $connection;

  if(isset($_POST['enviar']))
  {
      $name = $_POST['name'];
      $type = $_POST['type'];
      $hp = $_POST['hp'];

      $n = strtoupper($name);

      $query = "INSERT INTO pokemons(name,type,hp) VALUES ('$n', '$type', $hp)";

      $resultado = mysqli_query($connection, $query);

      if(!$resultado){
          die("Não deu certo a inclusão" .mysqli_error());
      } else {
          echo "Dados criados com sucesso";
        }
    }
}

function leTabela(){
  global $connection;

  $query = "SELECT * FROM pokemons WHERE type = 'Fire' ";
  $resultado = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($resultado))
      {
    print_r($row);
      }
}

function mostraDados(){
global $connection;
$query = "SELECT * FROM pokemons";
$resultado = mysqli_query($connection, $query);

 while($row = mysqli_fetch_assoc($resultado)){
     $id = $row['id'];
     echo "<option value='$id'>$id</option>";

    }

}

function atualizaTabela(){
    global $connection;
$name = $_POST['name'];
$type = $_POST['type'];
$hp = $_POST['hp'];
$id = $_POST['id'];

$query = "UPDATE pokemons SET ";
$query .= "name = '$name', ";
$query .= "type = '$type', ";
$query .= "hp = '$hp' ";
$query .= "WHERE id = $id ";

$resultado = mysqli_query($connection, $query);

if(!$resultado){
    die("Falha na atualização");
} else {
    echo "Dados atualizados com sucesso!";
}

}

function deletaLinha(){
global $connection;
$name = $_POST['name'];
$type = $_POST['type'];
$hp = $_POST['hp'];
$id = $_POST['id'];

$query = "DELETE from pokemons ";
$query .= "WHERE id = $id";

$resultado = mysqli_query($connection, $query);

if(!$resultado){
    die("Falha ao excluir");
} else {
    echo "Dados removidos com sucesso!";
}

}
?>
