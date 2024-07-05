<?php
class Chamado extends Conectar{

    public function insert_chamado($userID,$categoriaID,$chamadoTitulo,$chamadoDescricao){
        $conectar= parent::Conexao();
        parent::set_names();
        $sql="INSERT INTO chamado (chamadoID, userID, categoriaID, chamadoTitulo, chamadoDescricao, chamadoEstado, criadoData, est) VALUES (NULL,?,?,?,?,'Aberto',now(),'1');";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$userID);
        $sql->bindValue(2,$categoriaID);
        $sql->bindValue(3,$chamadoTitulo);
        $sql->bindValue(4,$chamadoDescricao);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_chamado_user($userID){
        $conectar= parent::Conexao();
        parent::set_names();
        $sql="SELECT chamado.chamadoID,
            chamado.userID,
            chamado.categoriaID,
            chamado.chamadoTitulo,
            chamado.chamadoDescricao,
            chamado.chamadoEstado,
            chamado.criadoData,
            users.userNome,
            users.userDepartamento,
            categoria.categoriaNome
            FROM
            chamado
            INNER JOIN categoria on chamado.categoriaID = categoria.categoriaID
            INNER JOIN users on chamado.userID = users.userID
            WHERE chamado.est =1
            AND users.userID=?;";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$userID);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_chamado(){
        $conectar= parent::Conexao();
        parent::set_names();
        $sql="SELECT chamado.chamadoID,
            chamado.userID,
            chamado.categoriaID,
            chamado.chamadoTitulo,
            chamado.chamadoDescricao,
            chamado.chamadoEstado,
            chamado.criadoData,
            users.userNome,
            users.userDepartamento,
            categoria.categoriaNome
            FROM
            chamado
            INNER JOIN categoria on chamado.categoriaID = categoria.categoriaID
            INNER JOIN users on chamado.userID = users.userID
            WHERE chamado.est = 1
            ";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function listar_chamado_detalhe_x_chamado($chamadoID){
        $conectar= parent::Conexao();
        parent::set_names();
        $sql="
        SELECT 
        chamadodetalhe.chamadodID,
        chamadodetalhe.chamadoDescricao,
        chamadodetalhe.fetch_criar,
        users.userNome,
        users.userDepartamento
        FROM 
        chamadodetalhe 
        INNER JOIN users on chamadodetalhe.userID = users.userID
        WHERE 
        chamadoID= ?;
        ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$chamadoID);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

}
?>