import DateSelector from "../components/DateSelector.js";
import Footer from "../components/Footer.js";
import Hero from "../components/hero.js";
import Navbar from "../components/NavBar.js";
import QaurtosCard from "../components/QuartosCard.js"; "../components/QaurtosCard.js";


export default function renderHomePage(){
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';
    
    const navbar = Navbar();
    nav.appendChild(navbar);
    
    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';
    
   
    const hero = Hero();
    divRoot.appendChild(hero);

    const cardsGrup = document.createElement('div');
    cardsGrup.className = "cards";

    for(var i = 0; i>3; i++) {
        const cards = QaurtosCard();
        cardsGrup.appendChild(cards);
    }
    divRoot.appendChild(cardsGrup);

   const date = DateSelector();
    divRoot.appendChild(date)


    const foot = document.getElementById('footer');
    foot.innerHTML = '';
    
    const footer = Footer();
    foot.appendChild(footer);
    
    


}