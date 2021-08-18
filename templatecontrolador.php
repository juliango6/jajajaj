<?php 

	class TemplateControlador{
		
	public function abrirTemplate() {
			include "vista/template.php";
		}

		public function validarEnlaceControlador(){
			if (isset($_GET['action'])) {
				$enlace = $_GET['action'];
			}

			else {
				$enlace = "inicio";
			}
			$template = new EnlacesModelo();
			$ruta = $template -> validarEnlacesModelo($enlace);
			include ($ruta);
			
		}
	}

