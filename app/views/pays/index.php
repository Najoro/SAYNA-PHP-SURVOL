
<h1>Liste des pays</h1>
<table class="table table-bordered table-striped">
    <thead>
        <th>id</th>
        <th>name</th>
    </thead>
    <tbody>
        <?php foreach($pays as $p) :?>
            <tr >
                <td> <?= $p["id"]?>  </td>
                <td > <?= $p['nom']?> </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>