<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
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
<h3>Daftar Program Studi</h3>
<a class="btn btn-success" href="create" role="button">Create Program Studi</a>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>No</th><th>Kode</th>
            <th>Nama Prodi</th>
            <th>Ketua Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($list_prodi as $ps){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$ps->kode?></td>
                <td><?=$ps->nama?></td>
                <td><?=$ps->kaprodi?></td>
                <td>
                    <a class="btn btn-dark" href="edit?kode=<?=$ps->kode?>">Edit</a> 
                    <a class="btn btn-danger" href="delete?kode=<?=$ps->kode?>"onclick="if(!confirm('Anda yakin ingin menghapus prodi <?=$ps->nama?>?')) {return false}">Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>