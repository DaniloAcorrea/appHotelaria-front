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

    const date = document.getElementById('div')
    date.innerHTML = '';

    const dateselector = DateSelector();
    date.appendChild(dateselector);
    
    // const card = document.getElementById('root');
    // card.innerHTML = '';

    // const carrd = QaurtosCard();
    // card.appendChild(carrd)
 

    const foot = document.getElementById('footer');
    foot.innerHTML = '';

    const footer = Footer();
    foot.appendChild(footer);

    


}