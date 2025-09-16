export default function DateSelector() {
   const dateselector = document.createElement('div');

  
  dateselector.innerHTML = `
<div class="search-bar">
        <div><input type="text" placeholder="Para onde você vai?"></div>
        <div class="date-input">
            <input type="date" placeholder="Data de check-in"> -
            <input type="date" placeholder="Data de check-out">
        </div>
        <div>
            <select>
                <option>2 adultos, 0 crianças, 1 quarto</option>
            </select>
        </div>
        <button class="search-button">Pesquisar</button>
    </div>
  `
return dateselector;
}


