<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashbord Kemahasiswaan</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('main_asset/examples')); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['<?php echo e(asset('
                    main_asset / examples ')); ?>/assets/css/fonts.min.css'
                ]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/css/atlantis2.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/css/demo.css">
</head>

<body data-background-color="custom" style="background-color: blueviolet">
    <div class="wrapper horizontal-layout-3 fullwidth-style">

        <div class="main-header no-box-shadow" data-background-color="transparent">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler2 ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>

                </div>
            </div>
        </div>
        <div class="pt-lg-2">
            <div class="container text-white pt-lg-2">
                <nav class="navbar navbar-tab navbar-header-left navbar-expand-lg p-0">
                    <ul class="navbar-nav page-navigation">
                        <h3 class="title-menu bg-primary d-flex d-lg-none">
                            Menu
                            <div class="close-menu"> <i class="flaticon-cross"></i></div>
                        </h3>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kemahasiswaan
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Keuangan
                            </a>
                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="starter-template.html">Belum Tersedia</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Akademik
                            </a>
                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="starter-template.html">Belum Tersedia</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="main-panel">
            <div class="container">
                <div class="page-inner page-inner-tab-style">
                    <div class="page-header">
                        <h4 class="page-title">Dashboard Kemahasiswaan</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Dashboard Kemahasiswaan</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Row Beasiswa -->
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 text-center">
                                    <div class="text-right text-danger">
                                        -3%
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <div class="h1 m-0"><?php echo e($countMahasiswa); ?></div>
                                    <div class="text-muted mb-3">Jumlah Mahasiswa</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="card">
                                <div class="card-body p-3 text-center">
                                    <div class="text-right text-success">
                                        9%
                                        <i class="fa fa-chevron-up"></i>
                                    </div>
                                    <div class="h1 m-0"><?php echo e($countTelatBpp); ?></div>
                                    <div class="text-muted mb-3">Telat Bayar BPP</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <div class="card-body p-3 text-center">
                                    <div class="text-right text-success">
                                        3%
                                        <i class="fa fa-chevron-up"></i>
                                    </div>
                                    <div class="h1 m-0"><?php echo e($countPenerimaBeasiswa); ?></div>
                                    <div class="text-muted mb-3">Penerima Beasiswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <div class="card-body p-3 text-center">
                                    <div class="text-right text-danger">
                                        -2%
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <div class="h1 m-0"><?php echo e($countMahasiswaTelatLulus); ?></div>
                                    <div class="text-muted mb-3">Telat Lulus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <div class="card-body p-3 text-center">
                                    <div class="text-right text-danger">
                                        -1%
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <div class="h1 m-0"><?php echo e($countPesertaLomba); ?></div>
                                    <div class="text-muted mb-3">Peserta Lomba</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <h1>TAK Mahasiswa</h1>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-primary bg-primary-gradient">
                                <div class="card-body">
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Total TAK Mahasiswa</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($takCount); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Mahasiswa Penginput TAK</h4>
                                    <h1 class="mb-4 fw-bold">100</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Rata-Rata TAK</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($takCount / 100); ?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-primary bg-success-gradient">
                                <div class="card-body">
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Poin TAK 0-30</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($tak1Count); ?> Mahasiswa</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Poin TAK 30-59</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($tak2Count); ?> Mahasiswa</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Poin TAK >60</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($tak3Count + $tak4Count); ?> Mahasiswa</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card  ">
                                <div class="card-body">
                                    <div class="row">
                                        <canvas id="myChartSpreadTAK" width="400" height="260"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <h1>Lomba dan Kejuaraan</h1>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <h4 class="card-title">Statistik Peserta Lomba</h4>
                                    </div>
                                    <p class="card-category">Peserta Tiap Lomba</p>
                                </div>
                                <div class="card-body">
                                    <?php $__currentLoopData = $lombaCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label><?php echo e($item->nama_lomba); ?></label>
                                    <label>(<?php echo e($item->count); ?>)</label><br>
                                    <div class="progress mb-3">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo e($item->count * 15); ?>%" aria-valuenow="<?php echo e($item->count); ?>" aria-valuemin="0" aria-valuemax="5"></div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <h4 class="card-title">Peserta Lomba Per Tahun</h4>
                                    </div>
                                    <p class="card-category">
                                        Peserta Lomba Per Tahun</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <canvas id="myChartLomba" width="400px" height="400px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-primary bg-success-gradient">
                                <div class="card-body">
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Jumlah Lomba Diikuti</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($lomba18 + $lomba19 + $lomba20); ?> Perlombaan</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Terbanyak Diikuti</h4>
                                    <h1 class="mb-4 fw-bold">Bisnis Plan UI 2020</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Terjarang Diikuti</h4>
                                    <h1 class="mb-4 fw-bold">Imagine Cup 2018</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Total Mahasiswa </h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($lombaCount); ?></h1>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <h1>Kesehatan Mahasiswa</h1>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Kesehatan Mahasiswa (Keseluruhan)</div>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                                <span class="btn-label">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                                Export
                                            </a>
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                                <span class="btn-label">
                                                    <i class="fa fa-print"></i>
                                                </span>
                                                Print
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas width="400" height="360px" id="statisticsHealth"></canvas>
                                    </div>
                                    <div id="myChartLegend"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-primary bg-warning-gradient">
                                <div class="card-body">
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Status Kesehatan</h4>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Sehat</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($countSehat); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Sehat</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($countSakit); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Tidak Diketahui</h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($statusUntrackedCount); ?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Sehat vs Sakit</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="chart-container">
                                        <canvas width="400" height="260" id="statisticsHealthSpec"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Statistik Sebaran Penerima Beasiswa</div>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                                <span class="btn-label">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                                Export
                                            </a>
                                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                                <span class="btn-label">
                                                    <i class="fa fa-print"></i>
                                                </span>
                                                Print
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container" style="max-height: 300px">
                                        <canvas id="statisticsBeasiswa"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Provider Beasiswa</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div style="max-height: 300px !important; overflow-y: scroll !important;">
                                        <ol>
                                            <?php $__currentLoopData = $providerBeasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($item->provider); ?></li>
                                            <div class="separator-dashed"></div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Telat Lulus</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <canvas id="myChartTelatLulus" width="400" height="460"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-primary bg-danger-gradient">
                                <div class="card-body">
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Status Telat Lulus</h4>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Smester <?php echo e($dataTelatLulus[0]->semester); ?></h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($dataTelatLulus[0]->count); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Smester <?php echo e($dataTelatLulus[1]->semester); ?></h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($dataTelatLulus[1]->count); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Smester <?php echo e($dataTelatLulus[2]->semester); ?></h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($dataTelatLulus[2]->count); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Smester <?php echo e($dataTelatLulus[3]->semester); ?></h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($dataTelatLulus[3]->count); ?></h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Smester <?php echo e($dataTelatLulus[4]->semester); ?></h4>
                                    <h1 class="mb-4 fw-bold"><?php echo e($dataTelatLulus[4]->count); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title fw-mediumbold">Status Tunggakan Mahasiswa </div>
                                    <div class="card-list">
                                        <?php $__currentLoopData = $mahasiswaTunggakan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item-list">
                                            <div class="info-user ml-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="nim">NIM</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="nim">: <?php echo e($item->nim); ?></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="nama">Nama</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="nama">: <?php echo e($item->nama); ?></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="alasan">Alasan</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="alasan">: <?php echo e($item->alasan_tunggakan); ?></div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tunggakan BPP Mahasiswa</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <canvas id="myChartTunggakan" width="400" height="460"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer border-0 bg-transparent">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="http://www.themekita.com">
                                Mata Kuliah Enterprise Application Integration
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright text-white ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a class=" text-white" href="https://www.henryaugusta.feylabs.my.id"> Riski Ananda, Henry Augusta , Hagai Tarigan -
                        SI4206</a>
                </div>
            </div>
        </footer>
        <div class="quick-sidebar">
            <a href="#" class="close-quick-sidebar">
                <i class="flaticon-cross"></i>
            </a>
            <div class="quick-sidebar-wrapper">
                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Messages</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
                </ul>

            </div>
        </div>
    </div>


    <?php echo $__env->make('layouts.visual.js_inject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_beasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_hitung_lomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_spread_tak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_health', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_telat_lulus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_tunggakan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH D:\ProjectWeb\eai2\resources\views/layouts/visual/index.blade.php ENDPATH**/ ?>