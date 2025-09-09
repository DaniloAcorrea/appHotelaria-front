export default function Hero() {
    const containerHero = document.createElement('div');
    containerHero.className = 'hero w-100 d-flex justify-content-center';

    

    containerHero.innerHTML = `
    <div class = "hero-frame rounded-4 w-100">
<div id="carouselExampleControls" class="carousel slide carousel-fad" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/assets/img/h1.jpg" alt="First slide">
    </div>
    <div class="carousel-item shadow ">
      <img class="d-block w-100" src="public/assets/img/h2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/assets/img/h3.jpg" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>`;

return containerHero;
}


