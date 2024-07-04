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
<title>Novo Chamado</title>
    <body>
        <div id="wrapper">

            <!-- Conteúdo-->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <h1 class="page-header">Novo chamado</h1>
                        <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Inserir informações do chamado
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Título</label>
                                                <input  type="text" class="form-control">
                                                <label>Descrição</label>
                                                <textarea id="descricaoChamado" class="form-control" rows="3"></textarea>
                                                <label>Categoria</label>
                                                <select id="categoriaID" class="form-control">
                                                    
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-primary">Enviar</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Conteúdo -->
            <script type="text/javascript" src="novochamado.js"></script>
        </div>
    </body>
</html>
<?php 
    }else{
        header("Location:".Conectar::rota()."index.php");
    }
?>