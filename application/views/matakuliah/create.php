<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
<div class="col-md-12">
    <h3>
    Kelola Mata Kuliah
    </h3>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo form_open('matakuliah/save');?>
<form>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-pencil"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Mata Kuliah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="hari" class="col-4 col-form-label">Hari</label> 
    <div class="col-8">
      <select id="hari" name="hari" class="custom-select">
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="jam" class="col-4 col-form-label">Jam</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-hospital-o"></i>
          </div>
        </div> 
        <input id="jam" name="jam" type="text" class="form-control" placeholder="00:00">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sks" class="col-4 col-form-label">SKS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="sks" name="sks" type="number" min="1" max="5" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="dosen" class="col-4 col-form-label">Dosen</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-mortar-board"></i>
          </div>
        </div> 
        <input id="dosen" name="dosen" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ruang" class="col-4 col-form-label">Ruang</label> 
    <div class="col-8">
      <select id="ruang" name="ruang" class="custom-select">
        <option value="A1010">A1010</option>
        <option value="A1020">A1020</option>
        <option value="A1030">A1030</option>
        <option value="B1010">B1010</option>
        <option value="B1020">B1020</option>
        <option value="B1030">B1030</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php echo form_close();?>
</div>    
</body>
</html>