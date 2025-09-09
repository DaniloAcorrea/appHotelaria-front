import { loginRequest, saveToken } from "../api/authAPI.js";
import LoginForm from "../components/LoginForm.js";
import Navbar from "../components/NavBar.js";



export default function renderLoginPage() {
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navbar = Navbar();
    nav.appendChild(navbar);



    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';

    const titulo = document.createElement('h2');
    titulo.textContent = 'Login';
    titulo.className = 'titulo'



    //Dentro de divRoot terá uma div chamada container e em container estará o formulario
    const container = document.createElement('div');
    container.className = 'card p-4 shadow-lg'; //Classe do Bootstrap para criar um card
    container.style.width = '100%'; //Aplicada a largura de 100% na div container para ocupar a tela
    container.style.maxWidth = '400px'; //Até que atinja o máximo de 400px

    const formulario = LoginForm();

    const btnCadastrar = document.createElement('button');
    btnCadastrar.textContent = "Crie uma conta";
    btnCadastrar.className = 'btn btn-link mt-2 text-center';

    btnCadastrar.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = "cadastro";
    });
   
    const inputEmail = formulario.querySelector('input[type="email"]');
    const inputSenha = formulario.querySelector('input[type="password"]');
  

    formulario.addEventListener('submit', async (e) => {
        e.preventDefault();
        const email = inputEmail.value.trim();
        const senha = inputSenha.value.trim();

        try {
            const result = await loginRequest(email, senha);
    
            saveToken(result.token)
            //window.location.href = "/home";
        }
        catch (error) {
            console.error("Erro ao realizar login:", error);
        
        }
    })
    
    container.appendChild(titulo);
    container.appendChild(formulario); //Nova div container, já dentro de divRoot, contém o form
    divRoot.appendChild(container); //divRoot contém a nova div
    formulario.appendChild(btnCadastrar); //Adiciona o botão de cadastro ao formulário



}
