<?php
 
require_once __DIR__ . "/../controllers/quartosController.php";
 
if ( $_SERVER['REQUEST_METHOD'] === "GET" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        quartosController::getById($con,$id);
    }
    else{
        quartosController::getAll($con);
    }

}

elseif($_SERVER['REQUEST_METHOD'] === "POST"){
        $data = json_decode(file_get_contents('php://input'), true);
       quartosController::criar($con, $data);
    }

elseif($_SERVER['REQUEST_METHOD'] === "PUT"){
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
       quartosController::atualizar($con, $id, $data);
    }

    

elseif ( $_SERVER['REQUEST_METHOD'] === "DELETE" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        quartosController::delete($con,$id);
    }
    else{
        jsonResponse(['message'=>"id do quarto obrigatorio"],403);
    }
 
 
}
 
else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'
    ], 405);

}

 
 
?>