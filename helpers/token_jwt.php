<?php 
require_once __DIR__ . "/jwt/jwt_include.php";

use firebase\JWT\JWT;
use firebase\JWT\Key;

function CreateToken($user){
    $playload = [
        "iss" =>"sitemeuDanilo",
        "iat" => time(),
        "exp" => time() + (60*(60 * 1)),
        "sub" => $user

    ];
    return JWT::encode($playload, SECRET_KEY);

}

function validateToken($token){
    try{
        $key = new Key(SECRET_KEY, 'HS256');
        $decode = JWT::decode($token, $key);
        return $decode->sub;
    }catch(Exception $error){
       return "erro";
    }
}


?>