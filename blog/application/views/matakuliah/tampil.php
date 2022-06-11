<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
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
                            <th>Hari</th>
                            <th>Jam</th>
							<th>SKS</th>
                            <th>Kode</th>
                            <th>Ruang</th>
						</tr>
						<?php $no = 1; foreach($matkul as $matkuls): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $matkuls->nama ?></td>
							<td><?= $matkuls->hari ?></td>
							<td><?= $matkuls->jam ?></td>
							<td><?= $matkuls->sks ?></td>
                            <td><?= $matkuls->kode ?></td>
							<td><?= $matkuls->ruang ?></td>
						</tr>
						<?php $no++; endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>