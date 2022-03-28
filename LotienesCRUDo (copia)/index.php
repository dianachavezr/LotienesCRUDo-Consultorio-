<?php
/* Controllers */
require_once "controllers/template.controller.php";
require_once "controllers/paciente.controller.php";
require_once "controllers/medico.controller.php";
require_once "controllers/consultas.controller.php";


/* Models */
require_once "model/paciente.model.php";
require_once "model/medico.model.php";
require_once "model/consultas.model.php";



$template = new TemplateController();
$template -> template();