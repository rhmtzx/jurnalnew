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
                        <ul>Beranda</ul>
                        <br>
                        <li class="{{ ($tittle === 'dashboard') ? 'active':  ''}}">
                            <a href="/dashboard">
                                <i class="fa-solid fa-house"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <br>
                        {{-- <ul>Data Siswa & Plotingan</ul>
                        <br>
                        <li class="{{ ($tittle === 'datasiswa') ? 'active': '' }}">
                            <a href="/datasiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Siswa</span>
                            </a>
                        </li> --}}
                        {{-- <li class="{{ ($tittle === 'dataplotingan') ? 'active': '' }}">
                            <a href="/dataplotingan">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Plotingan Siswa</span>
                            </a>
                        </li>
                        <br> --}}
                        <ul>Jurnal</ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Isi Jurnal</span>
                            </a>
                        </li>
                        <ul> Absen</ul>
                        <br>
                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Absen Izin</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->role == 'Dudi')
                        <ul>Beranda</ul>
                        <br>
                        <li class="{{ ($tittle === 'dashboard') ? 'active': '' }}">
                            <a href="/dashboard">
                                <i class="fa-solid fa-house"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <br>
                        <ul>Data Siswa</ul>
                        <br>
                        <li class="{{ ($tittle === 'datasiswa') ? 'active': '' }}">
                            <a href="/datasiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Siswa</span>
                            </a>
                        </li>
                        <br>
                        <ul>Jurnal</ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa</span>
                            </a>
                        </li>
                        <ul>Absen</ul>
                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Izin Siswa</span>
                            </a>
                        </li>
                        @endif

                        @if(Auth::user()->role == 'Guru')
                        <ul>Beranda</ul>
                        <br>
                        <li class="active">
                            <a href="/dashboard ">
                                <i class="fa-solid fa-house"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <br>
                        <ul>Data Siswa</ul>
                        <br>
                        <li class="{{ ($tittle === 'datasiswa') ? 'active': '' }}">
                            <a href="/datasiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Siswa</span>
                            </a>
                        </li>
                        <br>
                        <ul>Jurnal</ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa</span>
                            </a>
                        </li>
                        <ul>Absen</ul>
                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Izin Siswa</span>
                            </a>
                        </li>
                        @endif

                    </ul>
                </nav>
            </div>
        </div>
        <!--=========================*
                  End Main Menu
        *===========================-->

</div>
