@extends('layout.main')
@section('content')
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h3 class="white-text">Selamat Datang {{ Auth::user()->name }}!</h3>
                        <p class="white-text op-7 m-b-20">Success is not a destination, its a Journey!!!</p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Devices - Income - Sales -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <!-- col -->
                   <!--  <div class="row">
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$jurusan}}</h2>
                                        <h6 class="white-text op-5 text-darken-2">Jumlah Jurusan</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$siswa}}</h2>
                                        <h6 class="white-text op-5 text-darken-2">Jumlah Siswa</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$dudi}}</h2>
                                        <h6 class="white-text op-5 text-darken-2">Jumlah Dudi</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$jurnal}}</h2>
                                        <h6 class="white-text op-5 text-darken-2">Jumlah Jurnal Siswa</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   
                 <div class="row">
                    
                    <div class="row">
                    <div class="col l3 m6 s12">
                        <div class="card danger-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$siswa}}</h2>
                                        <h6 class="white-text op-5 light-blue-text">Jumlah Siswa</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card info-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$jurusan}}</h2>
                                        <h6 class="white-text op-5">Jumlah Jurusan</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    
                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$dudi}}</h2>
                                        <h6 class="white-text op-5 text-darken-2">Jumlah Dudi</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card warning-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{$jurnal}}</h2>
                                        <h6 class="white-text op-5">Jumlah Jurnal</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Devices - Income - Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- col -->
                    <div class="col s12 l4">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Device Variations</h5>
                                <div id="visitor" style="height:267px; width:100%;" class="m-t-20"></div>
                                <ul class="list-inline center-align">
                                    <li><i class="fa fa-circle blue-text"></i> Mobiles</li>
                                    <li><i class="fa fa-circle blue-text text-accent-4"></i> Desktops</li>
                                    <li><i class="fa fa-circle orange-text"></i> Tablets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col s12 l4">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Net Income</h5>
                                <div class="net-income m-t-30" style="height:257px; position: relative;"></div>
                                <ul class="list-inline center-align">
                                    <li><i class="fa fa-circle blue-text text-accent-4"></i> Net Income</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col s12 l4">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Sales Performance</h5>
                                <div class="row">
                                    <div class="col s8">
                                        <h3 class="font-medium m-b-5 m-t-30">$4316</h3>
                                        <span>(150-165 sales)</span>
                                    </div>
                                    <div class="col s4 right-align">
                                        <div id="sales2" style="height:125px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Monthly Sales</h5>
                                <div class="row">
                                    <div class="col s8 m-t-30">
                                        <h3 class="font-medium m-b-5">$3528</h3>
                                        <span>(150-165 sales)</span>
                                    </div>
                                    <div class="col s4 right-align">
                                        
                                        <div id="monthlysales"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
               
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com/">RQ Team</a>.</footer>
        
        @endsection