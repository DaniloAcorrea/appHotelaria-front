<?php
<?php
<?php
    class ResevaModel{

        public static function listarTodos($con){
            $sql = "SELECT * FROM reservas";
            $resultado = $con->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public static function buscarPorId($con, $id){
            $sql = "SELECT * FROM reservas WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();

        }

        public static function criar($con, $data){
            $sql = "INSERT INTO reservas (fk_pedido_id, fk_quarto_id, fk_adicional_id, fim, inicio) VALUES (?,?,?,?,?)";

            $stmt = $con->prepare($sql);
            $stmt->bind_param("iiiss",
                    $data["fk_pedido_id"],
                    $data["fk_quarto_id"],
                    $data["fk_adicional_id"],
                    $data["fim"],
                    $data["inicio"]
                );
            return $stmt->execute();
        }

        public static function atualizar($con, $id, $data){
            $sql = "UPDATE reservas SET fk_pedido_id = ?, fk_quarto_id = ?, fk_adicional_id = ?, fim = ?, inicio = ? WHERE id = ?";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("iiiss",
                $data["fk_pedido_id"],
                $data["fk_quarto_id"],
                $data["fk_adicional_id"],
                $data["fim"],
                $data["inicio"]
                $id
            );
            return $stmt->execute();

        }

        public static function deletar($con, $id){
            $sql = "DELETE FROM reservas WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
    }

?>
?>
?>