<?php 
include "../controller/UsuarioController.php";

if (!empty($_POST)){
$usuario = new UsuarioController();
$usuario -> salvar($_POST);
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