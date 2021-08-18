<?php 

	session_start();
	if (!$_SESSION['validado']) {
		header('location:index.php?action=ingresar');
		exit();
	}

?>


<h1>EDICION DE USUARIOS</h1>

<form method="post">
	<?php 
		$editar = new Controlador();
		$editar->consultarUsuarioIdControlador();
		$editar->actualizarUsuarioControlador();
	?>
</form>
