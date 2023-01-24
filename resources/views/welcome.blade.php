@extends('layout.main')
@section('content')
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card info-gradient m-t-0 m-b-0">
                <div class="card-content">
                    <div class="p-b-40 p-t-20">
                        <h3 class="white-text">Welcome back {{ Auth::user()->name }}!</h3>
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
                    <div class="col s12 l7">
                        <div class="card card-hover">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Earnings</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12 dl m-r-10">
                                            <li><i class="fa fa-circle blue-text text-accent-4"></i> Expenses</li>
                                            <li><i class="fa fa-circle blue-grey-text text-lighten-5"></i> Earnings</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="chart-earnings" style="height: 255px"></div>
                                <div class="row m-t-25 center-align">
                                    <!-- col -->
                                    <div class="info col m4 s12 l4">
                                        <span>Total Earnings</span>
                                        <h4 class="font-medium m-b-5 m-t-5">$3,567.56</h4>
                                        <span class="green-text">+23% <i class="fa fa-chevron-up"></i></span>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="info col m4 s12 l4">
                                        <span>Referral Earnings</span>
                                        <h4 class="font-medium m-b-5 m-t-5">$769.08</h4>
                                        <span class="red-text">-18% <i class="fa fa-chevron-down"></i></span>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="info col m4 s12 l4">
                                        <span>Total Sales</span>
                                        <h4 class="font-medium m-b-5 m-t-5">5489</h4>
                                        <span class="green-text">+12% <i class="fa fa-chevron-up"></i></span>
                                    </div>
                                    <!-- col -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col s12 l5">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card warning-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title  white-text">Revenues</h5>
                                        <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">$250</span></span></p>
                                        <p><span class="white-text op-5">Last Month <span class="right">$158</span></span></p>
                                        
                                    </div>
                                    <div id="revenue" style="height:75px; width:100%;"></div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card primary-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title white-text">Visits</h5>
                                        <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">1255</span></span></p>
                                        <p><span class="white-text op-5">Last Month <span class="right">1470</span></span></p>
                                    </div>
                                    <div class="center-align">
                                        <div id="visits"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card success-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title  white-text">Jobs</h5>
                                        <ul class="m-t-15">
                                            <li>
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <span class="m-b-0 white-text op-5">Completed</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="m-b-0 white-text">26</span>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-10" style="background-color: rgba(0,0,0,.1);">
                                                    <div class="determinate white" style="width: 26%"></div>
                                                </div>
                                            </li>
                                            <li class="m-t-25">
                                                <div class="d-flex no-block align-items-center">
                                                    <div>
                                                        <span class="m-b-0 white-text op-5">Remaining</span>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span class="m-b-0 white-text">15</span>
                                                    </div>
                                                </div>
                                                <div class="progress m-t-10" style="background-color: rgba(0,0,0,.1);">
                                                    <div class="determinate white" style="width: 15%"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card danger-gradient card-hover">
                                    <div class="card-content">
                                        <h5 class="card-title white-text">Sales</h5>
                                        <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">88%</span></span></p>
                                        <p><span class="white-text op-5">Last Month <span class="right">75%</span></span></p>
                                    </div>
                                    <div id="sales" style="height:60px; width:100%;"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>                   
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- col -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <!-- title -->
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Projects of the Month</h5>
                                        <h6 class="card-subtitle">Overview of Latest Month</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="input-field dl support-select">
                                            <select>
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                                <div class="table-responsive">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th>Team Lead</th>
                                                <th>Project</th>
                                                <th>Team</th>
                                                <th>Status</th>
                                                <th>Weeks</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/d1.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Hanna Gover</h5><span>hgover@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <div class="popover-icon">
                                                        <a class="btn-floating btn light-blue">SS</a>
                                                        <a class="btn-floating btn cyan lighten-2">DS</a>
                                                        <a class="btn-floating btn white"><img src="../../assets/images/users/1.jpg" class="circle" width="41"/></a>
                                                        <a class="btn-floating btn light-blue lighten-5 blue-text text-darken-1">+</a>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-circle orange-text tooltipped" data-tooltip="In Progress"></i></td>
                                                <td>35</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/d2.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Daniel Kristeen</h5><span>Kristeen@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <div class="popover-icon">
                                                        <a class="btn-floating btn blue accent-4">SS</a>
                                                        <a class="btn-floating btn purple lighten-1">DS</a>
                                                        <a class="btn-floating btn light-blue lighten-5 blue-text text-darken-1">+</a>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-circle teal-text text-accent-4 tooltipped" data-tooltip="Active"></i></td>
                                                <td>35</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/d3.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Julian Josephs</h5><span>Josephs@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <div class="popover-icon">
                                                        <a class="btn-floating btn light-blue">SS</a>
                                                        <a class="btn-floating btn cyan lighten-2">DS</a>
                                                        <a class="btn-floating btn orange">RP</a>
                                                        <a class="btn-floating btn light-blue lighten-5 blue-text text-darken-1">+</a>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-circle teal-text text-accent-4 tooltipped" data-tooltip="Active"></i></td>
                                                <td>35</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img src="../../assets/images/users/2.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Jan Petrovic</h5><span>hgover@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <div class="popover-icon">
                                                        <a class="btn-floating btn light-blue">SS</a>
                                                        <a class="btn-floating btn light-blue lighten-5 blue-text text-darken-1">+</a>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-circle orange-text tooltipped" data-tooltip="In Progress"></i></td>
                                                <td>35</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="../../assets/images/big/img4.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 20 May 2018</span>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 3 Comments</a>
                                    </div>
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="../../assets/images/big/img5.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 19 May 2018</span>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 5 Comments</a>
                                    </div>
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col l4">
                        <div class="card">
                            <img class="card-img-top responsive-img" src="../../assets/images/big/img6.jpg" alt="Card image cap">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center m-b-15">
                                    <span><i class="ti-calendar"></i> 29 May 2018</span>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link"><i class="ti-comments"></i> 6 Comments</a>
                                    </div>
                                </div>
                                <h5>Featured Hydroflora Pots Garden &amp; Outdoors</h5>
                                <p class="m-b-0 m-t-10">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="waves-effect waves-light btn btn-round indigo m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.</footer>
        
        @endsection