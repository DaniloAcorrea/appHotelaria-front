<?php
require_once __DIR__ . "/../models/AdicionalModel.php";

class AdicionalController{
  
    public static function criar($con, $data){
        $resultado = AdicionalModel::criar($con, $data);
        if($resultado){
            return jsonResponse(["message"=>'Quarto Cadastrado com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }

    }
public static function listarTodos($con){
    $listarAdicionais = AdicionalModel::listarTodos($con);
    return jsonResponse($listarAdicionais);
}

public static function buscarPorId($con, $id){
    $buscarId = AdicionalModel::buscarPorId($con, $id);
    return jsonResponse($buscarId);
}

public static function deletar($con, $id){
     $resultado = AdicionalModel::deletar($con, $id);
        if($resultado){
            return jsonResponse(["message"=>'Quarto excluido com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }
}

public static function atualizar($con, $id, $data){
    $resultado = AdicionalModel::atualizar($con, $id,$data);
    if($resultado){
        return jsonResponse(["message"=>'Quarto atualizado com sucesso!!!!']);
    }else{
        return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
    }
}

}




?>