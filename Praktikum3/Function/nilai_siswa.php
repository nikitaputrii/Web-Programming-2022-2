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

                    <?php
                    require_once 'libfungsi.php';

                    $nama_siswa = $_POST['nama'];
                    $mata_kuliah = $_POST['matkul'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];
                    $total = $nilai_uts + $nilai_uas + $nilai_tugas;
                    $_nilai = $total/3;
                    $hasil_ujian = kelulusan($_nilai);
                
                    //grade huruf
                    $peringkat = grade($_nilai);
                    
                    //keterangan grade
                    $predikat = predikat($_nilai);

                        echo '<br/>Nama : '.$nama_siswa;
                        echo '<br/>Mata Kuliah : '.$mata_kuliah;
                        echo '<br/>Nilai UTS : '.$nilai_uts;
                        echo '<br/>Nilai UAS : '.$nilai_uas;
                        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                        echo '<br/>Keterangan : '.$hasil_ujian;
                        echo '<br/>Grade : '.$peringkat;
                        echo '<br/>Predikat : '.$predikat;
                    ?>
				</div>
				<div class="card-footer">Develop By @Nikita @2022</div>
			</div>
		</div>
	</div>
</div>
   
</body>
</html>