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
				<h5 class="card-header">
					Belanja Online
				</h5>
				<div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-8">
                            <form action="form_belanja.php" method="get">
                            <div class="form-group row">
                                <label for="cust" class="col-4 col-form-label">Customer</label> 
                                <div class="col-8">
                                <input id="cust" name="cust" placeholder="Nama Customer" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label> 
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-4">
                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" name="total">Home</a>
                            <div class="list-group-item" name="total" id="total_0">
                                TV : 4.200.000
                            </div>
                            <div class="list-group-item" name="total" id="total_1">
                                Kulkas : 3.100.000
                            </div>
                            <div class="list-group-item" name="total" id="total_2">
                                Mesin Cuci : 3.800.000
                            </div><a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah setiap saat</a>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
                <?php
                $cust = $_GET['cust'];
                $produk = $_GET['produk'];
                $jumlah = $_GET['jumlah'];
                if ($produk == 'TV'){
                    $total = $jumlah * 4200000;
                } elseif ($produk == 'Kulkas'){
                    $total = $jumlah * 3100000;
                } else{
                    $total = $jumlah * 3800000;
                }

                    echo 'Nama Customer : '.$cust;
                    echo '<br/>Produk Pilihan : '.$produk;
                    echo '<br/>Jumlah Beli : '.$jumlah;
                    echo '<br/>Total Belanja : '.$total;
                ?>
				<div class="card-footer">
					<span>Develop By @Nikita @2022</span>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>