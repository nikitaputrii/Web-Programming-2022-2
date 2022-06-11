<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Mata Kuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Ruang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $matkul -> id ?></td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> hari ?></td>
                <td><?php echo $matkul -> jam ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td><?php echo $matkul -> ruang ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>