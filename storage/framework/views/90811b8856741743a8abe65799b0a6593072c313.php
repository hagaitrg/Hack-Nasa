<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboaed Kemahasiswaan</title>
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
                urls: ['<?php echo e(asset('main_asset/examples')); ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });

    </script>

    <!-- CSS Files -->
    <link rel="stylesheet"
        href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/css/atlantis2.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet"
        href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/css/demo.css">
</head>

<body data-background-color="custom" style="background-color: blueviolet">
    <div class="wrapper horizontal-layout-3 fullwidth-style">

        <div class="main-header no-box-shadow" data-background-color="transparent">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler2 ml-auto" type="button" data-toggle="collapse"
                        data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kemahasiswaan
                            </a>
                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="starter-template.html">Action</a>
                                <a class="dropdown-item" href="starter-template.html">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="starter-template.html">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Keuangan
                            </a>
                            <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="starter-template.html">Belum Tersedia</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <h4 class="card-title">Statistik Peserta Lomba</h4>
                                    </div>
                                    <p class="card-category">Peserta Tiap Lomba</p>
                                </div>
                                <div class="card-body">
                                    <?php $__currentLoopData = $lombaCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label><?php echo e($item->nama_lomba); ?></label><br>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: <?php echo e($item->count * 10); ?>%"
                                                aria-valuenow="<?php echo e($item->count); ?>" aria-valuemin="0"
                                                aria-valuemax="5"></div>
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
                                        <canvas id="myChartLomba" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                   

                     

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <h4 class="card-title">Statistik Peserta Lomba</h4>
                                    </div>
                                    <p class="card-category">Peserta Tiap Lomba</p>
                                </div>
                                <div class="card-body">

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
                                    <div class="chart-container" style="min-height: 375px">
                                        <canvas id="statisticsBeasiswa"></canvas>
                                    </div>
                                    <div id="myChartLegend"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Provider Beasiswa</div>
                                </div>
                                <div class="card-body pb-0">
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

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Statistik Mahasiswa Penerima Beasiswa</div>
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
                                    <div class="chart-container" style="min-height: 375px">
                                        <canvas id="statisticsChart"></canvas>
                                    </div>
                                    <div id="myChartLegend"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Sebaran Beasiswa</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class=" mt-2">
                                        <h1>$4,578.58</h1>
                                    </div>
                                    <div class="pull-in">
                                        <canvas id="dailySalesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary bg-primary-gradient">
                                <div class="card-body">
                                    <h4 class="mb-1 fw-bold">Tasks Progress</h4>
                                    <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title fw-mediumbold">Suggested People</div>
                                    <div class="card-list">
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="../assets/img/jm_denis.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ml-3">
                                                <div class="username">Jimmy Denis</div>
                                                <div class="status">Graphic Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="../assets/img/chadengle.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ml-3">
                                                <div class="username">Chad</div>
                                                <div class="status">CEO Zeleaf</div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="../assets/img/talha.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ml-3">
                                                <div class="username">Talha</div>
                                                <div class="status">Front End Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="../assets/img/mlane.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ml-3">
                                                <div class="username">John Doe</div>
                                                <div class="status">Back End Developer</div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="../assets/img/talha.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ml-3">
                                                <div class="username">Talha</div>
                                                <div class="status">Front End Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="../assets/img/jm_denis.jpg" alt="..."
                                                    class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ml-3">
                                                <div class="username">Jimmy Denis</div>
                                                <div class="status">Graphic Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-primary bg-primary-gradient">
                                <div class="card-body">
                                    <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
                                    <h1 class="mb-4 fw-bold">17</h1>
                                    <h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
                                    <div id="activeUsersChart"></div>
                                    <h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between pb-1 pt-1">
                                            <small>/product/readypro/index.html</small> <span>7</span>
                                        </li>
                                        <li class="d-flex justify-content-between pb-1 pt-1">
                                            <small>/product/atlantis/demo.html</small> <span>10</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Feed Activity</div>
                                </div>
                                <div class="card-body">
                                    <ol class="activity-feed">
                                        <li class="feed-item feed-item-secondary">
                                            <time class="date" datetime="9-25">Sep 25</time>
                                            <span class="text">Responded to need <a href="#">"Volunteer
                                                    opportunity"</a></span>
                                        </li>
                                        <li class="feed-item feed-item-success">
                                            <time class="date" datetime="9-24">Sep 24</time>
                                            <span class="text">Added an interest <a href="#">"Volunteer
                                                    Activities"</a></span>
                                        </li>
                                        <li class="feed-item feed-item-info">
                                            <time class="date" datetime="9-23">Sep 23</time>
                                            <span class="text">Joined the group <a
                                                    href="single-group.php">"Boardsmanship Forum"</a></span>
                                        </li>
                                        <li class="feed-item feed-item-warning">
                                            <time class="date" datetime="9-21">Sep 21</time>
                                            <span class="text">Responded to need <a href="#">"In-Kind
                                                    Opportunity"</a></span>
                                        </li>
                                        <li class="feed-item feed-item-danger">
                                            <time class="date" datetime="9-18">Sep 18</time>
                                            <span class="text">Created need <a href="#">"Volunteer
                                                    Opportunity"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <time class="date" datetime="9-17">Sep 17</time>
                                            <span class="text">Attending the event <a href="single-event.php">"Some New
                                                    Event"</a></span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Support Tickets</div>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm"
                                                id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-today" data-toggle="pill"
                                                        href="#pills-today" role="tab" aria-selected="true">Today</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-week" data-toggle="pill"
                                                        href="#pills-week" role="tab" aria-selected="false">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-month" data-toggle="pill"
                                                        href="#pills-month" role="tab" aria-selected="false">Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="avatar avatar-online">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-info">J</span>
                                        </div>
                                        <div class="flex-1 ml-3 pt-1">
                                            <h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span
                                                    class="text-warning pl-3">pending</span></h6>
                                            <span class="text-muted">I am facing some trouble with my viewport. When i
                                                start my</span>
                                        </div>
                                        <div class="float-right pt-1">
                                            <small class="text-muted">8:40 PM</small>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar avatar-offline">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                        </div>
                                        <div class="flex-1 ml-3 pt-1">
                                            <h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span
                                                    class="text-success pl-3">open</span></h6>
                                            <span class="text-muted">I have some query regarding the license
                                                issue.</span>
                                        </div>
                                        <div class="float-right pt-1">
                                            <small class="text-muted">1 Day Ago</small>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar avatar-away">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                        </div>
                                        <div class="flex-1 ml-3 pt-1">
                                            <h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span
                                                    class="text-muted pl-3">closed</span></h6>
                                            <span class="text-muted">Is there any update plan for RTL version near
                                                future?</span>
                                        </div>
                                        <div class="float-right pt-1">
                                            <small class="text-muted">2 Days Ago</small>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar avatar-offline">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                        </div>
                                        <div class="flex-1 ml-3 pt-1">
                                            <h6 class="text-uppercase fw-bold mb-1">Peter Parker <span
                                                    class="text-success pl-3">open</span></h6>
                                            <span class="text-muted">I have some query regarding the license
                                                issue.</span>
                                        </div>
                                        <div class="float-right pt-1">
                                            <small class="text-muted">2 Day Ago</small>
                                        </div>
                                    </div>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar avatar-away">
                                            <span
                                                class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                        </div>
                                        <div class="flex-1 ml-3 pt-1">
                                            <h6 class="text-uppercase fw-bold mb-1">Logan Paul <span
                                                    class="text-muted pl-3">closed</span></h6>
                                            <span class="text-muted">Is there any update plan for RTL version near
                                                future?</span>
                                        </div>
                                        <div class="float-right pt-1">
                                            <small class="text-muted">2 Days Ago</small>
                                        </div>
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
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a class=" text-white"
                        href="https://www.henryaugusta.feylabs.my.id"> Riski Ananda, Henry Augusta , Hagai Tarigan -
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
                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab"
                            aria-selected="true">Messages</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab"
                            aria-selected="false">Tasks</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab"
                            aria-selected="false">Settings</a> </li>
                </ul>

            </div>
        </div>
    </div>


    <?php echo $__env->make('layouts.visual.js_inject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_beasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_hitung_lomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.visual.script_spread_tak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH D:\ProjectWeb\eai2\resources\views/layouts/visual/index.blade.php ENDPATH**/ ?>