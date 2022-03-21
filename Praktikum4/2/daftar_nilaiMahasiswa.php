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
                        <form action="daftar_nilaiMahasiswa.php" method="POST">
                        <div class="form-group row">
                            <label class="col-4 col-form-label">NIM</label> 
                            <div class="col-8">
                            <input name="nim" placeholder="NIM" type="text" class="form-control">
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
                            <label class="col-4 col-form-label">Nilai</label> 
                            <div class="col-8">
                            <input name="nilai" placeholder="Nilai" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        </form>

                        <?php
                            require_once 'class_nilaiMahasiswa.php';
                            if($_POST) {
                                $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                                $keterangan = $ns->hitungNilai();
                                $hasil = $ns->kelulusan($keterangan);
                                $hasil2 = $ns->grade($keterangan);

                                echo 'NIM : ' .$ns->nim;
                                echo '<br/>Mata Kuliah : ' .$ns->matkul;
                                echo '<br/>Nilai : ' .$ns->nilai;
                                echo '<br/>Status : ' .$ns->kelulusan($keterangan);
                                echo '<br/>Grade : ' .$ns->grade($keterangan);
                            }

                        ?>
   
				</div>
				<div class="card-footer">Develop By @Nikita @2022</div>
			</div>
		</div>
	</div>
</div>

                    
</body>
</html>