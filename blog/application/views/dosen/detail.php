<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggil Lahir</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dsn -> id ?></td>
                <td><?php echo $dsn -> nidn ?> </td>
                <td><?php echo $dsn -> nama ?></td>
                <td><?php echo $dsn -> gender ?></td>
                <td><?php echo $dsn -> tmp_lahir ?></td>
                <td><?php echo $dsn -> tgl_lahir ?></td>
                <td><?php echo $dsn -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$dsn->id?>.jpg" width="300">
                    <div class="mt-4">
                        <h4><?=$dsn->nama?></h4>
                        <p>Foto Dosen</p>
                        <?php echo $error;?>
                        <br> <br>
                        <a href="https://www.instagram.com/sttterpadunf/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                        <br> <br>
                        <?php echo form_open_multipart('dosen/upload');?>
                        <input type="file" name="foto" size="300">
                        <input type="hidden" name="iddosen" value="<?=$dsn->id?>">
                        <br> <br>
                        <input type="submit" value="Upload Foto" class="btn btn-primary">
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>