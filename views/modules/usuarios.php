<?php 

	session_start();

	if (!$_SESSION['validado']) {
		header('location:index.php?action=ingresar');
		exit();
	}

	$control = new Controlador();

?>

<h3>Usuario Actual: <?php print strtolower($_SESSION['usuario']); ?> </h3>
<h1>PAGINA DE USUARIOS</h1>

<table border="1">
	<thead>
		<th>Nombre</th>
		<th>Email</th>
		<th>Constraña</th>
		<th colspan="2">Opciones</th>
	</thead>
	<tbody>
		<?php 

			$control->consultarUsuariosControlador();
			$control->eliminarUsuarioControlador();

		?>
	</tbody>

</table>

<?php 

	if (isset($_GET['action'])) {
		if($_GET['action'] == "upok"){
			print "<p class='msg'>Usuario Actualizado Correctamente</p>";
		}
		elseif ($_GET['action'] == 'delok') {
			print "<p class='msg'>Usuario Eliminado Correctamente</p>";
		}
	}

?>