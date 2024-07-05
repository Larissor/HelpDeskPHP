<?php
    require_once("../config/connection.php");
    require_once("../models/Chamado.php");
    $chamado = new Chamado();

    switch($_GET["op"]){
        case "insert":
           $chamado->insert_chamado($_POST["userID"], $_POST["categoriaID"], $_POST["chamadoTitulo"], $_POST["chamadoDescricao"]);
        break;

        case "listar_chamado_user":
            $dados=$chamado->listar_chamado_user($_POST["userID"]);
            $data=Array();
            foreach($dados as $row){
                $sub_array = array();
                $sub_array[] = $row["chamadoID"];
                $sub_array[] = $row["categoriaNome"];
                $sub_array[] = $row["chamadoTitulo"];
                if($row["chamadoEstado"=="Aberto"]){
                    $sub_array[] = '<span class="btn btn-info">Aberto</span>';
                }else{
                    $sub_array[] = '<span class="btn btn-danger">fechado</span>';
                }
                $sub_array[] = date("d/m/Y H:i", strtotime($row["criadoData"]));
                $sub_array[] = '<button type="button" onClick="ver('.$row["chamadoID"].');"  id="'.$row["chamadoID"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

        break;

        case "listar":
            $dados=$chamado->listar_chamado();
            $data=Array();
            foreach($dados as $row){
                $sub_array = array();
                $sub_array[] = $row["chamadoID"];
                $sub_array[] = $row["categoriaNome"];
                $sub_array[] = $row["chamadoTitulo"];
                if($row["chamadoEstado"=="Aberto"]){
                    $sub_array[] = '<span class="btn btn-info">Aberto</span>';
                }else{
                    $sub_array[] = '<span class="btn btn-danger">fechado</span>';
                }
                
                $sub_array[] = date("d/m/Y H:i", strtotime($row["criadoData"]));
                $sub_array[] = '<button type="button" onClick="ver('.$row["chamadoID"].');"  id="'.$row["chamadoID"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

        break;

        case "listardetalhe":
            $dados=$chamado->listar_chamado_detalhe_x_chamado($_POST["chamadoID"]);
            ?>
    
            <?php
            foreach($dados as $row){
            ?>
                
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
                       
       <?php
        }
          

    
        break;
    
    }
?>