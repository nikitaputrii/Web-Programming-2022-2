<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form edit Mata Kuliah</h2>
<?php echo form_open("matakuliah/save") ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" value="<?php echo $obj_matkul->nama?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="hari" class="col-4 col-form-label">Hari</label> 
    <div class="col-8">
      <select id="hari" name="hari" value="<?php echo $obj_matkul->hari?>" class="custom-select">
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
        <input id="jam" name="jam" value="<?php echo $obj_matkul->jam?>" type="text" class="form-control" placeholder="00:00">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">SKS</label> 
    <div class="col-8">
      <input id="sks" name="sks" placeholder="Masukkan sks" type="text" value="<?php echo $obj_matkul->sks?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" value="<?php echo $obj_matkul->kode?>" class="form-control" spellcheck="false" data-ms-editor="true">
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
      <button name="submit" type="submit" value="<?php echo $obj_matkul->ruang?>" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>