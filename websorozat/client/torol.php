<h1 class="text-center">Szakma törlése</h1>
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
            tblString += `<tr><td>${obj.id}</td><td>${obj.szam}</td><td>${obj.megnevezes}</td><td>${obj.agazat}</td>
                    <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">delete</td></tr>`;
        document.querySelector("tbody").innerHTML = tblString;


    }

    function del(obj) {
        console.log(obj.id)
        fetch(`../server/deleteSzakmak.php?id=${obj.id}`)
            .then((response) => response.text())
            .then((data) => console.log(data));

    }
</script>