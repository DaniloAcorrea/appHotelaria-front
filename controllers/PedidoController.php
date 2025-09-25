<?php
require_once __DIR__ . "../models/PedidoModel.php";

class PedidoController{
    public static function criar($con, $data){
        $resultado = PedidoModel::criar($con, $data);
        if($resultado){
            return jsonResponse(["message"=>'Quarto Cadastrado com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }

    }
public static function listarTodos($con){
    $listaQuartos = PedidoModel::listarTodos($con);
    return jsonResponse($listaQuartos);
}

public static function buscarPorId($con, $id){
    $buscarId = PedidoModel::buscarPorId($con, $id);
    return jsonResponse($buscarId);
}

public static function deletar($con, $id){
     $resultado = PedidoModel::deletar($con, $id);
        if($resultado){
            return jsonResponse(["message"=>'Quarto excluido com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }
}

public static function atualizar($con, $id, $data){
    $resultado = PedidoModel::atualizar($con, $id,$data);
    if($resultado){
        return jsonResponse(["message"=>'Quarto atualizado com sucesso!!!!']);
    }else{
        return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
    }
}

}




?>