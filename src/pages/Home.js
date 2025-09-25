import Footer from "../components/Footer.js";
import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";
import RoomCard from "../components/RoomCard.js";

export default function renderHomePage() {
    // Navbar
    const nav = document.getElementById('navbar');
    if (nav) {
        nav.innerHTML = '';
        const navbar = Navbar();
        nav.appendChild(navbar);
    } else {
        console.error("Element with ID 'navbar' not found");
    }

    // Root (page body)
    const divRoot = document.getElementById('root');
    if (divRoot) {
        divRoot.innerHTML = '';
        const hero = Hero();
        divRoot.appendChild(hero);

        const cardsGroup = document.createElement('div');
        cardsGroup.className = "cards";
        for (let i = 0; i < 3; i++) {
            const cards = RoomCard(i);
            cardsGroup.appendChild(cards);
        }
        divRoot.appendChild(cardsGroup);
    } else {
        console.error("Element with ID 'root' not found");
    }

    // Footer
    const foot = document.getElementById('footer');
    console.log('Footer element:', foot);
    if (foot) {
        foot.innerHTML = '';
        const footer = Footer();
        if (footer instanceof Node) {
            foot.appendChild(footer);
        } else {
            console.error('Footer component returned invalid content:', footer);
        }
    } else {
        console.error("Element with ID 'footer' not found");
    }
}

// Run after DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    renderHomePage();
});