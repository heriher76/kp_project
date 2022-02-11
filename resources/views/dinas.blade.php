<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png ')}}">
    <title>E-KUNKEC</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css ')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets/css/animate.css ')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css ')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('assets/css/colors/default.css ')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{url('home')}}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="{{asset('assets/images/admin-logo.png ')}}" alt="home"
                                class="dark-logo" />
                            <!--This is light logo icon--><img src="{{asset('assets/images/admin-logo-dark.png ')}}" alt="home"
                                class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <!--This is dark logo text--><img src="{{asset('assets/images/admin-text.png ')}}" alt="home"
                                class="dark-logo" />
                            <!--This is light logo text--><img src="{{asset('assets/images/admin-text-dark.png ')}}" alt="home"
                                class="light-logo" />
                        </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                            class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{ url('home') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('umum') }}" class="waves-effect"><i class="fa fa-globe fa-fw"
                                aria-hidden="true"></i>Aspirasi</a>
                    </li>
                    <li>
                        <a href="{{ url('instansi') }}" class="waves-effect"><i class="fa fa-globe fa-fw"
                                aria-hidden="true"></i>Instansi</a>
                    </li>
                    <li>
                        <a href= "{{ url('dinas') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Dinas</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Logout</a>
                    </li>
                    
                </ul>
                <div class="center p-20">
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dinas</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dinas</li>
                        </ol>	
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="{{ route('dinas.create') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-md-12">Penerima Pengunjung</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Masukkan Penerima Pengunjung" name="penerima" value="{{ old('penerima') }}"
                                            class="form-control form-control-line @error('penerima') is-invalid @enderror">
                                            @error('penerima')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Sifat</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Penting/Biasa  "
                                            class="form-control form-control-line @error('sifat') is-invalid @enderror" name="sifat" value="{{ old('sifat') }}"
                                            id="example-sifat"> 
                                            @error('sifat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Durasi</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line @error('durasi') is-invalid @enderror" placeholder="Masukkan Durasi Kunjungan/Jam" name="durasi" value="{{ old('durasi') }}">
                                            @error('durasi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tanggal Kunjungan</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control form-control-line @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">
                                            @error('tanggal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nomor Surat</label>
                                    <div class="col-md-12">
                                        <input type="number" placeholder="Masukkan Nomor Surat" name="nsurat" value="{{ old('nsurat') }}"
                                            class="form-control form-control-line @error('nsurat') is-invalid @enderror"> 
                                            @error('nsurat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Perihal</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line @error('perihal') is-invalid @enderror" placeholder="Masukkan Perihal" name="perihal">
                                        {{ old('perihal') }}
                                        </textarea>
                                        @error('perihal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js ')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js ')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/js/custom.min.js ')}}"></script>
</body>

</html>