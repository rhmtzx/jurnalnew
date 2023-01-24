@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>


<!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:19:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Materialart Admin Template</title>
    <link href="../../dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="../../assets/extra-libs/prism/prism.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Material Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Title and breadcrumb -->
        <!-- ============================================================== -->
        <div class="page-titles">
            <div class="d-flex align-items-center">
                <h5 class="font-medium m-b-0">Cards</h5>
                <div class="custom-breadcrumb ml-auto">
                    <a href="#!" class="breadcrumb">Home</a>
                    <a href="#!" class="breadcrumb">Cards</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">

                            <h4><em>TAMBAH GURU PEMBIMBING</em></h4>
                            <hr>                                            
<form action="/insertgurupembimbing" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"><h6>Nama Guru Pembimbing</h6></label>
                                <input type="text" name="namagurupem" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nama Guru Pembimbing">
                                    @error('namagurupem')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <br>
                                    <br>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>Alamat Guru Pembimbing</h6></label>
                                    <input type="text" name="alamatgurupem" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Alamat Guru Pembimbing">
                                    @error('alamatgurupem')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <br>
                                    <br>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h6>No Telepon Guru Pembimbing</h6></label>
                                    <input type="number" name="notlpgurupem" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="No Telepon Guru Pembimbing">
                                    @error('notlpgurupem')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <br>
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><h6>Id Dudi</h6></label>
                                        <input type="number" name="id_dudi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Id Dudi">
                                        @error('id_dudi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <br>
                                        <br>
                                        <div class="mb-1">
                                            <label for="exampleInputEmail1" class="form-label"><h6>Masukkan Foto</h6></label>
                                            
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                        <br>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="/datagurupembimbing" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
                                        </div>
                                        </form>                         


                                                                            

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- ============================================================== -->
                            <!-- Container fluid scss in scafholding.scss -->
                            <!-- ============================================================== -->
                            <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.</footer>

                            <!-- ============================================================== -->
                            <!-- Page wrapper scss in scafholding.scss -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Right Sidebar -->
                            <!-- ============================================================== -->
                            <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>
                            <aside class="right-sidebar">
                                <!-- Right Sidebar -->
                                <ul id="right-slide-out" class="sidenav right-sidenav p-t-10">
                                    <li>
                                        <div class="row">
                                            <div class="col s12">
                                                <!-- Tabs -->
                                                <ul class="tabs">
                                                    <li class="tab col s4"><a href="#settings" class="active"><span class="material-icons">build</span></a></li>
                                                    <li class="tab col s4"><a href="#chat"><span class="material-icons">chat_bubble</span></a></li>
                                                    <li class="tab col s4"><a href="#activity"><span class="material-icons">local_activity</span></a></li>
                                                </ul>
                                                <!-- Tabs -->
                                            </div>
                                            <!-- Setting -->
                                            <div id="settings" class="col s12">
                                                <div class="m-t-10 p-10 b-b">
                                                    <h6 class="font-medium">Layout Settings</h6>
                                                    <ul class="m-t-15">
                                                        <li class="m-b-10">
                                                            <label>
                                                                <input type="checkbox" name="theme-view" id="theme-view" />
                                                                <span>Dark Theme</span>
                                                            </label>
                                                        </li>
                                                        <li class="m-b-10">
                                                            <label>
                                                                <input type="checkbox" class="nav-toggle" name="collapssidebar" id="collapssidebar" />
                                                                <span>Collapse Sidebar</span>
                                                            </label>
                                                        </li>
                                                        <li class="m-b-10">
                                                            <label>
                                                                <input type="checkbox" name="sidebar-position" id="sidebar-position" />
                                                                <span>Fixed Sidebar</span>
                                                            </label>
                                                        </li>
                                                        <li class="m-b-10">
                                                            <label>
                                                                <input type="checkbox" name="header-position" id="header-position" />
                                                                <span>Fixed Header</span>
                                                            </label>
                                                        </li>
                                                        <li class="m-b-10">
                                                            <label>
                                                                <input type="checkbox" name="boxed-layout" id="boxed-layout" />
                                                                <span>Boxed Layout</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-10 b-b">
                                                    <!-- Logo BG -->
                                                    <h6 class="font-medium">Logo Backgrounds</h6>
                                                    <ul class="m-t-15 theme-color">
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                                                    </ul>
                                                    <!-- Logo BG -->
                                                </div>
                                                <div class="p-10 b-b">
                                                    <!-- Navbar BG -->
                                                    <h6 class="font-medium">Navbar Backgrounds</h6>
                                                    <ul class="m-t-15 theme-color">
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                                                    </ul>
                                                    <!-- Navbar BG -->
                                                </div>
                                                <div class="p-10 b-b">
                                                    <!-- Logo BG -->
                                                    <h6 class="font-medium">Sidebar Backgrounds</h6>
                                                    <ul class="m-t-15 theme-color">
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                                                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                                                    </ul>
                                                    <!-- Logo BG -->
                                                </div>
                                            </div>
                                            <!-- chat -->
                                            <div id="chat" class="col s12">
                                                <ul class="mailbox m-t-20">
                                                    <li>
                                                        <div class="message-center">
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_1' data-user-id='1'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/1.jpg" alt="user" class="circle">
                                                                    <span class="profile-status online pull-right" data-status="online"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Chris Evans</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                    <span class="time">9:30 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_2' data-user-id='2'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/2.jpg" alt="user" class="circle">
                                                                    <span class="profile-status busy pull-right" data-status="busy"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Ray Hudson</h5>
                                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                                    <span class="time">9:10 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_3' data-user-id='3'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/3.jpg" alt="user" class="circle">
                                                                    <span class="profile-status away pull-right" data-status="away"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Lb James</h5>
                                                                    <span class="mail-desc">I am a singer!</span>
                                                                    <span class="time">9:08 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_4' data-user-id='4'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/4.jpg" alt="user" class="circle">
                                                                    <span class="profile-status offline pull-right" data-status="offline"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Don Andres</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                    <span class="time">9:02 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_5' data-user-id='5'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/1.jpg" alt="user" class="circle">
                                                                    <span class="profile-status online pull-right" data-status="online"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Chris Evans</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                    <span class="time">9:30 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_6' data-user-id='6'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/2.jpg" alt="user" class="circle">
                                                                    <span class="profile-status busy pull-right" data-status="busy"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Ray Hudson</h5>
                                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                                    <span class="time">9:10 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_7' data-user-id='7'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/3.jpg" alt="user" class="circle">
                                                                    <span class="profile-status away pull-right" data-status="away"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Lb James</h5>
                                                                    <span class="mail-desc">I am a singer!</span>
                                                                    <span class="time">9:08 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_8' data-user-id='8'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/4.jpg" alt="user" class="circle">
                                                                    <span class="profile-status offline pull-right" data-status="offline"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Don Andres</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                    <span class="time">9:02 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_9' data-user-id='9'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/1.jpg" alt="user" class="circle">
                                                                    <span class="profile-status online pull-right" data-status="online"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Chris Evans</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                    <span class="time">9:30 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_10' data-user-id='10'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/2.jpg" alt="user" class="circle">
                                                                    <span class="profile-status busy pull-right" data-status="busy"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Ray Hudson</h5>
                                                                    <span class="mail-desc">I've sung a song! See you at</span>
                                                                    <span class="time">9:10 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_11' data-user-id='11'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/3.jpg" alt="user" class="circle">
                                                                    <span class="profile-status away pull-right" data-status="away"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Lb James</h5>
                                                                    <span class="mail-desc">I am a singer!</span>
                                                                    <span class="time">9:08 AM</span>
                                                                </span>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#" class="user-info" id='chat_user_12' data-user-id='12'>
                                                                <span class="user-img">
                                                                    <img src="../../assets/images/users/4.jpg" alt="user" class="circle">
                                                                    <span class="profile-status offline pull-right" data-status="offline"></span>
                                                                </span>
                                                                <span class="mail-contnet">
                                                                    <h5>Don Andres</h5>
                                                                    <span class="mail-desc">Just see the my admin!</span>
                                                                    <span class="time">9:02 AM</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Activity -->
                                            <div id="activity" class="col s12">
                                                <div class="m-t-10 p-10">
                                                    <h6 class="font-medium">Activity Timeline</h6>
                                                    <div class="steamline">
                                                        <div class="sl-item">
                                                            <div class="sl-left green"> <i class="ti-user"></i></div>
                                                            <div class="sl-right">
                                                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                                <div class="desc">you can write anything </div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left blue"><i class="fa fa-image"></i></div>
                                                            <div class="sl-right">
                                                                <div class="font-medium">Send documents to Clark</div>
                                                                <div class="desc">Lorem Ipsum is simply </div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left"> <img class="circle" alt="user" src="../../assets/images/users/2.jpg"> </div>
                                                            <div class="sl-right">
                                                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                                <div class="desc">Contrary to popular belief</div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left"> <img class="circle" alt="user" src="../../assets/images/users/1.jpg"> </div>
                                                            <div class="sl-right">
                                                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                                <div class="desc">Approve meeting with tiger</div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left teal"> <i class="ti-user"></i></div>
                                                            <div class="sl-right">
                                                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                                <div class="desc">you can write anything </div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left purple"><i class="fa fa-image"></i></div>
                                                            <div class="sl-right">
                                                                <div class="font-medium">Send documents to Clark</div>
                                                                <div class="desc">Lorem Ipsum is simply </div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left"> <img class="circle" alt="user" src="../../assets/images/users/4.jpg"> </div>
                                                            <div class="sl-right">
                                                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                                <div class="desc">Contrary to popular belief</div>
                                                            </div>
                                                        </div>
                                                        <div class="sl-item">
                                                            <div class="sl-left"> <img class="circle" alt="user" src="../../assets/images/users/6.jpg"> </div>
                                                            <div class="sl-right">
                                                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                                <div class="desc">Approve meeting with tiger</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </aside>
                            <div class="chat-windows"></div>
                            <!-- ============================================================== -->
                            <!-- Right Sidebar -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- All Required js -->
                        <!-- ============================================================== -->
                        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
                        <script src="../../dist/js/materialize.min.js"></script>
                        <script src="../../assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
                        <!-- ============================================================== -->
                        <!-- Apps -->
                        <!-- ============================================================== -->
                        <script src="../../dist/js/app.js"></script>
                        <script src="../../dist/js/app.init.js"></script>
                        <script src="../../dist/js/app-style-switcher.js"></script>
                        <!-- ============================================================== -->
                        <!-- Custom js -->
                        <!-- ============================================================== -->
                        <script src="../../dist/js/custom.min.js"></script>
                        <!-- ============================================================== -->
                        <!-- This page plugin js -->
                        <!-- ============================================================== -->
                        <script src="../../assets/extra-libs/prism/prism.js"></script>
                    </body>


                    <!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:19:21 GMT -->
                    </html>
                    @endsection