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
    <link href="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.css ')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets/css/animate.css ')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css ')}}" rel="stylesheet" type="text/css">
    <!-- color CSS -->
    <link href="{{asset('assets/css/colors/default.css ')}}" id="theme" rel="stylesheet">
    <link href="{{asset('assets/dataTables/datatables.css ')}}" rel="stylesheet" >
    <link href="{{asset('assets/dataTables/datatables.min.css ')}}" rel="stylesheet">

    
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
                    <li>
                        <form action="{{ route('home.search') }}" method="get" role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Cari berdasarkan email" class="form-control" name="search" value="{{ old('search') }}"><i class="fa fa-search"></i>
                            <input type="submit" value="CARI" class="btn btn-primary">
                        </form>


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
                        <a href="{{ url('home') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('umum') }}" class="waves-effect"><i class="fa fa-globe fa-fw    " aria-hidden="true"></i>Aspirasi</a>
                    </li>
                    <li>
                        <a href= "{{ url('instansi') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Instansi</a>
                    </li>
                    <li>
                        <a href= "{{ url('dinas') }}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Dinas</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Logout</a>
                    </li>
                </ul>
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
                        <h4 class="page-title">Data Pengunjung dan Kunjungan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Table Kunjungan</li>
                            
                        </ol>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div id="chart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                
                            </div>
                            
                            <h3 class="box-title" style="text-align:center"><br>Data Kunjungan Aspirasi</h3>
                            
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover table striped" id="datatables"> 
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No</th>
                                            <th style="text-align:center">NOMOR SURAT</th>
                                            <th style="text-align:center">PENERIMA KUNJUNGAN</th>
                                            <th style="text-align:center">SIFAT</th>
                                            <th style="text-align:center">PERIHAL</th>
                                            <th style="text-align:center">TANGGAL</th>
                                            <th style="text-align:center">DURASI </th>
                                            <th style="text-align:center">SNACK </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($umums as $p)
										<tr>
                                            <td style="text-align:center">{{ $p->id}}</td>
                                            <td style="text-align:center">{{ $p->telp}}</td>
											<td style="text-align:center">{{ $p->name}}</td>
											<td style="text-align:center">{{ $p->email}}</td>
                                            <td style="text-align:center">{{ $p->tujuan}}</td>
											<td style="text-align:center">{{ $p->tanggal}}</td>
                                            <td style="text-align:center">{{ $p->alamat}}</td>
                                            <td style="text-align:center">{{ $p->snack}}</td>
										</tr>
									@endforeach
                                    </tbody>
                                </table>
                                

                                <ul class="pagination pull-right">
                                    
                                    <li class="active">{{ $umums->links() }}</li>
                                    <li><a href="{{ route('cetak.pdf') }}" class="btn btn-primary" target="_blank">CETAK PDF</a></li>
                                    
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                
                            </div>
                            <h3 class="box-title" style="text-align:center"><br>Data Kunjungan Instansi</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table striped" id="datatables"> 
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No</th>
                                            <th style="text-align:center">NOMOR SURAT</th>
                                            <th style="text-align:center">PENERIMA KUNJUNGAN</th>
                                            <th style="text-align:center">SIFAT</th>
                                            <th style="text-align:center">PERIHAL</th>
                                            <th style="text-align:center">TANGGAL</th>
                                            <th style="text-align:center">DURASI </th>
                                            <th style="text-align:center">SNACK </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($instansis as $p)
										<tr>
                                            <td style="text-align:center">{{ $p->id}}</td>
                                            <td style="text-align:center">{{ $p->telp}}</td>
											<td style="text-align:center">{{ $p->name}}</td>
											<td style="text-align:center">{{ $p->email}}</td>
                                            <td style="text-align:center">{{ $p->tujuan}}</td>
											<td style="text-align:center">{{ $p->tanggal}}</td>
                                            <td style="text-align:center">{{ $p->alamat}}</td>
                                            <td style="text-align:center">{{ $p->snack}}</td>
										</tr>
									@endforeach
                                    </tbody>
                                </table>

                                <ul class="pagination pull-right">
                                    <!-- <li class="disabled"><span class="glyphicon glyphicon-chevron-left"></span></li> -->
                                    <li class="active">{{ $instansis->links() }}</a></li>
                                    <li><a href="{{ route('i.cetak.pdf') }}" class="btn btn-primary" target="_blank">CETAK PDF</a></li>
                                    <!-- <li>{{ $umums->links() }}<span class="glyphicon glyphicon-chevron-right"></span></li> -->
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                
                            </div>
                            <h3 class="box-title" style="text-align:center"><br>Data Kunjungan Dinas</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table striped" id="datatables"> 
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">NO</th>
                                            <th style="text-align:center">NOMOR SURAT</th>
                                            <th style="text-align:center">PENERIMA KUNJUNGAN</th>
                                            <th style="text-align:center">SIFAT</th>
                                            <th style="text-align:center">PERIHAL</th>
                                            <th style="text-align:center">TANGGAL</th>
                                            <th style="text-align:center">DURASI </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($kunjungans as $p)
										<tr>
                                            <td style="text-align:center">{{ $p->id}}</td>
                                            <td style="text-align:center">{{ $p->nsurat}}</td>
											<td style="text-align:center">{{ $p->penerima}}</td>
											<td style="text-align:center">{{ $p->sifat}}</td>
                                            <td style="text-align:center">{{ $p->perihal}}</td>
											<td style="text-align:center">{{ $p->tanggal}}</td>
                                            <td style="text-align:center">{{ $p->durasi}}</td>
											
										</tr>
									@endforeach
                                    </tbody>
                                </table>

                                <ul class="pagination pull-right">
                                    <!-- <li class="disabled"><span class="glyphicon glyphicon-chevron-left"></span></li> -->
                                    <li class="active">{{ $kunjungans->links() }}</a></li>
                                    <li><a href="{{ route('d.cetak.pdf') }}" class="btn btn-primary" target="_blank">CETAK PDF</a></li>
                                    <!-- <li>{{ $umums->links() }}<span class="glyphicon glyphicon-chevron-right"></span></li> -->
                                </ul>

                            </div>
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
    <script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js ')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js ')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.js ')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js ')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/js/custom.min.js ')}}"></script>
    <script src="{{asset('assets/dataTables/datatables.min.js ')}}"></script>
    <script type="{{asset('assets/text/javascript ')}}">

            $(document).ready(function(){

                    $('#datatables').DataTable();

            });
    
    </script>

    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

    <script>
      const chart = new Chartisan({
        el: '#chart',
        data: {
          'chart': { "labels": ["Aspirasi", "Instansi", "Dinas"] },
          'datasets': [
            { "name": "Jumlah Kunjungan Tahun 2022", "values": [{{ $umums->count() }}, {{ $instansis->count() }}, {{ $kunjungans->count() }}] }
          ]
        },
        hooks: new ChartisanHooks()
        .beginAtZero()
        .colors(),
      })
    </script>
</body>

</html>