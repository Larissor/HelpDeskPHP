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
                        <h1 class="page-header">Consultar chamados</h1>
                        <div class="row">
                    <div class="col-lg-12">
                        
                    <div class="dataTable_wrapper">



                                        <div class="row">
            
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="chamado_data">
                                        <thead>
                                            <tr>
                                                <th>Número </th>
                                                <th>Categoria</th>
                                                <th>Título</th>
                                                <th>Criado em</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

					                    </tbody>
				                    </table>
			</div>
                                </div>






                    <div class="row">
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