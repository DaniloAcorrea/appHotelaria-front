<?php
    class AdicionalModel{
        public static function listarTodos($con){
            $sql = "SELECT * FROM adicionais";
            $resultado = $con->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public static function buscarPorId($con, $id){
            $sql = "SELECT * FROM adicionais WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();

        }

        public static function criar($con, $data){
            $sql = "INSERT INTO adicionais (nome, preco) VALUES (?,?)";

            $stmt = $con->prepare($sql);
            $stmt->bind_param("sd",
                    $data["nome"],
                    $data["preco"]
                );
            return $stmt->execute();
        }

        public static function atualizar($con, $id, $data){
            $sql = "UPDATE adicionais SET nome = ?, preco = ? WHERE id = ?";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sdi",
                $data["nome"],
                $data["preco"],
                $id
            );
            return $stmt->execute();

        }

        public static function deletar($con, $id){
            $sql = "DELETE FROM adicionais WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
    }

?>