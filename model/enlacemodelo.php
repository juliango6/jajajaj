<?php

class EnlaceModelo {
	 public function validarEnlaceModelo($enlace){
          $modulo = "views/modules/".$enlace.".php";
	 	if(!file_exists($modulo))  {
	 		 $modulo = "views/modules/inicio.php";   
	 }
	 if($enlace == "okrpac" ){
	 	$modulo = "views/modules/regpaciente.php";
	 }
      return $modulo;
   }
}
