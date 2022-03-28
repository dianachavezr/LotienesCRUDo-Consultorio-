<?php
require_once("layouts/header.php");
?>
<body>
    <div class="panel">

      <?php
        if (isset($_GET["route"])){
          if (
              $_GET["route"] == "home" ||
              $_GET["route"] == "consultas" ||
              $_GET["route"] == "paciente" ||
              $_GET["route"] == "medicos"
          ){
            include "components/".$_GET["route"].".php";
          }
        }
        else {
          include "components/home.php";
        }
      ?>

    </div>
</body>
</html>