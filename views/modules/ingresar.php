<h1>PAGINA DE INGRESAR</h1>

<form method="post">
	
	<label for="nombre">Nombre de Usuario</label>
	<input type="text" name="nombreIngreso" placeholder="Ingrese Nombre Usuario" required>
	<br>

	<label for="clave">Contraseña</label>
	<input type="password" name="claveIngreso" placeholder="Ingrese Contraseña" required>
	<br>
	<br>

	<input type="submit" name="enviar" value="Ingresar">

</form>

<?php 

	$control = new Controlador();
	$control->loginUsuarioControlador();

	if(isset($_GET['action'])){
		if ($_GET['action'] == 'logout') {
			print "El usuario y contraseña no es correcto";
		}
	}

?>
