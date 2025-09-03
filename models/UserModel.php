<?php 



class UserModel{

    public static function validateUser($con, $email, $senha){
        $sql = "SELECT usuarios.id, usuarios.nome,usuarios.email, usuarios.senha, roles.nome AS roles FROM usuarios JOIN roles ON roles.id = usuarios.fk_role_id WHERE usuarios.email = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if($user = $resultado->fetch_assoc()){
            if(PasswordController::validatehash($senha, $user['senha'])){
                unset($user['senha']);             
                return $user;
            }
        }
        return false;

    }
}

?>