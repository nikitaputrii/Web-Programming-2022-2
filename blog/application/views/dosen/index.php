<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script>
        function hapusDosen(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<div class="col-md-12">
 <h4 style="text-align: center;">
 Daftar Dosen
 </h4>
 <table border="1" class="table">
 <thead>
 <tr>
 <th>No</th><th>Nama</th><th>NIDN</th>
<th>Pendidikan</th><th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($dosen as $dosens){
 ?>
 <tr>
 <td> <?= $nomor ?> </td>
 <td> <?= $dosens -> nama ?></td>
 <td> <?= $dosens -> nidn ?></td>
 <td><?=$dosens->pendidikan?></td>
 <td>
    <a href=<?php echo base_url("index.php/dosen/detail/$dosens->id") ?>
    class="btn btn-warning" >Detail</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/dosen/edit/$dosens->id") ?> 
    class="btn btn-dark" >Edit</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/dosen/delete/$dosens->id") ?> 
    class="btn btn-danger" 
    onclick=" return hapusDosen('Apakah Anda yakin ingin menghapus dosen yang bernama <?php echo $dosens-> nama ?> ?')" >Hapus</a>
 </td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
 <a href= <?php echo base_url("index.php/dosen/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</div>
</body>
</html>