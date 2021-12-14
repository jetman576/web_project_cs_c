<h1 class="text-center">Leírás módosítása</caption>
</h1>
<div class="row justify-content-center">
  <div class="table-responsive-md">
    <div class="table-container ">
      <table class="table  table-striped  ">
        <thead class="thead thead-dark">
          <th>Id</th>
          <th>Szám</th>
          <th>Szakma</th>
          <th>Leírás</th>
          <th>&nbsp;</th>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<!------------------------------------------------->
<script>
   fetch(`../server/readSzakok.php`)
        .then((response) => response.json())
        .then((data) => render(data));

    function render(data) {
        //console.log(data);
        let tblString = "";
        for (let obj of data)
            tblString += `<tr><td>${obj.id}</td><td>${obj.szam}</td><td>${obj.megnevezes}</td><td contenteditable class="border border-danger">${obj.leiras}</td>
                    <td class="btn btn-success" id="${obj.id}" onclick="update(this)">módosít</td></tr>`;
        document.querySelector("tbody").innerHTML = tblString;
    }

    function update(obj){
      console.log(obj.id)
      let id=obj.id
      let leiras=obj.previousElementSibling.textContent
      console.log(leiras)
      fetch(`../server/updateLeiras.php?id=${id}&leiras=${leiras}`)
            .then((response) => response.text())
            .then((data) => console.log(data));


    }
</script>