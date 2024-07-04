<?php 
require_once("../../config/connection.php");
    if(isset($_SESSION["userID"])){
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../MainHead/head.php");
    require_once("../Mainjs/js.php");
    require_once("../Mainheader/header.php");
    require_once("../MainNav/nav.php");
    ?>
<title>Consultar Chamado</title>
    <body>
        <div id="wrapper">

            <!-- Conteúdo-->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Blank</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conteúdo -->
            <script type="text/javascript" src="consultarchamado.js"></script>
        </div>
    </body>
</html>
<?php 
    }else{
        header("Location:".Conectar::rota()."index.php");
    }
?>