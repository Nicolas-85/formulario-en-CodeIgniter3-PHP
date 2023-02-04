<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido a CodeIgniter3</title>
</head>
<body>
    <h4> <?php echo $titulo;?> </h4>
    
    <form id="datos" name="datos" action= "<?php echo base_url();?>index.php/datos/registrar">
        Nombre <input name="nombre" type="text"/><br>
        Telefono <input name="telefono" type="text"/><br>
        Correo electronico <input name="email" type="text"/><br>
        <input type="submit" value="registro" >
    </form>

</body>
</html>