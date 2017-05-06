<?php
include "Seguridad2.php" ;
$seguridad=new Seguridad();
//utilizamos este if para que el usuario no pueda entrar en mi perfil sin estar logado
if($seguridad->getUsuario()==null){
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi perfil</title>
  </head>
  <body>
    <form action='actualizar.php' method='post'>
      <?php
      include 'usuario.php';
      $usuario = new usuario();
      $fila=$usuario->mostrarInfo($_SESSION["nombre"]);
      echo "<input type='text' name='nombre' value='".$fila['nombre']."' readonly><br><br>";
      echo "<input type='text' name='mail' value='".$fila['mail']."'><br><br>";;
      echo "<input type='text' name='apellidos' value='".$fila['apellidos']."'><br><br>";
    ?>
    <select class="" name="roles">
    <option value="">CAMBIAR ROL</option>
    <?php
    $tabla=$usuario->mostrarRol();
      foreach ($tabla as $fila ) {
        echo "<br>";
        echo"<option value=".$fila["rol"].">".$fila["rol"]."</option>";
      }
         ?>
      </select>
      <br>
  <input type='submit' value='actualizar'>

</form>

    <br>
  </body>
</html>
