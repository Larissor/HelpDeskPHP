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
            <div id="page-wrapper">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-12">
                        <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">Detalhes do chamado</h1>
                        <div class="row">
             <!-- Conteúdo-->
             <div class="chat-panel panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-comments fa-fw"></i>
                                Chat
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                            data-toggle="dropdown">
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu slidedown">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-refresh fa-fw"></i> Refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-check-circle fa-fw"></i> Available
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-times fa-fw"></i> Busy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-clock-o fa-fw"></i> Away
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <section id="lbldetalhe">
                                <ul class="chat">

                                <li class="left clearfix">
                <span class="chat-img pull-left">
                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                            class="img-circle"/>
                </span>

            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">Jack Sparrow</strong>
                    <small class="pull-right text-muted">
                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                    </small>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                    ornare dolor, quis ullamcorper ligula sodales.
                </p>
               </div>
            </li>
                               
                                </ul>
                            </section>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-sm"
                                           placeholder="Type your message here..."/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                                Send
                                            </button>
                                        </span>
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