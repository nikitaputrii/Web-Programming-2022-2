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
        h2{
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
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
    
<h3>Daftar Mahasiswa</h3>
<a class="btn btn-success" href="create" role="button">Create Mahasiswa</a>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>No</th><th>NIM</th><th>Nama</th><th>Gender</th>
            <th>Prodi</th><th>IPK</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($mahasiswa as $mhs){
            ?>
            <tr>
            <td><?=$nomor?></td>
            <td><?=$mhs->nim?></td>
            <td><?=$mhs->nama?></td>
            <td><?=$mhs->gender?></td>
            <td><?=$mhs->prodi?></td>
            <td><?=$mhs->ipk?></td>
            <td>
                <a class="btn btn-warning" href="detail?id=<?=$mhs->nim?>">Detail</a> 
                <a class="btn btn-dark" href="edit?id=<?=$mhs->nim?>">Edit</a> 
                <a class="btn btn-danger" href="delete?id=<?=$mhs->nim?>"onclick="if(!confirm('Anda yakin ingin menghapus mahasiswa bernama <?=$mhs->nama?>?')) {return false}">Delete</a>
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