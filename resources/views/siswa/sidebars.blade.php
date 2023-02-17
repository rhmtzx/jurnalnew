<div class="sidebar-menu light-sidebar">
        <div class="sidebar-header">
            <!--=========================*
                          Logo
            *===========================-->
            <div class="logo">
                <a href="/dashboard"><img src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/images/0.png')}}" alt="logo" width="500px"></a>
            </div>
            <!--=========================*
                        End Logo
            *===========================-->
        </div>
        <!--=========================*
                   Main Menu
        *===========================-->
        <div class="main-menu">
            <div class="menu-inner" id="sidebar_menu">
                <nav>
                    <ul class="metismenu" id="menu">
                        @if(Auth::user()->role == 'Siswa')
                        <ul><em>Beranda</em></ul>
                        <br>
                            <li class="{{ ($tittle === 'dashboard') ? 'active':  ''}}">
                            <a href="/dashboard">
                                <i class="fa-solid fa-house"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <br>
                        <ul><em>Data Siswa & Plotingan</em></ul>
                        <br>
                        <li class="{{ ($tittle === 'datasiswa') ? 'active': '' }}">
                            <a href="/datasiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'dataplotingan') ? 'active': '' }}">
                            <a href="/dataplotingan">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Plotingan Siswa</span>
                            </a>
                        </li>
                        <br>
                        <ul><em>Jurnal & Absen</em></ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Isi Jurnal</span>
                            </a>
                        </li>

                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Isi Absen</span>
                        @if(Auth::user()->role == 'Dudi')
                        <ul><em>Beranda</em></ul>
                        <br>
                            <li class="{{ ($tittle === 'dashboard') ? 'active': '' }}">
                            <a href="/dashboard">
                                <i class="fa-solid fa-house"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <br>
                        <ul><em>Data Siswa</em></ul>
                        <br>
                        <li class="{{ ($tittle === 'datasiswa') ? 'active': '' }}">
                            <a href="/datasiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Siswa</span>
                            </a>
                        </li>
                        <br>
                        <ul><em>Jurnal & Absen</em></ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa</span>
                            </a>
                        </li>

                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Absen Siswa</span>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->role == 'Guru')
                        <ul><em>Beranda</em></ul>
                        <br>
                            <li class="active">
                            <a href="/dashboard ">
                                <i class="fa-solid fa-house"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <br>
                        <ul><em>Data Siswa & Plotingan</em></ul>
                        <br>
                        <li class="{{ ($tittle === 'datasiswa') ? 'active': '' }}">
                            <a href="/datasiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'dataplotingan') ? 'active': '' }}">
                            <a href="/dataplotingan">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Plotingan Siswa</span>
                            </a>
                        </li>
                        <br>
                        <ul><em>Absen & Jurnal</em></ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa</span>
                            </a>
                        </li>

                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Absen Siswa</span>
                            </a>
                        </li>
                        @endif

                        <!--=========================*
                                  Charts
                        *===========================-->
                       <!--  <li>
                            <a href="javascript:void(0)" aria-expanded="true">
                                <i class="feather ft-pie-chart"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="collapse">
                                <li><a href="chart-js.html"><i class="feather ft-bar-chart"></i><span>Chart Js</span></a></li>
                                <li><a href="morris-charts.html"><i class="feather ft-bar-chart-2"></i><span>Morris Chart Js</span></a></li>
                                <li><a href="c3-chart.html"><i class="feather ft-bar-chart-line"></i><span>C3 Chart Js</span></a></li>
                                <li><a href="chartist.html"><i class="feather ft-bar-chart-line-"></i><span>Chartist Js</span></a></li>
                            </ul>
                        </li> -->
                        <!--=========================*
                                  Email
                        *===========================-->
                        <!-- <li>
                            <a href="javascript:void(0)" aria-expanded="true">
                                <i class="feather ft-mail"></i>
                                <span>Email</span>
                            </a>
                            <ul class="collapse">
                                <li><a href="inbox.html"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
                                <li><a href="compose.html"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
                                <li><a href="read-mail.html"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
                            </ul>
                        </li> -->
                        <!--=========================*
                                  Gallery
                        *===========================-->
                        <!-- <li>
                            <a href="gallery.html">
                                <i class="feather ft-image"></i>
                                <span>Gallery</span>
                            </a>
                        </li> -->
                        <!--=========================*
                                  Session
                        *===========================-->
                        <!-- <li>
                            <a href="javascript:void(0)" aria-expanded="true">
                                <i class="feather ft-users"></i>
                                <span>Session</span>
                            </a>
                            <ul class="collapse">
                                <li>
                                    <a href="login.html">
                                        <i class="feather ft-log-in"></i>
                                        <span>Login</span>
                                    </a>
                                </li>
                                <li><a href="register.html"><i class="ion-person-add"></i><span>Register</span></a></li>
                                <li><a href="lock.html"><i class="ti-lock"></i><span>Lock Screen</span></a></li>
                                <li>
                                    <a href="reset-password.html">
                                        <i class="feather ft-lock"></i>
                                        <span>Reset Password</span>
                                    </a>
                                </li>
                                <li><a href="forgot-password.html"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                            </ul>
                        </li> -->
                        <!--=========================*
                                  Error Pages
                        *===========================-->
                        <!-- <li>
                            <a href="javascript:void(0)" aria-expanded="true">
                                <i class="feather ft-anchor"></i>
                                <span>Error Pages</span>
                            </a>
                            <ul class="collapse">
                                <li><a href="404.html"><i class="ti-unlink"></i><span>404</span></a></li>
                                <li><a href="500.html"><i class="ti-close"></i><span>500</span></a></li>
                                <li><a href="505.html"><i class="ti-na"></i><span>505</span></a></li>
                            </ul>
                        </li> -->
                        <!--=========================*
                                  Other Pages
                        *===========================-->
                        <!-- <li>
                            <a href="javascript:void(0)" aria-expanded="true">
                                <i class="feather ft-file-plus"></i>
                                <span>Other Pages</span>
                            </a>
                            <ul class="collapse">
                                <li>
                                    <a href="blank.html">
                                        <i class="feather ft-file"></i>
                                        <span>Blank Page</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <i class="feather ft-paperclip"></i>
                                        <span>Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        <i class="feather ft-dollar-sign"></i>
                                        <span>Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html"><i class="feather ft-user-check"></i><span>Profile</span></a>
                                </li>
                                <li><a href="timeline.html"><i class="feather ft-clock"></i><span>Timeline</span></a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <!--=========================*
                  End Main Menu
        *===========================-->
    </div>
