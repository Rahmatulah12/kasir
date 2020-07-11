<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:rgb(127, 169, 227);">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}" style="color:white;">POS</a>
    </div>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="{{request()->is('/')? 'active' : ''}}">
                    <a href="{{url('/')}}"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Customer</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">
                                <i class="fa fa-laptop fa-fw" aria-hidden="true"></i> Transaksi Baru
                            </a>
                        </li>
                        <li>
                            <a href="{{url('transaction')}}">
                                <i class="fa fa-file fa-fw" aria-hidden="true"></i> Laporan Transaksi
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-truck fa-fw"></i> Distributor <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder fa-fw"></i> Transaksi Masuk
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-briefcase fa-fw"></i> Transaksi Keluar
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file fa-fw"></i> Laporan Transaksi
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{url('/hadiah')}}"><i class="fa fa-gift fa-fw"></i> Hadiah</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->

</nav>