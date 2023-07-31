<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="70">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="75">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="/" class="logo logo-light" style="padding-top : 10px">
                    <span class="logo-sm">
                        <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="70">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="75">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                                <i class=" ri-home-3-fill"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>

                        
                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Data Sekolah</span></li>

                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="/datakelas">
                                <i class="ri-honour-line"></i> <span data-key="t-widgets">Data Kelas</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('dataguru') ? 'active' : '' }}" href="/dataguru">
                                <i class="ri-contacts-book-2-fill"></i> <span data-key="t-widgets">Data Guru</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('datasiswa') ? 'active' : '' }}" href="/datasiswa">
                                <i class="ri-contacts-book-2-fill"></i> <span data-key="t-widgets">Data Siswa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('datajurusan') ? 'active' : '' }}" href="/datajurusan">
                                <i class="ri-contacts-book-2-fill"></i> <span data-key="t-widgets">Data Jurusan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('dataplotingan') ? 'active' : '' }}" href="/dataplotingan">
                                <i class="ri-git-repository-fill"></i> <span data-key="t-widgets">Plotingan Siswa </span>
                            </a>
                        </li>
                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Data Dudi</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('datadudi') ? 'active' : '' }}" href="/datadudi">
                                <i class="ri-building-fill"></i> <span data-key="t-widgets">Data Dudi</span>
                            </a>
                        </li>
                        <!-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Data User</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/datauser">
                                <i class="ri-contacts-book-2-fill"></i> <span data-key="t-widgets">Data User</span>
                            </a>
                        </li> -->
                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Data Grafik</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ Request::is('chart') ? 'active' : '' }}" href="/chart">
                                <i class="ri-contacts-book-2-fill"></i> <span data-key="t-widgets">Data Grafik Status</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
