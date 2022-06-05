<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <style>
        .col-md-12{
            text-align: center;
        }
        h3, .btn-success{
            margin-left: 1vw;
            margin-bottom: 1vw
        }
        .btn-success{
            text-align: right;
        }
    </style>
</head>
<body>
    
<h3>Daftar Mata Kuliah</h3>
<a class="btn btn-success" href="create" role="button">Create Mata Kuliah</a>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>No</th><th>Kode</th><th>Nama</th><th>SKS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor=1;
            foreach($matakuliah as $mk){
            ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$mk->kode?></td>
            <td><?=$mk->nama?></td>
            <td><?=$mk->sks?></td>
            <td>
                <a class="btn btn-warning" href="detail?kode=<?=$mk->kode?>">Detail</a> 
                <a class="btn btn-dark" href="edit?kode=<?=$mk->kode?>">Edit</a> 
                <a class="btn btn-danger" href="delete?kode=<?=$mk->kode?>"onclick="if(!confirm('Anda yakin ingin menghapus mata kuliah <?=$mk->nama?>?')) {return false}">Delete</a>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>