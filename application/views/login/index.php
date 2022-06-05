<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
        h2, .row{
            padding: 1vw;
        }
    </style>
</head>
<body>
    <h2>LOGIN</h2>
    <?php echo form_open('login/auth');?>
    <div class="form-gorup row">
        <label for="username" class="col-4 col-form-label">Username</label>
        <div class="col-8">
            <input type="text" id="username" name="username" placeholder="Masukkan username Anda" class="form-control" spellcheck="false" data-ms-editor="trie">
        </div>
    </div>
    <div class="form-gorup row">
        <label for="password" class="col-4 col-form-label">Password</label>
        <div class="col-8">
            <input type="password" id="password" name="password" placeholder="Masukkan password Anda" class="form-control" spellcheck="false" data-ms-editor="trie">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
    <?php echo form_close()?>