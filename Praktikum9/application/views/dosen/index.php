<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
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
<h3>Daftar Dosen</h3>
<a class="btn btn-success" href="create" role="button">Create Dosen</a>
<div class="col-md-12">
    <table class="table table-striped"><div class="col-md-12">
        <thead>
            <tr>
            <th>No</th><th>NIDN</th><th>Nama</th><th>Lulusan</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($dosen as $ds){
            ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$ds->nidn?></td>
            <td><?=$ds->nama?></td>
            <td><?=$ds->lulusan?></td>
            <td>
                <a class="btn btn-warning" href="detail?id=<?=$ds->nidn?>">Detail</a> 
                <a class="btn btn-dark" href="edit?id=<?=$ds->nidn?>">Edit</a> 
                <a class="btn btn-danger" href="delete?id=<?=$ds->nidn?>"onclick="if(!confirm('Anda yakin ingin menghapus dosen bernama <?=$ds->nama?>?')) {return false}">Delete</a>
            </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>