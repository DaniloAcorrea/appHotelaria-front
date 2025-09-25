<?php
<?php
    class PedidoModel{

        public static function listarTodos($con){
            $sql = "SELECT * FROM pedidos";
            $resultado = $con->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public static function buscarPorId($con, $id){
            $sql = "SELECT * FROM pedidos WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();

        }

        public static function criar($con, $data){
            $sql = "INSERT INTO pedidos (fk_usuario_id, fk_cliente_id, data, pagamento) VALUES (?,?,?,?)";

            $stmt = $con->prepare($sql);
            $stmt->bind_param("iiis",
                    $data["fk_usuario_id"],
                    $data["fk_cliente_id"],
                    $data["data"],
                    $data["pagamento"]
                );
            return $stmt->execute();
        }

        public static function atualizar($con, $id, $data){
            $sql = "UPDATE pedidos SET fk_usuario_id = ?, fk_cliente_id = ?, data = ?, pagamento = ?, WHERE id = ?";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("iiiss",
                $data["fk_usuario_id"],
                $data["fk_cliente_id"],
                $data["data"],
                $data["pagamento"]
                $id
            );
            return $stmt->execute();

        }

        public static function deletar($con, $id){
            $sql = "DELETE FROM pedidos WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
    }

?>
?>