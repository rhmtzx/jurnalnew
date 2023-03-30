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
                        <!-- AUTH SISWA -->
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
                        <br>
                        <ul> Absen</ul>
                        <br>
                        <li class="{{ ($tittle === 'absensiswa') ? 'active': '' }}">
                            <a href="/absensiswa">
                                <i class="fa-solid fa-book"></i>
                                <span>Input Absen</span>
                            </a>
                        </li>
                        <br>
                        <ul>Data Hari Ini</ul>
                        <br>
                        <li class="{{ ($tittle === 'today') ? 'active': '' }}">
                            <a href="/today">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Hari Ini</span>
                            </a>
                        </li>
                        @endif
                        <!-- END AUTH SISWA -->

                        <!-- AUTH DUDI -->
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
                        <li class="{{ ($tittle === 'jurnalhariini') ? 'active': '' }}">
                            <a href="/jurnalhariini">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa Hari Ini</span>
                        </a>
                        </li>
                        <br>
                        <ul>Izin</ul>
                        <br>
                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Izin Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'hehe') ? 'active': '' }}">
                            <a href="/izindaydudi">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Izin Siswa Hari Ini</span>
                            </a>
                        </li>
                        <br>
                        <ul>Absen</ul>
                        <br>
                        <li class="{{ ($tittle === 'setting') ? 'active': '' }}">
                            <a href="/settingdudi">
                                <i class="fa-solid fa-book"></i>
                                <span>Atur Waktu Absen</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'iya') ? 'active': '' }}">
                            <a href="/absendudi">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Absen Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'dudiabsen') ? 'active': '' }}">
                            <a href="/absendaydudi">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Absen Siswa Hari Ini</span>
                            </a>
                        </li>
                        <br>
                        @endif
                        <!-- END AUTH DUDI -->

                        <!-- AUTH GURU -->
                        @if(Auth::user()->role == 'Guru')
                        <ul>Beranda</ul>
                        <br>
                        <li class="{{ ($tittle === 'dashboard') ? 'active': '' }}">
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
                        <!-- JURNALGURU -->
                        <ul>Jurnal</ul>
                        <br>
                        <li class="{{ ($tittle === 'datajurnal') ? 'active': '' }}">
                            <a href="/datatambahjurnal">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'jurnalhariini') ? 'active': '' }}">
                            <a href="/jurnalhariini">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Jurnal Siswa Hari Ini</span>
                            </a>
                        </li>
                        <br>
                        <!-- IZINGURU -->
                        <ul>Izin</ul>
                        <br>
                        <li class="{{ ($tittle === 'dataabsen') ? 'active': '' }}">
                            <a href="/dataabsen">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Izin Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'haha') ? 'active': '' }}">
                            <a href="/izindayguru">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Izin Siswa Hari Ini</span>
                            </a>
                        </li>
                        <br>
                        <!-- ABSENGURU -->
                        <ul>Absen</ul>
                        <br>
                        <li class="{{ ($tittle === 'leyselia') ? 'active': '' }}">
                            <a href="/absenguru">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Absen Siswa</span>
                            </a>
                        </li>
                        <li class="{{ ($tittle === 'teacherabsen') ? 'active': '' }}">
                            <a href="/absendayguru">
                                <i class="fa-solid fa-book"></i>
                                <span>Data Absen Siswa Hari Ini</span>
                            </a>
                        </li>
                        @endif
                        <!-- END AUTH GURU -->

                    </ul>
                </nav>
            </div>
        </div>
        <!--=========================*
                  End Main Menu
        *===========================-->

</div>
