<?php
 
require_once __DIR__ . "/../controllers/AdicionalController.php";
 
if ( $_SERVER['REQUEST_METHOD'] === "GET" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        AdicionalController::getById($con,$id);
    }
    else{
        AdicionalController::getAll($con,$id);
    }

}

elseif($_SERVER['REQUEST_METHOD'] === "POST"){
        $data = json_decode(file_get_contents('php://input'), true);
        AdicionalController::criar($con, $data);
    }

elseif($_SERVER['REQUEST_METHOD'] === "PUT"){
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
       AdicionalController::atualizar($con, $id, $data);
    }

    

elseif ( $_SERVER['REQUEST_METHOD'] === "DELETE" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        AdicionalController::delete($con,$id);
    }
    else{
        jsonResponse(['message'=>"id do adicional obrigatorio"],403);
    }
 
 
}
 
else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'
    ], 405);

}

 
 
?>