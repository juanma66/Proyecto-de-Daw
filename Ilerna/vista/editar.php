<?php

include("vistaLogin/header.php");
include("../modelo/Actualizar_Usuario.php");

?>

<main></main>
<h1>ACTUALIZAR</h1><br>

<form name="form1" method="post" action="../modelo/Actualizar_Usuario.php"><!--en la misma pagina-->
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
    </tr>
    <tr>
      <td><h4>Nombre</h4></td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
    </tr>
    <tr>
      <td><h4>Apellido</h4></td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $ape?>"></td>
    </tr>
	      <tr>
      <td><h4>Correo</h4></td>
      <td><label for="cor"></label>
      <input type="text" name="cor" id="cor" value="<?php echo $cor?>"></td>
    </tr>
    <tr>
      <td><h4>Dirección</h4></td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $dir?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</main>
<?php include("vistaLogin/footer.php");  ?>