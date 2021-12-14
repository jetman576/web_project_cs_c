
<h1 class="text-center">Ágazaton belüli szakok</h1>

<div class="row justify-content-center">
    <select class="custom-select w-50" id=""></select>
</div>

<div class="row justify-content-center ">
    <div class="table-responsive-md">
        <div class="table-container ">
            <table class="table  table-striped  ">
                <thead class="thead thead-dark"></thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<script src="szakok.js"></script>

<!------------------->

<script>
    fetch(`../server/readAgazat.php`)
  .then((response) => response.json())
  .then((data) => render(data));
//legördülő lista renderelése:
function render(data) {
  //console.log(data);
  let optString = '<option value="0">válassz ki egy ágazatot</option>';
  for (let obj of data) 
    optString += `<option value="${obj.id}">${obj.nev}</option>`;
  document.querySelector("select").innerHTML = optString;


  //felíratkozás a  change eseményre:
  document.querySelector('select').addEventListener('change',myFilter)
}

//teszt:
/*function myFilter(e) {
    console.log(e.target.value)
    fetch(`../server/teszt.php?idd=${e.target.value}`)
      .then((response) => response.text())
      .then((data) => console.log("Szerver oldalról jön:",data));
}
*/
function myFilter(e) {
  console.log(e.target.value)
  if(e.target.value!='0'){
    fetch(`../server/readSzakok.php?id=${e.target.value}`)
      .then((response) => response.json())
      .then((data) => renderTbl(data));
    }else{
      document.querySelector("thead").innerHTML=""
      document.querySelector("tbody").innerHTML=""
    }
  }

//táblázat renderelése:
  function renderTbl(data) {
    //console.log(data);
    document.querySelector("thead").innerHTML="<tr><th>Id</th><th>Szám</th><th>Szakma</th></tr>"
    let tblString = "";
    for (let obj of data) 
      tblString += `<tr><td>${obj.id}</td><td>${obj.szam}</td><td>${obj.megnevezes}</td></tr>`;
    document.querySelector("tbody").innerHTML = tblString ? tblString : 'nincs adat';
  }

</script>