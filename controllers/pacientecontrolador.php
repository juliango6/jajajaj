<?php

class PacienteControlador {

    public function registrarPacienteControlador(){
       if(isset($_POST['regpaciente'])){
          $datos =  array("documento" => $_POST['documentoPac'],
             "nombre" => $_POST["nombrepac"],
             "apellido" => $_POST["Apellidopac"],
             "fechaNac" => $_POST["fechapac"],
             "sexo" => $_POST["sexopac"]);

          $paciente =new PacienteModelo();
          $respuesta = $paciente -> registrarPacienteModelo($datos);
            if($respuesta == true){
            header('location:index.php?action=okrpac');
          }
          

        }
    }

    public function consultarPacienteControlador(){
      if(isset($_POST['datoBuscar'])&& isset($_POST['consultarPaciente'])&& !
         if (isset($_POST['datoBuscar'])) {
            $dato = $_POST['datoBuscar'];
            $campo =

         }
         $paciente = new PacienteModelo();
         $valores = $paciente->consultarPacientesModelo($campo, $dato);
         return $valores;
         //var_dump($valores);
      }
      else{
         $paciente = new PacienteModelo();
         $valores = $paciente-> consultarPacientesModelo('', '');
         return $valores;
      }

    }
}	  