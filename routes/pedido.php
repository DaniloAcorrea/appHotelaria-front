<?php
 
require_once __DIR__ . "/../controllers/PedidoController.php";
 
if ( $_SERVER['REQUEST_METHOD'] === "GET" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        PedidoController::getById($con,$id);
    }
    else{
        PedidoController::getAll($con);
    }

}

elseif($_SERVER['REQUEST_METHOD'] === "POST"){
        $data = json_decode(file_get_contents('php://input'), true);
       PedidoController::criar($con, $data);
    }

elseif($_SERVER['REQUEST_METHOD'] === "PUT"){
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
       PedidoController::atualizar($con, $id, $data);
    }

    

elseif ( $_SERVER['REQUEST_METHOD'] === "DELETE" ){
    $id = $segments[2] ?? null;
 
    if(isset($id)){
        PedidoController::delete($con,$id);
    }
    else{
        jsonResponse(['message'=>"id do pedido obrigatorio"],403);
    }
 
 
}
 
else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'
    ], 405);

}

 
 
?>