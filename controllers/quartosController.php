<?php
require_once __DIR__ . "/../models/QuartoModel.php";

class quartosController{
    public static function criar($con, $data){
        $resultado = QuartoModel::criar($con, $data);
        if($resultado){
            return jsonResponse(["message"=>'Quarto Cadastrado com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }

    }
public static function listarTodos($con){
    $listaQuartos = QuartoModel::listarTodos($con);
    return jsonResponse($listaQuartos);
}

public static function buscarPorId($con, $id){
    $buscarId = QuartoModel::buscarPorId($con, $id);
    return jsonResponse($buscarId);
}

public static function deletar($con, $id){
     $resultado = QuartoModel::deletar($con, $id);
        if($resultado){
            return jsonResponse(["message"=>'Quarto excluido com sucesso!!!!']);
        }else{
            return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
        }
}

public static function atualizar($con, $id){
    $resultado = QuartoModel::criar($con, $id);
    if($resultado){
        return jsonResponse(["message"=>'Quarto atualizado com sucesso!!!!']);
    }else{
        return jsonResponse(["message"=>'Eita rapaz algo deu rum ai em!!!!'],400);
    }
}

}




?>