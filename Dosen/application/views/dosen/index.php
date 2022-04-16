<div class="col-md-12">
    <h3>
    Daftar Dosen
    </h3>
    <table class="table">
        <thead>
            <tr>
            <th>#</th><th>NID</th><th>Nama</th><th>Gender</th>
            <th>Mata Kuliah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($list_ds as $ds){
            ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$ds->nid?></td>
            <td><?=$ds->nama?></td>
            <td><?=$ds->gender?></td>
            <td><?=$ds->matkul?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>