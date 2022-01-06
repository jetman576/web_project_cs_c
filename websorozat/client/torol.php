<h1 class="text-center">Feltöltés Törlése</h1>
<div class="row justify-content-center">
    <div class="table-responsive-md">
        <div class="table-container ">
            <table class="table  table-striped  ">
                <thead class="thead thead-dark">
                    <th>Id</th>
                    <th>Feltöltés Cím</th>
                    <th>Feltöltés Tipus</th>
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
    function mhiv(){
    fetch(`../server/readfeltoltesek.php`)
        .then((response) => response.json())
        .then((data) => render(data));
    }

    function render(data) {
        console.log(data);
        let tblString = "";
        for (let obj of data)
            tblString += `<tr><td>${obj.id}</td><td>${obj.vidcim}</td><td>${obj.tipus}</td><td>${obj.sorozatid}</td>
                    <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">delete</td></tr>`;
        document.querySelector("tbody").innerHTML = tblString;


    }

    function del(obj) {
        console.log(obj.id)
        fetch(`../server/deletefeltoltesek.php?id=${obj.id}`)
            .then((response) => response.text())
            .then((data) => {
                console.log(data)
                mhiv()
            });

    }

    mhiv()
</script>