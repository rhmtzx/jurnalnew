@extends('siswa.mains')
@section('contents')
<div class="main-content-inner">
            <div class="col-md-12 rt_subheader">
                <div class="rt_subheader_main">
                    <h3 class="rt_subheader_title mb-mob-2">Hello {{Auth()->user()->name}}!</h3>
                    <!-- <div class="rt_breadcrumb mb-mob-2">
                        <a href="#" class="rt_breadcrumb_home_icon"><i class="feather ft-home"></i></a>
                        <span class="rt_breadcrumb_separator"><i class="feather ft-chevrons-right"></i></span>
                        <a href="#" class="breadcrumb_link"> Home </a>
                        <span class="rt_breadcrumb_separator"><i class="feather ft-chevrons-right"></i></span>
                        <a href="#" class="breadcrumb_link"> Main Dashboard </a>
                    </div> -->
                </div>
                <div class="subheader_btns">
                    <!-- <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-edit mr-0"></i></a>
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-watch mr-0"></i></a> -->
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary">
                        <span>Today:</span>&nbsp;
                        <span>Jan 21</span>
                        <i class="feather ft-calendar ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 stretched_card pl-mob-3 mb-mob-4">
                    <div class="card bg-primary analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-trending-up text-primary"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Siswa</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$siswa}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 stretched_card mb-mob-4">
                    <div class="card bg-success analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-shopping-bag text-success"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Jurnal</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$jurnal}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 stretched_card mb-xs-mob-4">
                    <div class="card bg-danger analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-danger"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Plotingan</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$plotingan}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 stretched_card pr-mob-3">
                    <div class="card bg-dark analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-box text-dark"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Guru</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$guru}}</h3>
                                        <small class="stats_icon"><span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Sales By Profit</h4>
                            <div class="d-flex mt-2 total_sales_sec mt-3">
                                <div class="col-md-5">
                                    <p class="h1 lh-10 m-0 fw-300"><span>43,759</span>
                                    </p><small class="small text-success fs-11">Total Sales</small>
                                </div>
                                <div class="col-md-7 row no-gutters mt-2">
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-success mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Total Orders</h6><small><span class="text-success"><i class="feather ft-chevron-up"></i> 17%</span> this month</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-primary mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Total Products</h6><small><span class="text-danger"><i class="feather ft-chevron-down"></i> 23%</span> this month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="morris_line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Vist by Country</h4>
                            <div id="country_map"></div>
                            <div class="country_vists">
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            San Francisco
                                        </div>
                                        <div class="country_vists_value">
                                            65%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Germany
                                        </div>
                                        <div class="country_vists_value">
                                            40%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            France
                                        </div>
                                        <div class="country_vists_value">
                                            60%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Turkey
                                        </div>
                                        <div class="country_vists_value">
                                            75%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Nepal
                                        </div>
                                        <div class="country_vists_value">
                                            50%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Progress Table start -->
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Orders Overview</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">6583</th>
                                            <td>Mark Spence</td>
                                            <td>Macbook Pro</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-primary">Progress</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4652</th>
                                            <td>David Rebon</td>
                                            <td>iPhone X</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7292</th>
                                            <td>Jhon Doe</td>
                                            <td>Samsung</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7826</th>
                                            <td>Jessica Roy</td>
                                            <td>Exercise Machine</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>672.56$</td>
                                            <td><span class="badge badge-danger">Stopped</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2638</th>
                                            <td>Malika Jhon</td>
                                            <td>Machine</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>483.56$</td>
                                            <td><span class="badge badge-primary">Progress</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9374</th>
                                            <td>David Jess</td>
                                            <td>Laptop</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>473.56$</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><button type="button" class="btn btn-inverse-primary"><i class="fa fa-edit"></i></button></li>
                                                    <li><button type="button" class="btn btn-inverse-danger"><i class="ti-trash"></i></button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Progress Table end -->
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="ion-ios-more-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                            <h4 class="card_title mb-3">Recent Activities</h4>
                            <div class="table-responsive">
                                <table class="table table-centered table-hover mb-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/images/team/member1.jpg')}}"
                                                     width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Jhon Doe
                                                        <small class="font-weight-normal d-block mt-1">18 Jan 2019 11:28
                                                            pm
                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">Many desktop publishing</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/images/team/member2.jpg')}}"
                                                     width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">David Ron
                                                        <small class="font-weight-normal d-block mt-1">18 Jan 2019 11:28
                                                            pm
                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">Many desktop publishing</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/images/team/member3.jpg')}}"
                                                     width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Mike Hussey
                                                        <small class="font-weight-normal d-block mt-1">18 Jan 2019 11:28
                                                            pm
                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">Many desktop publishing</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->

                        </div> <!-- end card body-->
                    </div>
                </div>
                <div class="col-lg-4 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="card_title">AVERAGE SALE SIZE</div>
                            <div class="avg_sale_card">
                                <span class="badge badge-pill mb-2 badge-danger"><span class="feather ft-chevron-down mr-2"></span>23.36%</span>
                                <h1 class="mt-2">$956.78</h1>
                                <h4 class="mb-2">PER SALE</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque debitis dolor.</p>
                            </div>
                            <canvas id="avg-sale" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Traffic By Browsers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid assumenda aut.</p>
                            <div class="traffic_progress">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Google Chrome</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-success">80% <i class="feather ft-arrow-up text-white"></i></span>

                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="traffic_progress mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Firefox</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-danger">60% <i class="feather ft-arrow-down text-white"></i></span>

                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="traffic_progress mt-4 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Microsoft Edge</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-success">70% <i class="feather ft-arrow-up text-white"></i></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="traffic_progress mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 title">Safari</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="d-flex mr-1">
                                            <span class="badge badge-pill mb-2 badge-danger">30% <i class="feather ft-arrow-down text-white"></i></span>

                                        </span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
           
        </div>
@endsection
