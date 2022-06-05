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
    <div>
    <h3>
    Detail Dosen
    </h3>
    <table class="table table-striped">
        <tr><td>NIDN</td><td><?=$dosen->nidn?></td></tr>
        <tr><td>Nama Lengkap</td><td><?=$dosen->nama?></td></tr>
        <tr><td>Gender</td><td><?=$dosen->gender?></td></tr>
        <tr><td>Tempat Lahir</td><td><?=$dosen->tmp_lahir?></td></tr>
        <tr><td>Tanggal Lahir</td><td><?=$dosen->tgl_lahir?></td></tr>
        <tr><td>Lulusan</td><td><?=$dosen->lulusan?></td></tr>
    </table>
</div>