<?php
 
require_once __DIR__ . "/../controllers/ReservaController.php";
 
if ( $_SERVER['REQUEST_METHOD'] === "GET" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        ReservaController::getById($con,$id);
    }
    else{
        ReservaController::getAll($con);
    }

}

elseif($_SERVER['REQUEST_METHOD'] === "POST"){
        $data = json_decode(file_get_contents('php://input'), true);
       ReservaController::criar($con, $data);
    }

elseif($_SERVER['REQUEST_METHOD'] === "PUT"){
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
       ReservaController::atualizar($con, $id, $data);
    }

    

elseif ( $_SERVER['REQUEST_METHOD'] === "DELETE" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        ReservaController::delete($con,$id);
    }
    else{
        jsonResponse(['message'=>"id da reserva obrigatorio"],403);
    }
 
 
}
 
else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'
    ], 405);

}

 
 
?>