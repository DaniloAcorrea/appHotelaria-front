import renderCadastroPage from "./pages/Cadastro.js";
import renderLoginPage from "./pages/login.js";

const routes = {
    "/login": renderLoginPage,
    "/cadastro": renderCadastroPage,
};

function getPath(){
    const url = (location.hash || "").replace(/^#/, "").trim();
    return url && url.startsWith("/") ? url : "/login";
}

function renderRoute() {
    const url = getPath();
    const render = routes[url] || routes["/login"];
    renderPage();
}

window.addEventListener("hashchange", renderRoute);

window.addEventListener('DOMContentLoaded', renderRoute);