<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
<div class="col-md-12">
    <h3>
    <?=$judul?>
    </h3>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    $hidden = ['idedit' =>$dsedit->nidn];
?>
<?php echo form_open('dosen/save','',$hidden)?>
<form>
  <div class="form-group row">
    <label for="nidn" class="col-4 col-form-label">NIDN</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-pencil"></i>
          </div>
        </div> 
        <input id="nidn" name="nidn" value="<?=$dsedit->nidn?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" value="<?=$dsedit->nama?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
        <?php
            $checked_l = ($dsedit->gender=="L")?"checked":"";
            $checked_p = ($dsedit->gender=="P")?"checked":"";
        ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?=$checked_l?>> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?=$checked_p?>> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-hospital-o"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" value="<?=$dsedit->tmp_lahir?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" value="<?=$dsedit->tgl_lahir?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="lulusan" class="col-4 col-form-label">Lulusan</label> 
    <div class="col-8">
      <?php
        $checked_s = ($dsedit->lulusan=="S1")?"checked":"";
        $checked_d = ($dsedit->lulusan=="S2")?"checked":"";
        $checked_t = ($dsedit->lulusan=="S3")?"checked":"";
      ?>
      <select id="lulusan" name="lulusan" class="custom-select">
        <option value="S1" <?=$checked_s?>>S1</option>
        <option value="S2" <?=$checked_d?>>S2</option>
        <option value="S3" <?=$checked_t?>>S3</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php echo form_close()?>
</div>    
</body>
</html>