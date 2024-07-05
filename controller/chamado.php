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
    }
?>