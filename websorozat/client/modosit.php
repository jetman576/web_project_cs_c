<h1 class="text-center">Leírás módosítása</caption>
</h1>
<div class="row justify-content-center">
  <div class="table-responsive-md">
    <div class="table-container ">
      <table class="table  table-striped  ">
        <thead class="thead thead-dark">
          <th>Id</th>
          <th>Feltöltés Címe</th>
          <th>Feltöltés Tipusa</th>
          <th>Sorozat Id</th>
          <th>&nbsp;</th>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<!------------------------------------------------->
<script>
  function megh(){
   fetch(`../server/readfeltoltesek.php`)
        .then((response) => response.json())
        .then((data) => render(data));
  }
    function render(data) {
        //console.log(data);
        let tblString = "";
        for (let obj of data)
            tblString += `<tr><td>${obj.id}</td><td>${obj.vidcim}</td><td>${obj.tipus}</td><td>${obj.sorozatid}</td><td contenteditable class="border border-danger">${obj.leiras}</td>
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