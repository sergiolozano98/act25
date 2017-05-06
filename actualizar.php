<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
<?php

include 'usuario.php';
echo "Se ha Actualizo correctamente:";
$actualizar=new Usuario();
//pasamos los parametros para cambiar informacion del usuario
$actualizarP=$actualizar->actualizarRol($_POST["roles"],$_POST['mail'],$_POST['apellidos'],$_POST['nombre']);
if ($actualizarP==true){header('Location: miperfil.php');}else {
    echo "Error al actualizar los datos<br><br>";
    echo "<a href='miperfil.php'>Volver a mi perfil</a>";
  }
 ?>

</body>
</html>
