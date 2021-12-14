fetch(`../server/readAgazat.php`)
  .then((response) => response.json())
  .then((data) => render(data));

function render(data) {
  //console.log(data);
  let tblString = "";
  for (let obj of data) 
    tblString += `<tr><td>${obj.id}</td><td>${obj.nev}</td></tr>`;
  document.querySelector("tbody").innerHTML = tblString;

}
