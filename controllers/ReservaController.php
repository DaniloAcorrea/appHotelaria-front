<?php
require_once __DIR__ . "../models/ReservaModel.php";

class ReservaController{
    public static function criar($con, $data){
        $resultado = ReservaModel::criar($con, $data);
        if($resultado){
            return jsonResponse(["message"=>'Quarto Cadastrado com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }

    }
public static function listarTodos($con){
    $listaQuartos = ReservaModel::listarTodos($con);
    return jsonResponse($listaQuartos);
}

public static function buscarPorId($con, $id){
    $buscarId = ReservaModel::buscarPorId($con, $id);
    return jsonResponse($buscarId);
}

public static function deletar($con, $id){
     $resultado = ReservaModel::deletar($con, $id);
        if($resultado){
            return jsonResponse(["message"=>'Quarto excluido com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }
}

public static function atualizar($con, $id, $data){
    $resultado = ReservaModel::atualizar($con, $id,$data);
    if($resultado){
        return jsonResponse(["message"=>'Quarto atualizado com sucesso!!!!']);
    }else{
        return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
    }
}

}




?>