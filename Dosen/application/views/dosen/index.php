<div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>NID</th><th>Nama</th><th>Gender</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor=1;
        foreach($list_dsn as $dsn){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$dsn->nid?></td>
                <td><?=$dsn->nama?></td>
                <td><?=$dsn->gender?></td>
            </tr>
        <?php
        $nomor++;
        }
        ?>
        </tbody>
    </table>
</div>