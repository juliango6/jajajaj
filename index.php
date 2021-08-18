<?php

require_once("controllers/templatecontrolador.php");
require_once("controllers/pacientecontrolador.php");

require_once("model/enlacemodelo.php");
require_once("model/pacientemodelo.php");

$template = new TemplateControlador();
$template->cargarTemplate();

?>