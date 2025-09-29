import Footer from "../../../sitemeuDanilo/src/components/Footer.js";
import CarouselCard from "../components/CarouselCard.js";
import DateSelector from "../components/DateSelector.js";
import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";
import RoomCard from "../components/RoomCard.js";

export default function renderHomePage() {
    //Navbar
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';
    const navbar = Navbar();
    nav.appendChild(navbar);

    //Root (corpo da página)
    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';

    const hero = Hero();
    divRoot.appendChild(hero);

    const dateSelector = DateSelector();
    divRoot.appendChild(dateSelector);
    
    //Grupo para incorporar cada div de cada card, para aplicar display-flex
    const cardsGroup = document.createElement('div');
    cardsGroup.className = "cards";

    /*Desafio: consertar o bug do carrossel
    em cada card, E AINDA REUTILIZANDO O MESMO
    COMPONENTE*/
    for (var i=0; i < 3; i++) {
        const cards = RoomCard(i);
        cardsGroup.appendChild(cards);
    }

    const carouselCard = CarouselCard();
    const carousel = carouselCard.getElementById('carousel');
    carousel.appendChild(cardsGroup);

    
    
    //Footer
    divRoot.appendChild(cardsGroup);    
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

