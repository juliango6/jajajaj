<?php 

$paciente = new PacienteControlador();
$resultado = $paciente -> consultarPacienteControlador();

 ?>
<h1>consultar</h1>
<form method="post">
	<input type="text" name="datoBuscar">
	<input type="submit" name="consultarPaciente" value="Buscar">
	<br>
	<label for="">buscar por:</label>
	<input type="radio" name="campoBucar"value="nombres" required="true"> Nombres
	<input type="radio" name="campoBucar"value="apellidos"> Apellidos
	<input type="radio" name="campoBucar"value="documento"> Documento
	<br>
	<label for="">Ordenar por</label>
</form>
<table>
	<thead>
		<th>Documento</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Fecha de Nac.</th>
		<th>genero</th>
	</thead>
	<tbody>
		<?php 
			foreach ($resultado as $key => $value) {
				print '<tr>
				<td>'.$value['pacIdentificacion'].'</td>
						<td>'.$value['pacNombres'].'</td>
						<td>'.$value['pacApellidos'].'</td>
						<td>'.$value['pacFechaNacimiento'].'</td>
						<td>'.$value['pacSexo'].'</td></tr>';
			}
		?>
	</tbody>
</table>