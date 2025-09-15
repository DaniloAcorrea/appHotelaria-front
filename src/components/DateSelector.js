export default function DateSelector() {
   const dateselector = document.createElement('div');

  
  dateselector.innerHTML = `
  <div>
  <input type="text" placeholder="">
  <input type="text" placeholder="">
  <select>
    <option>1 adulto · 0 criança · 1 cômodo</option>
  </select>
  <button>Pesquisar</button>
</div>
  `
return dateselector;
}


