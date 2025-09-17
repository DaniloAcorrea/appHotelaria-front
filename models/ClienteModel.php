<?php
    class ClientModel{
        public static function listarTodos($con){
            $sql = "SELECT * FROM clientes";
            $resultado = $con->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public static function buscarPorId($con, $id){
            $sql = "SELECT * FROM clientes WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();

        }

        public static function criar($con, $data){
            $sql = "INSERT INTO clientes (nome, cpf, telefone, email, senha) VALUES (?,?,?,?,?)";

            $stmt = $con->prepare($sql);
            $stmt->bind_param("sssss",
                    $data["nome"],
                    $data["cpf"],
                    $data["telefone"],
                    $data["email"],
                    $data["senha"]
                );
            return $stmt->execute();
        }

        public static function atualizar($con, $id, $data){
            $sql = "UPDATE clientes SET nome = ?, cpf = ?, telefone = ?, email = ?, senha = ? WHERE id = ?";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssss",
                $data["nome"],
                $data["cpf"],
                $data["telefone"],
                $data["email"],
                $data["senha"],
                $id
            );
            return $stmt->execute();

        }

        public static function deletar($con, $id){
            $sql = "DELETE FROM clientes WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
    }

?>