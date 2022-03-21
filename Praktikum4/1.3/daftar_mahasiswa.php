<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Status Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">WEB02</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                    DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple" method>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Thn Angkatan</th>
                            <th>IPK</th>
                            <th>Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                require_once 'class_mahasiswa.php';
                                $mhs = new Mahasiswa('0110221', 'Nikita Putri', 'TI', 2021, 4);
                                $mhs2 = new Mahasiswa('0110222', 'Justin Boober', 'SI', 2018, 3.5);
                                $mhs3 = new Mahasiswa('0110223', 'Minum Haus', 'TI', 2020, 2.3);
                                $mhs4 = new Mahasiswa('0110224', 'Makan Pizza', 'SI', 2019, 1.9);
                                
                            ?>
                            <td>1</td>
                            <td><?php echo $mhs->nim; ?></td>
                            <td><?php echo $mhs->nama; ?></td>
                            <td><?php echo $mhs->prodi; ?></td>
                            <td><?php echo $mhs->thn_angkatan; ?></td>
                            <td><?php echo $mhs->ipk; ?></td>
                            <td><?php echo $mhs->predikat_ipk(); ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php echo $mhs2->nim; ?></td>
                            <td><?php echo $mhs2->nama; ?></td>
                            <td><?php echo $mhs2->prodi; ?></td>
                            <td><?php echo $mhs2->thn_angkatan; ?></td>
                            <td><?php echo $mhs2->ipk; ?></td>
                            <td><?php echo $mhs2->predikat_ipk(); ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?php echo $mhs3->nim; ?></td>
                            <td><?php echo $mhs3->nama; ?></td>
                            <td><?php echo $mhs3->prodi; ?></td>
                            <td><?php echo $mhs3->thn_angkatan; ?></td>
                            <td><?php echo $mhs3->ipk; ?></td>
                            <td><?php echo $mhs3->predikat_ipk(); ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><?php echo $mhs4->nim; ?></td>
                            <td><?php echo $mhs4->nama; ?></td>
                            <td><?php echo $mhs4->prodi; ?></td>
                            <td><?php echo $mhs4->thn_angkatan; ?></td>
                            <td><?php echo $mhs4->ipk; ?></td>
                            <td><?php echo $mhs4->predikat_ipk(); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <b>Lab Pemrograman Web Lanjutan</b>
                </div>
                <div class="d-flex align-items-center justify-content-between small">Nikita Putri</div>
                <div class="d-flex align-items-center justify-content-between small">STT NF</div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>