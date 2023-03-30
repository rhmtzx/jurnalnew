<header class="header">

    <!--begin navbar-fixed-top -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <nav class="navbar navbar-expand-lg">

                <!--begin logo -->
                <a class="navbar-brand" href="/landinghome">J-On | Jurnal Online</a>
                <!--end logo -->

                <!--begin navbar-toggler -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <!--end navbar-toggler -->

                <!--begin navbar-collapse -->
                <div class="navbar-collapse collapse" id="navbarCollapse" style="">

                    <!--begin navbar-nav -->
                    <ul class="navbar-nav ml-auto">

                        <li><a href="#beranda">Beranda</a></li>

                        <li><a href="#fitur">Fitur</a></li>

                        <li><a href="#pengguna">Pengguna</a></li>

                        <li><a href="#keuntungan">Keuntungan</a></li>

                        <li><a href="#pertanyaan">Pertanyaan</a></li>

                        <li><a href="#kerjasama">Kerja Sama</a></li>
                        @guest
                        <li class="discover-link">
                            <a href="/login" class="external discover-btn">{{ __('login') }}</a>
                        </li>
                        @else
                        <li class="discover-link">
                            <a href="javascript:history.back()" class="external"><em>{{ Auth::user()->name }}</em></a>
                        </li>
                        <li class="discover-link">
                            <a href="/logout" class="external"><em>Logout</em></a>
                        </li>
                        @endguest

                    </ul>
                    <!--end navbar-nav -->

                </div>
                <!--end navbar-collapse -->

            </nav>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end navbar-fixed-top -->

</header>
