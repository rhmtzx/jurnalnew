@extends('landing.face')
@section('content')
<section class="home-section" id="beranda">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padding-top-80">
                  <h1>Selamat Datang Di J-On, Tempat Mengisi Jurnal PKL SMKN 1 Pasuruan.</h1>
                  <p>Kami Membantu Mempermudah Pengisian Jurnal Dan Absen Harian Siswa Dalam Bentuk Web.</p>
                  @guest
                  <a href="/login" class="btn-blue scrool">Silahkan Login</a>
                  @else
                  <a href="javascript:history.back()" class="btn-blue scrool">Silahkan Login</a>
                  @endguest
            </div>
            <div class="col-md-6">
                  <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/3.png') }}" class="hero-image width-97" alt="pic">
            </div>
        </div>
    </div>
</section>

<section class="section-white section-bottom-border" id="fitur">
    <div class="container">
          <div class="row">
            <div class="col-md-12 text-center padding-bottom-10">
                <h2 class="section-title">Mengapa Harus J - On ?</h2>
                <p class="section-subtitle">Kami Memiliki Beberapa Fitur Yang Dapat Digunakan Di Antaranya</p>
            </div>
        </div>
          <div class="row">
            <div class="col-md-4">
                <div class="feature-box wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn;">
                    <i class="fas fa-tachometer-alt"></i>
                    <h4>Pengisian Cepat</h4>
                    <p>Akses yang anda gunakan dalam mengoperasikan aplikasi cepat dan tak terbatas waktu.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <i class="fas fa-chart-line"></i>
                    <h4>Tampilan Bersahabat</h4>
                    <p>J - On mengedepankan tampilan terbaik untuk user dengan tampilan yang bersahabat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeIn;">
                    <i class="fas fa-rocket"></i>
                    <h4>Terorganisir</h4>
                    <p>Data Jurnal akan tercatat dengan rapi dan baik sesuai tanggal dan kegiatan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay:
                 1s; animation-name: fadeIn;">
                    <i class="fas fa-pen"></i>
                    <h4>Efisien</h4>
                    <p>Anda tidak perlu menulis jurnal di buku lagi karena sekarang anda bisa menuliskannya disini.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box wow fadeIn" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 1.25s; animation-name: fadeIn;">
                    <i class="fab fa-rocketchat"></i>
                    <h4>Mendukung 24/7</h4>
                    <p>Kami dapat membantu anda dalam pelayanan sepanjang waktu.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box wow fadeIn" data-wow-delay="1,50s" style="visibility: visible; animation-delay: 1.50s; animation-name: fadeIn;">
                    <i class="fas fa-users"></i>
                    <h4>Fleksibel</h4>
                    <p>Anda bisa login sebagai siswa,sebagai guru, ataupun sebagai dudi.</p>
                </div>
            </div>
        </div>
          <div class="row">
          </div>
    </div>
</section>
<section class="section-grey section-top-border" id="pengguna">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">User Pengguna Kami</h2>
                <p class="section-subtitle">Disini Kami Memiliki 3 Macam Pengguna Di Antaranya.</p>
            </div>
            <div class="col-md-4">
                <div class="main-services">
                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/malingsiswa.png') }}" class="width-100" alt="pic">
                    <h3>Siswa</h3>
                    <p>Sebagai Siswa Anda Bisa Melakukan Penambahan Data Jurnal Dan Absen PKL Setiap Harinya.</p>
                    @guest
                    <a href="/registersiswa" class="btn-blue-line small scrool">Daftar Siswa Sekarang !!</a>
                        @else
                        <a href="404" class="btn-blue-line small scrool">Daftar Siswa Sekarang !!</a>
                    @endguest
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-services">
                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/malingguru.png') }}" class="width-100" alt="pic">
                    <h3>Guru</h3>
                    <p>Sebagai Guru Anda Bisa Melakukan Pengamatan Data Jurnal Dan Absen Siswa Yang Sedang Melakukan PKL.</p>
                    @guest
                    <a href="/registerguru" class="btn-blue-line small scrool">Daftar Guru Sekarang !!</a>
                    @else
                    <a href="404" class="btn-blue-line small scrool">Daftar Guru Sekarang !!</a>
                    @endguest
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-services">
                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/malingdudi.png') }}" class="width-100" alt="pic">
                    <h3>Dudi</h3>
                    <p>Sebagai Dudi Anda Bisa Melakukan Penyetujuan Data Jurnal Dan Absen Yang Telah Ditambahkan Siswa.</p>
                    @guest
                    <a href="/registerdudi" class="btn-blue-line small scrool">Daftar Dudi Sekarang !!</a>
                        @else
                        <a href="404" class="btn-blue-line small scrool">Daftar Dudi Sekarang !!</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-blue small-paddings" id="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center padding-top-50 padding-bottom-20">
                <h3 class="white-text">Ayo! Bergabung Bersama Kami !</h3>
                <h3 class="white-text">Dapatkan Kemudahan Dalam Memonitoring Jurnal Dan Absen Harian</h3>
            </div>
        </div>
    </div>
</section>
<section class="section-white section-top-border" id="keuntungan">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padding-top-30">
                <div class="features-second">
                    <div class="dropcaps-circle">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h4 class="margin-bottom-5">Kemudahan Sistem Aplikasi.</h4>
                    <p>Sistem aplikasi yang mudah memudahkan kerja dan pengoperasian waktu yang cepat.</p>
                </div>
                <div class="features-second">
                    <div class="dropcaps-circle">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="margin-bottom-5">Kemudahan Monitoring Jurnal.</h4>
                    <p>Kelola proses monitoring dan bersiaplah untuk mengatasi tantangan apa pun dengan sangat mudah.</p>
                </div>
                <div class="features-second">
                    <div class="dropcaps-circle">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4 class="margin-bottom-5">Kemudahan Absensi Harian.</h4>
                    <p>Absen dengan praktis karena pengisian absensi sangatlah mudah.</p>
                </div>
            </div>
            <div class="col-md-6 wow slideInRight" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: slideInRight;">
                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/landing.jpg') }}" class="width-100 box-shadow" alt="pic">
            </div>
        </div>
    </div>
</section>
<section class="section-white small-padding-bottom" id="pertanyaan">
    <div class="container">
        <div class="row">
            <div class="col-md-6 margin-top-10">
                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/pertanyaan2.jpg') }}" class="width-100 box-shadow" alt="picture">
            </div>
            <div class="col-md-6 margin-top-20">
                <h3>Pertanyaan Tentang Kami</h3>
                <div class="accordion" id="accordionFAQ">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Apa Itu J - On ? 
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                            <div class="card-body">
                            Aplikasi ini digunakan untuk mendata secara online aktifitas jurnal seorang siswa, sehingga semua aktifitas jurnal tersebut terdata rapi dan gampang sekali di gunakan.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Tujuan Dan Manfaat ?
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                            <div class="card-body">
                            Mempermudah mendata jurnal untuk guru, Mempercepat Pengisian jurnal untuk siswa, dan Monitoring data jurnal dan absen untuk dudi serta bisa menyetujui jurnal tersebut.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Bagaimana Cara Mengisi Jurnal ?
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                            <div class="card-body">
                            Klik pada sidebar isi jurnal pada halaman siswa, lalu klik tambah jurnal maka anda akan di arahkan dalam pengisian data jurnal.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Ada Keluhan ?
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                            <div class="card-body">
                            Silahkan isi pada menu masukan, kemudian isi sesuai dengan keluhan, atau penambahan yang diinginkan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-white section-bottom-border" id="lainnya">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padding-top-20">
                <h3>Tunggu Apa Lagi ?</h3>
                <p>Beberapa Keuntungan Yang Mungkin Anda Peroleh Jika Menggunakan Aplikasi Kami Beberapa Diantaranya Yaitu.</p>
                <ul class="benefits">
                    <li><i class="fa fa-check"></i> Pengisian Jurnal Cepat.</li>
                    <li><i class="fa fa-check"></i> Penggunaan Aplikasi Tanpa Berbayar.</li>
                    <li><i class="fa fa-check"></i> Monitoring Jurnal Secara Praktis.</li>
                </ul>
                <a href="/login" class="btn-blue scrool">Login Sekarang</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/yy.jpg') }}" class="hero-image width-100 box-shadow" alt="pic">
            </div>
        </div>
    </div>
</section>
<section class="section-grey partners-paddings section-top-border section-bottom-border" id="kerjasama">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="section-title">Kerja Sama Kami</h3>
            </div>
            <div class="col-md-12 text-center">
                <ul class="partners-mentions">
                    <li><img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/humma.png') }}" alt="CSS Awards"></li>
                    <li><img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/esemka.png') }}" alt="Awwwards"></li>
                    <!-- <li><img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/humma.png') }}" alt="CSS Winner"></li> -->
                    <!-- <li><img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/humma.png') }}" alt="CSS Design Awards"></li> -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- <section class="section-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="video-popup-wrapper">
                    <div class="popup-gallery">
                        <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/img2.jpg') }}" class="width-100 video-popup-image" alt="pic">
                        <a class="popup4 video-play-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-top-30 padding-left-20">
                <h2 class="white-text">Real-time reporting on your most important metrics.</h2>
                <p class="white-text">Work is completely different today. Teams are more agile, more collaborative and drive innovation faster than ever — and the most successful companies have a digital workplace to match.</p>
                <p class="white-text">Essentials is designed with your customers in mind, so you can track and analyze all your data in one central location. Essentials offer a better experience for your customers.</p>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="section-white no-padding-bottom section-top-border">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padding-top-120 text-center">
                <p class="testimonial-single">“People who succeed in business aren't afraid to hear feedback from their customers - they actually thrive from it.”</p>
                <h5 class="margin-bottom-5">Johanna S. Richardson</h5>
                <p class="blue">CEO Essentials</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/testimonials-woman.jpg') }}" class="width-100" alt="pic">
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="section-grey section-top-border" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Team Kami</h2>
                <p class="section-subtitle">Team Kami Terdiri Dari 2 Orang Yaitu Muhammad Narendra Syahrafli Dan Muhammad Rahmatullah .</p>
            </div>
           <div class="col-sm-12 col-md-4">

                <div class="team-item">

                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/team1.jpg') }}" class="team-img" alt="pic">

                    <h3>CHRISTINA HAWKINS</h3>

                    <div class="team-info"><p>Head of SEO</p></div>

                    <p>Johnathan is our  co-founder and has developed search strategies for a variety of clients for over 5 years.</p>

                    <ul class="team-icon">

                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a></li>

                        <li><a href="#" class="facebook"><i class="fab fa-linkedin-in"></i></a></li>

                        <li><a href="#" class="dribble"><i class="fab fa-dribbble"></i></a></li>

                    </ul>

                </div>

            </div> 
            <div class="col-sm-12 col-md-4">

                <div class="team-item">

                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/team4.jpg') }}" class="team-img" alt="pic">

                    <h3>MUHAMMAD NERENDRA SYAHRAFLI</h3>

                    <div class="team-info"><p>Backend Developer</p></div>

                    <p>Infokan By 1 Kagura.</p>

                    <ul class="team-icon">

                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a></li>

                        <li><a href="#" class="facebook"><i class="fab fa-linkedin-in"></i></a></li>

                        <li><a href="#" class="dribble"><i class="fab fa-dribbble"></i></a></li>

                    </ul>

                </div>

            </div>
            <div class="col-sm-12 col-md-4">
                <div class="team-item">
                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/team4.jpg') }}" class="team-img" alt="pic">
                    <h3>MUHAMMAD RAHMATULLAH</h3>
                    <div class="team-info"><p>Frontend Developer</p></div>
                    <p>Awokawk.</p>
                    <ul class="team-icon">
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#" class="facebook"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="dribble"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="section-blue" id="showcase">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title white-text">Explore Latest Projects</h2>
                <p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
            </div>
            <div class="col-md-12 padding-top-20">
                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase1.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase2.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase3.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase4.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase5.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase6.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase7.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/showcase8.jpg') }}" alt="showcase" class="gallery-show">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="section-grey medium-paddings section-bottom-border">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto padding-bottom-40">
                <div id="carouselIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators testimonials-indicators">
                        <li data-target="#carouselIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselIndicators2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testim-inner">
                                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/testimonials1.jpg') }}" alt="testimonials" class="testim-img">
                                <p>The attention of a traveller, should be particularly turned to the various works of nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>
                                <h6>Jennifer Smith<span class="job-text"> - Web Designer</span></h6>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testim-inner">
                                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/testimonials2.jpg') }}" alt="testimonials" class="testim-img">
                                <p>The attention of a traveller, should be particularly turned to the various works of nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>
                                <h6>John Doe<span class="job-text"> -  General Manager</span></h6>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testim-inner">
                                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/testimonials3.jpg') }}" alt="testimonials" class="testim-img">
                                <p>The attention of a traveller, should be particularly turned to the various works of nature, to mark the distinctions of the climates he may explore, and to offer such useful observations on the different productions as may occur.</p>
                                <h6>Alexandra Smith<span class="job-text"> - App Magazine Editor</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="section-white section-bottom-border" id="lainnya">
    <div class="container">
        <div class="row">
            <div class="col-md-6 padding-top-20">
                <h3>Tunggu Apa Lagi ?</h3>
                <p>Beberapa Keuntungan Yang Mungkin Anda Peroleh Jika Menggunakan Aplikasi Kami Beberapa Diantaranya Yaitu.</p>
                <ul class="benefits">
                    <li><i class="fa fa-check"></i> Pengisian Jurnal Cepat.</li>
                    <li><i class="fa fa-check"></i> Penggunaan Aplikasi Tanpa Berbayar.</li>
                    <li><i class="fa fa-check"></i> Monitoring Jurnal Secara Praktis.</li>
                </ul>
                @guest
                <a href="/login" class="btn-blue scrool">Login Sekarang</a>
                    @else
                    <a href="javascript:history.back()" class="btn-blue scrool">Login Sekarang</a>
                @endguest
            </div>
            <div class="col-md-6">
                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/yy.jpg') }}" class="hero-image width-100 box-shadow" alt="pic">
            </div>
        </div>
    </div>
</section>



<!-- <section class="section-grey" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Our Blog</h2>
                <p class="section-subtitle">Latest news, tips and best practices.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-item">
                    <div class="popup-wrapper">
                        <div class="popup-gallery">
                            <a href="#">
                                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/blog1.jpg') }}" class="width-100" alt="pic">
                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item-inner">
                        <h3 class="blog-title"><a href="#">The Guide To LinkedIn Ads</a></h3>
                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> Paul Smith</a>
                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> WordPress</a>
                        <p>Quis autem velis ets reprehender net etid quiste voluptate velite esse quam nihis etsa sedit netsid varias.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-item">
                    <div class="popup-wrapper">
                        <div class="popup-gallery">
                            <a href="#">
                                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/blog2.jpg') }}" class="width-100" alt="pic">
                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item-inner">
                        <h3 class="blog-title"><a href="#">Affinity Designer Quick Start</a></h3>
                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>
                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Marketing</a>
                        <p>Quis autem velis ets reprehender net etid quiste voluptate velite esse quam nihis etsa sedit netsid varias.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-item">
                    <div class="popup-wrapper">
                        <div class="popup-gallery">
                            <a href="#">
                                <img src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/blog3.jpg') }}" class="width-100" alt="pic">
                                <span class="eye-wrapper2"><i class="fa fa-link eye-icon"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="blog-item-inner">
                        <h3 class="blog-title"><a href="#">Our Happy Team</a></h3>
                        <a href="#" class="blog-icons"><i class="fa fa-user"></i> By John Doe</a>
                        <a href="#" class="blog-icons last"><i class="fa fa-tags"></i> Design</a>
                        <p>Quis autem velis ets reprehender net etid quiste voluptate velite esse quam nihis etsa sedit netsid varias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- <section class="section-white section-top-border" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Get in touch</h4>
                <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                <form id="contact-form" class="contact" action="https://demo.epic-webdesign.com/tf-essentials/v1/php/contact.php" method="post">
                    <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">
                    <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">
                    <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">
                    <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>
                    <input value="Send Message" id="submit-button" class="contact-submit" type="submit">
                </form>
            </div>
            <div class="col-md-6">
                <h4>Temukan Kami Di Google Maps</h4>
                <iframe class="contact-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9050207912896!2d-0.14675028449633118!3d51.514958479636384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad554c335c1%3A0xda2164b934c67c1a!2sOxford+St%2C+London%2C+UK!5e0!3m2!1sen!2sro!4v1485889312335" width="600" height="270" style="border:0" allowfullscreen></iframe>
                <h5>Head Office</h5>
                <p class="contact-info"><i class="fas fa-map-marker-alt"></i>Jalan Veteran, Bugul Lor, Panggungrejo, Bugul Lor, Panggungrejo, Kota Pasuruan, Jawa Timur 67122</p>
                <p class="contact-info"><i class="fas fa-envelope"></i> <a href="mailto:contact@youremail.com">smkn1kotapasuruan@gmail.com</a></p>
                <p class="contact-info"><i class="fas fa-phone"></i> (0343) 421380</p>
            </div>
        </div>
  </div>
</section> -->
@endsection
