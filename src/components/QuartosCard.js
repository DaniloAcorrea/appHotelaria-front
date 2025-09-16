export default function QaurtosCard() {
   const card = document.createElement('div');
    card.className = "cardContainer";
  
  card.innerHTML = `
  <div class="card" style="width: 18rem;">
  <img src="public/assets/img/card1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">nego ney</h5>
    <p class="card-text">descrição do quarto</p>
    <a href="#" class="btn btn-primary">Reservar</a>
  </div>
</div>
`;

return card;
}


