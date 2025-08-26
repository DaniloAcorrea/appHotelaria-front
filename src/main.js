import renderCadastroPage from "./pages/Cadastro.js";
import renderHomePage from "./pages/Home.js";
import renderLoginPage from "./pages/login.js";

const routes = {
    "/login": renderLoginPage,
    "/cadastro": renderCadastroPage,
    "/home": renderHomePage,
};

function getPath(){
    const url = (location.hash || "").replace(/^#/, "").trim();
    return url && url.startsWith("/") ? url : "/home";
}

function renderRoute() {
    const url = getPath();
    const render = routes[url] || routes["/home"];
    render();
}

window.addEventListener("hashchange", renderRoute);

window.addEventListener('DOMContentLoaded', renderRoute);