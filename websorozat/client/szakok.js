fetch(`../server/readSzakok.php`)
  .then((response) => response.json())
  .then((data) => render(data));

function render(data) {
  //console.log(data);
  let tblString = "";
  for (let obj of data) 
    tblString += `<tr><td>${obj.id}</td><td>${obj.szam}</td><td>${obj.megnevezes}</td><td>${obj.agazat}</td></tr>`;
  document.querySelector("tbody").innerHTML = tblString;

}
