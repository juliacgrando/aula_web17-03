<?php 
include "../controller/UsuarioController.php";


$usuario = new UsuarioController();
if (!empty($_POST)){
$usuario -> salvar($_POST);
}
if (!empty($_GET)){
  $usuario = new UsuarioController();
  $data = $usuario -> buscar($_GET['id']);
  }

?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action = "UsuarioForm.php" method="POST">
        <Label>Nome</Label><br>
        <input type= "text" name="nome"/><br>
        <Label>Telefone</Label><br>
        <input type= "text" name="telefone"/><br>

        <input type= "submit" name="salvar"/>
    </form>

  </body>
</html>