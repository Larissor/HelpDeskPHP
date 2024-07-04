<?php
    require_once("../../config/connection.php");
    session_destroy();
    header("Location:".Conectar::rota()."index.php");
    exit();
?>