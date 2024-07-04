<?php
    require_once("../../config/conenction.php");
    session_destroy();
    header("Location:".Conectar::rota()."index.php");
    exit();
?>