<?php
    class Usuario extends Conectar{

        public function login(){
            $conectar=parent::Conexao();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $email = $_POST["userEmail"];
                $senha = $_POST["userSenha"];
                $rol = $_POST["rol_id"];
                if(empty($email) and empty($senha)){
                    header("Location:".conectar::rota()."index.php?m=2");
					exit();
                }else{
                    $sql = "SELECT * FROM users WHERE userEmail=? and userSenha=? and rol_id=? and est=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $email);
                    $stmt->bindValue(2, $senha);
                    $stmt->bindValue(3, $rol);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["userID"]=$resultado["userID"];
                        $_SESSION["userNome"]=$resultado["userNome"];
                        $_SESSION["userDepartamento"]=$resultado["userDepartamento"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        header("Location:".Conectar::rota()."view/Home/");
                        exit(); 
                    }else{
                        header("Location:".Conectar::rota()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
