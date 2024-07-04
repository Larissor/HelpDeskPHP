<?php
class Categoria extends Conectar{

    public function get_categoria(){
        $conectar= parent::Conexao();
        parent::set_names();
        $sql="SELECT * FROM categoria WHERE est=1;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

}
?>