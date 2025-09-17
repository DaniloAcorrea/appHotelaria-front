<?php
require_once __DIR__ . "/../models/ClienteModel.php";

class ClienteController{
    public static function criar($con, $data){
        $result = ClientModel::criar($con, $data);
        if($result){
            return jsonResponse(["message"=>'cliente Cadastrado com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }

    }
public static function listarTodos($con){
    $listaQuartos = ClientModel::listarTodos($con);
    return jsonResponse($listaQuartos);
}

public static function buscarPorId($con, $id){
    $buscarId = ClientModel::buscarPorId($con, $id);
    return jsonResponse($buscarId);
}

public static function deletar($con, $id){
     $resultado = ClientModel::deletar($con, $id);
        if($resultado){
            return jsonResponse(["message"=>'cliente excluido com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }
}

public static function atualizar($con, $id, $data){
    $resultado = ClientModel::atualizar($con, $id,$data);
    if($resultado){
        return jsonResponse(["message"=>'cliente atualizado com sucesso!!!!']);
    }else{
        return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
    }
}

}




?>