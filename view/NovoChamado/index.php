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


                                    <form method="post" id="chamado_form">
                                        <input type="hidden" id="userID" name="userID" value="<?php echo $_SESSION["userID"] ?>">
                                        <div class="col-lg-6">
                                                <div class="form-group">

                                                    <label for="chamadoTitulo">Título</label>
                                                    <input id="chamadoTitulo", name="chamadoTitulo" type="text" class="form-control">

                                                    <label for="chamadoDescricao">Descrição</label>
                                                    <textarea id="chamadoDescricao" name="chamadoDescricao" class="form-control" rows="3"></textarea>

                                                    <label for="categoriaID">Categoria</label>
                                                    <select id="categoriaID" name="categoriaID" class="form-control">
                                                        
                                                    </select>
                                                    <br>
                                                    <button type="submit" value="add" name="action" onclick="alert('Enviado com sucesso')"  class="btn btn-primary">Enviar</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>


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