<?php
 
    require_once __DIR__ ."/controllers/AuthController.php";
    require_once __DIR__ ."/controllers/quartosController.php";
    require_once __DIR__ ."/controllers/passwordController.php";
    require_once __DIR__ ."/controllers/AdicionalController.php";
    require_once __DIR__ ."/helpers/token_jwt.php";
    

    adiciona::criar($con, $data);

   
    // $data = [ 
    //     "nome" => "quarto do bom",
    //     "numero" => 127,
    //     "qtd_cama_casal" => 2, 
    //     "qtd_cama_solteiro" => 5,
    //     "preco" => 120,
    //     "disponivel" => 1
    // ];
    

    // $data = [
    //     "email"=>"danilo.acorrea@gmail.com",
    //     "senha"=> "123456"
    // ];
 
    //authentiqueController::login($con, $data);
 
    // echo PasswordController::generateHash($data['senha']);

    // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzaXRlbWV1RGFuaWxvIiwiaWF0IjoxNzU2OTI2ODY2LCJleHAiOjE3NTY5MzA0NjYsInN1YiI6eyJpZCI6Mywibm9tZSI6IkRhbmlsbyIsImVtYWlsIjoiZGFuaWxvLmFjb3JyZWFAZ21haWwuY29tIiwicm9sZXMiOiJnZXJlbmNpYSJ9fQ.kL1ZYBR8W-JLG_Bty0jx5cSCiXLuSLKK_BiAq2bkXvU";
    // echo var_dump(validateToken($token));

 
    //$hash = ''
    //echo "<br>";
    //echo PasswordController::validateHash($data['password'], $hash);
?>