<?php
require_once("config.php");
require_once("controlador/index.php");

//para saber si existe la variable m y llamarla
if (isset($_GET['m'])) :
    if (method_exists("modeloController", $_GET['m'])) :
        modeloController::{$_GET['m']}();
    endif;
else :
    modeloController::index();
endif;
