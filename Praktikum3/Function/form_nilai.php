<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Sistem Penilaian</div>
				<div class="card-body">
					<h5>Form Nilai Siswa</h5><hr>
                        <form action="nilai_siswa.php" method="POST">
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Nama Lengkap</label> 
                            <div class="col-8">
                            <input name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Mata Kuliah</label> 
                            <div class="col-8">
                            <select name="matkul" class="custom-select">
                                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                                <option value="Basis Data I">Basis Data I</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Nilai UTS</label> 
                            <div class="col-8">
                            <input name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Nilai UAS</label> 
                            <div class="col-8">
                            <input name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                            <div class="col-8">
                            <input name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>

                        <?php
                        $proses = $_GET['proses'];
                        $nama_siswa = $_GET['nama'];
                        $mata_kuliah = $_GET['matkul'];
                        $nilai_uts = $_GET['nilai_uts'];
                        $nilai_uas = $_GET['nilai_uas'];
                        $nilai_tugas = $_GET['nilai_tugas'];

                            echo 'Proses : '.$proses;
                            echo '<br/>Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$mata_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                        ?>
				</div>
				<div class="card-footer">Develop By @Nikita @2022</div>
			</div>
		</div>
	</div>
</div>
   
</body>
</html>