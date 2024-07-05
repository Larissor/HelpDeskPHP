<?php 
 require_once("config/connection.php");
 if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
     require_once("models/Usuario.php");
     $usuario = new Usuario();
     $usuario->login();
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Chamados</title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/metisMenu.min.css" rel="stylesheet">
        <link href="public/css/startmin.css" rel="stylesheet">
        <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" id="lbltitulo">Portal de Chamados</h3>
                        </div>
                        <div class="panel-body">

                            

                            <form class="sign-box" action="" id="login_form" method="post" role="form">
                            <input type="hidden" id="rol_id" name="rol_id" value="1">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" id="userEmail" name="userEmail" placeholder="E-mail"  type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" id="userSenha" name="userSenha" type="password" value="">
                                    </div>
                                    <input type="hidden" name="enviar" class="form-control" value="si">
                                    <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                    ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    Senha ou e-mail incorreto.
                                </div>
                                    <?php
                                break;

                                case "2";
                                    ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    Campos para login vazio.
                                </div>
                                    <?php
                                break;
                            }
                        }
                    ?>
                                    
                                    <div class="float-left reset">
                                        <a href="#" id="btnsuporte">Entrar como suporte</a>
                                    </div>
                                    <br>
                                    <button type="submit"  class="btn btn-lg btn-success btn-block">Entrar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/metisMenu.min.js"></script>
        <script src="public/js/startmin.js"></script>
        <script type="text/javascript" src="index.js"></script>

    </body>
</html>
