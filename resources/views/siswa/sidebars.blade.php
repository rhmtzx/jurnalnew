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
                            </a>
                        </li>
                        @endif
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

                    </ul>
                </nav>
            </div>
        </div>
        <!--=========================*
                  End Main Menu
        *===========================-->

</div>
