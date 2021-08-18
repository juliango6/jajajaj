<h1>REGISTRAR PACIENTES</h1>

<form method="post">
	<label for="">NO.de Identificacion</label>
	<input type="number" name="documentoPac"required="true">
	<br>
      <label for="">Nombre del paciente</label>
     <input type="nombre" name="nombrepac"required="true">
     <br>
     <label for="">Apellido del paciente</label>
     <input type="Apellido" name="Apellidopac"required="true">
     <br>
     <label for="">Fecha de nacimiento</label>
     <input type="date" name="fechapac"required="true">
     <br>
     <label for="">genero</label>
     <br>
     <input type="radio" name="sexopac" value="femenino"required="true"> Femenino
     <br>
     <input type="radio" name="sexopac" value="masculino"> Masculino
     <br>
     <br>
     <input type="submit" name="regpaciente" value="Registrar paciente"> 
</form>

<?php
	$paciente =new PacienteControlador();
	$paciente -> registrarPacienteControlador();

   if (isset($_GET['action'])){
    if ($_GET['action'] == "okrpac"){
        print "<div>Paciente Registrado Correctamente</div>";
     }
   } 
?>