<?php

class TemplateControlador{
	
    public function cargarTemplate(){
        include 'views/template.php';
    }

    public function validarEnlacecontrolador(){
        if(isset($_GET['action'])) {
            $enlace = $_GET["action"];
        }
        else {
            $enlace = "inicio";
        }
        $template = new EnlaceModelo();
        $ruta = $template -> validarEnlaceModelo($enlace);
        include($ruta);
    }
}
