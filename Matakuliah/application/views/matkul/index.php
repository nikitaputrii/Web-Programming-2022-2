<div class="col-md-12">
    <h3>
    Daftar Mata Kuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
            <th>#</th><th>Mata Kuliah</th><th>Hari</th><th>Jam</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($list_mk as $mk){
            ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$mk->matkul?></td>
            <td><?=$mk->hari?></td>
            <td><?=$mk->jam?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>