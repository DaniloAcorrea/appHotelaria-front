export async function loginRequest(email, senha){
   
    const dados = {email, senha};
    const response = await fetch("api/login", {
        method: "POST",
        headers: {
           "Accept": "application/json",
           "Content-Type": "application/json"
        },

        body: JSON.stringify(dados),

        //body: new URLSearchParams({email, senha}).toString(),
 
        /* URL da requisisção é a mesma da origem do front (mesmo protocolo http/mesmo dominio - local/mesma porta 80 do servidor web Apache)
        Front: http://localhost/sitemeuMaldonado/public/index.html
        Back: http://localhost/sitemeuMaldonado/api/login.php
        */
       credentials: "same-origin"
    });
 
    // Interpreta a resposta como JSON
    let data = null;
    try{
        data = await response.json();
    }
    catch{
        // Se não for JSON válido, data permanece null
        data = null;
    }
 
    if(!data || !data.token){
        const message = "Resposta invalida do servidor. token ausebt";
        return {ok: false, token: null, raw: data, message};
    }

    return {
        ok: true,
        token: data.token,
        raw: data
    };


}
    export function saveToken(token){
          localStorage.setItem("auth_token", token);
        
    }

    export function getToken(){
        return localStorage.getItem("auth_token");
    }

    export function clearToken(){
        localStorage.removeItem("auth_token")
    }


