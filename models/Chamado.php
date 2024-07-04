<?php
class Chamado extends Conectar{

    public function insert_chamado($userID,$categoriaID,$chamadoTitulo,$tituloDescricao){
        $conectar= parent::Conexao();
        parent::set_names();
        $sql="INSERT INTO chamado (chamadoID, userID, categoriaID, chamadoTitulo, chamadoDescricao, est) VALUES (NULL, ?, ?, ?, ?, '1');";
        $sql=$conectar->prepare($sql);
        $sql->bindValue("1",$userID);
        $sql->bindValue("2",$categoriaID);
        $sql->bindValue("3",$chamadoTitulo);
        $sql->bindValue("4",$tituloDescricao);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

}
?>