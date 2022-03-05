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
                    $nama_siswa = $_POST['nama'];
                    $mata_kuliah = $_POST['matkul'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];
                    $total = $nilai_uts + $nilai_uas + $nilai_tugas;
                    $alpha = $total/3;
                    if ($alpha <= 55){
                        $lulus = "Anda tidak lulus";
                    } else{
                        $lulus = "Selamat anda lulus";
                    }
                    //grade huruf
                    if ($alpha > 100){
                        $grade = "I";
                    } elseif ($alpha >= 85){
                        $grade = "A";
                    } elseif ($alpha >= 70){
                        $grade = "B";
                    } elseif ($alpha >= 56){
                        $grade = "C";
                    } elseif ($alpha >= 36){
                        $grade = "D";
                    } elseif ($alpha >= 0){
                        $grade = "E";
                    } else{
                        $grade = "I";
                    }
                    //keterangan grade
                    switch ($grade){
                        case "A":
                            $ket = "Sangat memuaskan";
                            break;
                        case "B":
                            $ket = "Memuaskan";
                            break;
                        case "C":
                            $ket = "Cukup";
                            break;
                        case "D":
                            $ket = "Kurang";
                            break;
                        case "E":
                            $ket = "Sangat kurang";
                            break;
                        default :
                            $ket = "Tidak ada";
                    }

                        echo '<br/>Nama : '.$nama_siswa;
                        echo '<br/>Mata Kuliah : '.$mata_kuliah;
                        echo '<br/>Nilai UTS : '.$nilai_uts;
                        echo '<br/>Nilai UAS : '.$nilai_uas;
                        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                        echo '<br/>Keterangan : '.$lulus;
                        echo '<br/>Huruf : '.$grade;
                        echo '<br/>Predikat : '.$ket;
                    ?>
				</div>
				<div class="card-footer">Develop By @Nikita @2022</div>
			</div>
		</div>
	</div>
</div>
   
</body>
</html>