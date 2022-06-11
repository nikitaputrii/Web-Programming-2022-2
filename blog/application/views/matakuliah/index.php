<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
	<script>
        function hapusMatakuliah(pesan){
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
<div id="page-content-wrapper">
	<div class="container mt-3">
		<div class="row">
			<div class="col-12">
				<h4 style="text-align: center;">MataKuliah</h2>
				<table border="1" class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>SKS</th>
                            <th>Kode</th>
						</tr>
						<?php $no = 1; foreach($matkul as $matkuls): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $matkuls->nama ?></td>
							<td><?= $matkuls->sks ?></td>
                            <td><?= $matkuls->kode ?></td>
							<td>
								<a href=<?php echo base_url("index.php/matakuliah/detail/$matkuls->id") ?>
								class="btn btn-warning" >Detail</a>
								<a href= <?php echo base_url("index.php/matakuliah/edit/$matkuls->id") ?> 
								class="btn btn-dark" >Edit</a>
								<a href= <?php echo base_url("index.php/matakuliah/delete/$matkuls->id") ?> 
								class="btn btn-danger" 
								onclick=" return hapusMatakuliah('Apakah Anda yakin ingin menghapus mata kuliah <?php echo $matkuls-> nama ?> ?')" >Hapus</a>
							</td>
						</tr>
						<?php $no++; endforeach; ?>
				</table>
				<a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>