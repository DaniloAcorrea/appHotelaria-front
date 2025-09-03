<?php

    Class QuartoModel{

    public static function validateUser($conn, $nome, $qtd_cama_casal,){
        $sql = "SELECT nome, numero_quarto, qtd_cama_casal, qtd_cama_solteiro, preco, disponivel FROM quartos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();



        if($result = $stmt->fetch_assoc()){
            if($user['senha'] === $senha ){
                unset($user['senha']);
                return $user;
            }
        }
        return false;
    }
    }


?>