<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom CSS for inverted colors */
        body {
            background-color: #000;
            color: #fff;
        }
        .bg-dark {
            background-color: #fff !important;
        }
        .text-white {
            color: #000 !important;
        }
        .nav-link {
            color: #000 !important;
        }
        .nav-link:hover {
            color: #000 !important;
            background-color: #fff !important;
        }
        .dropdown-menu {
            background-color: #fff !important;
        }
        .dropdown-item {
            color: #000 !important;
        }
        .dropdown-item:hover {
            color: #000 !important;
            background-color: #fff !important;
        }
        hr {
            border-color: #000;
        }
        .nav.flex-column.ms-1 {
            padding-left: 2px;

        }
        .lead {
            color: #001 !important;
        }
        .col.py-3 {
            background-color: #fff;
            color: #000;
        }



      
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">role</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start color " id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 ">
                            <span class="ms-1 d-none d-sm-inline ">beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline">master data</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Nama divisi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">jenis pemiliahan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Tahapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">bentuk pengawasa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">dugaan pelangaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">dugaan sengkata proses</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                           
                            <span class="ms-1 d-none d-sm-inline">Form pengawasan</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Input laporan</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Validasi Laporan</span> 
                                </a>
                            </li>
				 <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Rekap Laporan</span> 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                           
                            <span class="ms-1 d-none d-sm-inline">Pengguna</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Pusat</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Provinsi</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Kabupaten/Kota</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Kecamatan</span> 
                                </a>

			    </li>
                             <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Keluran/Desa</span> 
                                </a>
                            </li>
			     <li>
                                <a href="#" class="nav-link px-2">
                                    <span class="d-none d-sm-inline">Pengawas TPS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                  
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h3>ini nanti isi nya</h3>
            <p class="lead">
                bener gini kan Dashboard nya gua bikin Sidebar doang gini kan
            </p>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    // JavaScript to handle dropdown color change
    $(document).ready(function () {
        $('.dropdown-toggle').on('click', function () {
            var dropdown = $(this).closest('.dropdown');
            dropdown.toggleClass('show');
            if (dropdown.hasClass('show')) {
                $(this).css('color', 'red');
            } else {
                $(this).css('color', '');
            }
        });
    });
</script>
</body>
</html>
