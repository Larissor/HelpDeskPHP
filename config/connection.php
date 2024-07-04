<?php
session_start();
class Conectar{
    protected $dbh;
    protected function Conexao(){
        try{
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk","root","1234");
            return $conectar;
        }catch(Exception $e){
            print "Erro". $e->getMessage() ."</br>";
            die(); 
    }

}

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function rota(){
        return "http://localhost:80/ProjetoSenac1.0/";
    }
}

?>