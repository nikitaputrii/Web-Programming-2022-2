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
    <div>
    <h3>
    Detail Mata Kuliah
    </h3>
    <table class="table table-striped">
        <tr><td>Kode</td><td><?=$mk->kode?></td></tr>
        <tr><td>Nama Mata Kuliah</td><td><?=$mk->nama?></td></tr>
        <tr><td>Hari</td><td><?=$mk->hari?></td></tr>
        <tr><td>Jam</td><td><?=$mk->jam?></td></tr>
        <tr><td>SKS</td><td><?=$mk->sks?></td></tr>
        <tr><td>Dosen</td><td><?=$mk->dosen?></td></tr>
        <tr><td>Ruang</td><td><?=$mk->ruang?></td></tr>
    </table>
</div>