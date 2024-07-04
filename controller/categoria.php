<?php
    require_once("../config/connection.php");
    require_once("../models/Categoria.php");
    $categoria = new Categoria();

    switch($_GET["op"]){
        case "combo":
            $dados = $categoria->get_categoria();
            if(is_array($dados)==true and count($dados)>0){
                foreach($dados as $row)
                {
                    $html.= "<option value='".$row['categoriaID']."'>".$row['categoriaNome']."</option>";
                }
                echo $html;
            }
        break;
    }
?>