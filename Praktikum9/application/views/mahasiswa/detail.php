<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
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
    <h3>Detail Mahasiswa</h3>
    <table class="table table-striped">
        <tr><td>NIM</td><td><?=$mhs->nim?></td></tr>
        <tr><td>Nama Lengkap</td><td><?=$mhs->nama?></td></tr>
        <tr><td>Gender</td><td><?=$mhs->gender?></td></tr>
        <tr><td>Tempat Lahir</td><td><?=$mhs->tmp_lahir?></td></tr>
        <tr><td>Tanggal Lahir</td><td><?=$mhs->tgl_lahir?></td></tr>
        <tr><td>Prodi</td><td><?=$mhs->prodi?></td></tr>
        <tr><td>IPK</td><td><?=$mhs->ipk?></td></tr>
    </table>
</div>    
</body>
</html>