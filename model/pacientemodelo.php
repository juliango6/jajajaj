
<?php 
require_once("lib/conexion.php");

class PacienteModelo {

   public  function registrarPacienteModelo($datos){
	 $sql =" INSERT INTO pacientes(pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo) VALUES (?, ?, ?, ?, ?)";
	 try {
	 	$conn = new conexion();
	 	$stmt = $conn->conectar()->prepare($sql); 
	 	$stmt->bindParam(1, $datos["documento"], PDO::PARAM_INT);
	 	$stmt->bindParam(2, $datos["nombre"], PDO::PARAM_STR);
	 	$stmt->bindParam(3, $datos["apellido"], PDO::PARAM_STR);
	 	$stmt->bindParam(4, $datos["fechaNac"], PDO::PARAM_STR);
	 	$stmt->bindParam(5, $datos["sexo"], PDO::PARAM_STR);

	 	if($stmt ->execute()){
	 		return true;
        }
       else{
       	    return false ;
       }
       $stmt -> close();
  }
	public function consultarPacientesModelo($campo, $dato){
		if ($campo != '') {
			switch ($campo) {
				case 'nombres':
					$cond = "pacNombres like ?";
					break;

				case 'apellidos':
					$cond = "pacApellidos like ?";
					break;

				case "documento":
					$cond = "pacIdentificacion like ?";
					break;
				
				default:
					$cond = "1";
					break;
			}
			$dato = "%".$dato."%";
		}
		elseif($campo == '' && $dato == ''){
			$cond = 1;
		}
		elseif ($campo == '' && $dato != '') {
			$dato  = "%".$dato."%";
			$cond = "pacNombre like ? or pacApellidos like ? ".$dato;
		}

		$sql = "SELECT * FROM pacientes WHERE $cond";
		try {
			$conn = new Conexion();
			$stmt = $conn -> conectar() -> prepare($sql);

			if ($campo == '' && $dato != ''){
				print "<br>1- dato = $dato<br>";
				$stmt -> bindParam(1, $dato, PDO::PARAM_STR);
				$stmt -> bindParam(2, $dato, PDO::PARAM_STR);
			}
			else{
				print "<br>2- dato = $dato<br>";
				$stmt -> bindParam(1, $dato, PDO::PARAM_STR);
			}

			if($stmt -> execute()){
				return $stmt -> fetchAll();
			}
			else{
				return [];
			}
			$stmt -> close();
		} catch (Exception $e) {
			print_r("Ocurrio un Error");
		}
	}
}