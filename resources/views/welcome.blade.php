@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-9 col-12">
                  <div class="box bg-success">
                      <div class="box-body d-flex p-0">
                          {{-- <div class="flex-grow-1 p-30 flex-grow-1 bg-img bg-none-md" style="background-position: right bottom; background-size: auto 100%; background-image: url(http://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-30.svg)">
                              <div class="row">
                                  <div class="col-12 col-xl-7"> --}}
                                      {{-- <h1 class="mb-0 fw-600">Learn With Effectively With Us!</h1>
                                      <p class="my-10 fs-16 text-white-70">Get 30% off every course on january.</p>
                                      <div class="mt-45 d-md-flex align-items-center">
                                          <div class="me-30 mb-30 mb-md-0">
                                              <div class="d-flex align-items-center">
                                                  <div class="me-15 text-center fs-24 w-50 h-50 l-h-50 bg-danger b-1 border-white rounded-circle">
                                                      <i class="fa fa-graduation-cap"></i>
                                                  </div>
                                                  <div>
                                                      <h5 class="mb-0">Students</h5>
                                                      <p class="mb-0 text-white-70">75,000+</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div class="d-flex align-items-center">
                                                  <div class="me-15 text-center fs-24 w-50 h-50 l-h-50 bg-warning b-1 border-white rounded-circle">
                                                      <i class="fa fa-user"></i>
                                                  </div>
                                                  <div>
                                                      <h5 class="mb-0">Expert Mentors</h5>
                                                      <p class="mb-0 text-white-70">200+</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12 col-xl-5"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-12">
                  <div class="box bg-transparent no-shadow">
                      <div class="box-body p-xl-0 text-center">
                          <h3 class="px-30 mb-20">Have More<br>knoledge to share?</h3>
                          <a href="course.html" class="waves-effect waves-light w-p100 btn btn-primary"><i class="fa fa-plus me-15"></i> Create New Course</a>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
                              <div class="box-body py-5 bg-primary-light px-5">
                                  <p class="fw-500 text-primary text-overflow">Courses in Progress</p>
                              </div>
                              <div class="box-body p-10">
                                  <h1 class="countnm fs-40 m-0">5</h1>
                              </div>
                          </a>
                      </div>
                      <div class="col-6">
                          <a class="box box-link-shadow text-center pull-up" href="javascript:void(0)">
                              <div class="box-body py-5 bg-primary-light px-5">
                                  <p class="fw-500 text-primary text-overflow">Forum Discussion</p>
                              </div>
                              <div class="box-body p-10">
                                  <h1 class="countnm fs-40 m-0">25</h1>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-12">
                  <div class="box no-shadow mb-0 bg-transparent">
                      <div class="box-header no-border px-0">
                          <h3 class="fw-500 box-title">Popular Courses</h3>
                          <div class="box-controls pull-right d-md-flex d-none">
                            <a href="course.html">All Courses</a>
                          </div>
                      </div>
                  </div>
                  <div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15 bg-warning h-50 w-50 l-h-55 rounded text-center">
                                          <span class="fs-24">U</span>
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="course.html" class="text-dark hover-warning mb-1 fs-16">UI/UX Design</a>
                                          <span class="text-fade">30+ Courses</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-warning-light me-10">View Courses</a>
                                      <div class="dropdown">
                                          <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                          <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item flexbox" href="#">Apply</a>
                                            <a class="dropdown-item flexbox" href="#">Make a Payment</a>
                                            <a class="dropdown-item flexbox" href="#">Benefits</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15 bg-danger h-50 w-50 l-h-55 rounded text-center">
                                          <span class="fs-24">M</span>
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="course.html" class="text-dark hover-danger mb-1 fs-16">Marketing</a>
                                          <span class="text-fade">25+ Courses</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-danger-light me-10">View Courses</a>
                                      <div class="dropdown">
                                          <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                          <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item flexbox" href="#">Apply</a>
                                            <a class="dropdown-item flexbox" href="#">Make a Payment</a>
                                            <a class="dropdown-item flexbox" href="#">Benefits</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15 bg-success h-50 w-50 l-h-55 rounded text-center">
                                          <span class="fs-24">W</span>
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="course.html" class="text-dark hover-success mb-1 fs-16">Web Dev.</a>
                                          <span class="text-fade">30+ Courses</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-success-light me-10">View Courses</a>
                                      <div class="dropdown">
                                          <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                          <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item flexbox" href="#">Apply</a>
                                            <a class="dropdown-item flexbox" href="#">Make a Payment</a>
                                            <a class="dropdown-item flexbox" href="#">Benefits</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15 bg-primary h-50 w-50 l-h-55 rounded text-center">
                                          <span class="fs-24">M</span>
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="course.html" class="text-dark hover-primary mb-1 fs-16">Mathematics</a>
                                          <span class="text-fade">50+ Courses</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-primary-light me-10">View Courses</a>
                                      <div class="dropdown">
                                          <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                          <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item flexbox" href="#">Apply</a>
                                            <a class="dropdown-item flexbox" href="#">Make a Payment</a>
                                            <a class="dropdown-item flexbox" href="#">Benefits</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-12">
                  <div class="box no-shadow mb-0 bg-transparent">
                      <div class="box-header no-border px-0">
                          <h3 class="fw-500 box-title">Current Activity</h3>
                      </div>
                  </div>
                  <div class="box">
                      <div class="box-body pb-0">
                          <div class="mb-15 w-p100 d-flex align-items-center justify-content-between">
                              <div>
                                  <h3 class="my-0">Monthly Progress</h3>
                                  <p class="mb-0 text-fade">This is the latest Improvement</p>
                              </div>
                              <div class="input-group w-auto">
                                <button type="button" class="btn btn-primary-light btn-circle" id="daterange-btn">
                                    <p><i class="fa fa-calendar"></i></p>
                                </button>
                              </div>
                          </div>
                          <div id="charts_widget_2_chart"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-7">
                          <div class="box bg-warning">
                              <div class="box-body">
                                  <h2 class="my-0 fw-600 text-white">450K+</h2>
                                  <p class="mb-10 text-white-80">Completed Course</p>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <p class="mb-0 text-white-70">This is the latest Data</p>
                                      <button type="button" class="waves-effect waves-circle btn btn-circle btn-warning-light"><i class="mdi mdi-arrow-top-right"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-5">
                          <div class="box bg-danger">
                              <div class="box-body">
                                  <h2 class="my-0 fw-600 text-white">200K+</h2>
                                  <p class="mb-10 text-white-80">Video Course</p>
                                  <div class="d-flex align-items-center justify-content-end">
                                      <button type="button" class="waves-effect waves-circle btn btn-circle btn-danger-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-play"></i></button>
                                  </div>
                              </div>
                          </div>
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog modal-xl modal-dialog-centered">
                                <div class="modal-content">
                                      <div class="ratio ratio-16x9">
                                          <iframe src="http://player.vimeo.com/video/473177594?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1" title="video" allowfullscreen></iframe>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-12">
                  <div class="box no-shadow mb-0 bg-transparent">
                      <div class="box-header no-border px-0">
                          <h3 class="fw-500 box-title">Best Instructors</h3>
                          <div class="box-controls pull-right d-md-flex d-none">
                            <a href="#">See All</a>
                          </div>
                      </div>
                  </div>
                  <div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15 mb-1">
                                          <img src="../../../images/avatar/avatar-1.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">Nil Yeager</a>
                                          <span class="text-fade">5 Design Course</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-secondary">Courses</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15 mb-1">
                                          <img src="../../../images/avatar/avatar-2.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">Theron Trump</a>
                                          <span class="text-fade">5 Design Course</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-secondary">Courses</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15" style="margin-bottom: 1px;">
                                          <img src="../../../images/avatar/avatar-3.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">Tyler Mark</a>
                                          <span class="text-fade">5 Design Course</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-secondary">Courses</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box mb-15 pull-up">
                          <div class="box-body">
                              <div class="d-flex align-items-center justify-content-between">
                                  <div class="d-flex align-items-center">
                                      <div class="me-15">
                                          <img src="../../../images/avatar/avatar-4.png" class="bg-primary-light avatar avatar-lg rounded-circle" alt="">
                                      </div>
                                      <div class="d-flex flex-column fw-500">
                                          <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">Johen Mark</a>
                                          <span class="text-fade">5 Design Course</span>
                                      </div>
                                  </div>

                                  <div class="d-flex align-items-center">
                                      <a href="course.html" class="waves-effect waves-light btn btn-sm btn-secondary">Courses</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="col-xl-6 col-12">
                  <div class="box">
                      <div class="box-header no-border">
                          <h3 class="box-title">Top 5 School Performance</h3>
                      </div>
                      <div class="box-body">
                          <div id="performance_chart"></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-12">
                  <div class="box">
                      <div class="box-header no-border">
                          <h3 class="box-title">Overall Pass Percentage</h3>
                      </div>
                      <div class="box-body" style="min-height: 275px;">
                          <div id="pass_chart"></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-12">
                  <div class="box">
                      <div class="box-header no-border">
                          <h3 class="box-title">Content Usage</h3>
                      </div>
                      <div class="box-body text-center pt-60">
                          <p class="text-primary">12.5% higher than last month</p>
                          <div id="usage_chart"></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-8 col-12">
                  <div class="row">
                      <div class="col-xl-5 col-lg-6 col-12">
                          <div class="box">
                              <div class="box-header no-border">
                                  <h3 class="box-title">Course completion</h3>
                                  <ul class="box-controls pull-right d-md-flex d-none">
                                    <li>
                                      <a href="course.html" class="btn btn-primary-light px-10 base-font">View All</a>
                                    </li>
                                  </ul>
                              </div>
                              <div class="box-body">
                                  <div class="mb-25">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="w-p85">
                                              <div class="progress progress-sm mb-0">
                                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div>40%</div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <p class="mb-0 text-primary">In Progress</p>
                                          <p class="text-fade mb-0">117 User</p>
                                      </div>
                                  </div>
                                  <div class="mb-25">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="w-p85">
                                              <div class="progress progress-sm mb-0">
                                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div>20%</div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <p class="mb-0 text-primary">Completed</p>
                                          <p class="text-fade mb-0">74 User</p>
                                      </div>
                                  </div>
                                  <div class="mb-25">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="w-p85">
                                              <div class="progress progress-sm mb-0">
                                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div>18%</div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <p class="mb-0 text-primary">Inactive</p>
                                          <p class="text-fade mb-0">58 User</p>
                                      </div>
                                  </div>
                                  <div class="mb-25">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="w-p85">
                                              <div class="progress progress-sm mb-0">
                                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div>07%</div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <p class="mb-0 text-primary">Expeired</p>
                                          <p class="text-fade mb-0">11 User</p>
                                      </div>
                                  </div>
                                  <div class="mb-25">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="w-p85">
                                              <div class="progress progress-sm mb-0">
                                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div>40%</div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <p class="mb-0 text-primary">In Progress</p>
                                          <p class="text-fade mb-0">117 User</p>
                                      </div>
                                  </div>
                                  <div class="mb-20">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="w-p85">
                                              <div class="progress progress-sm mb-0">
                                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <div>20%</div>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between">
                                          <p class="mb-0 text-primary">Completed</p>
                                          <p class="text-fade mb-0">74 User</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-7 col-lg-6 col-12">
                          <div class="box bg-transparent no-shadow mb-30">
                              <div class="box-header no-border pb-0">
                                  <h3 class="box-title">Upcoming Lessons</h3>
                                  <ul class="box-controls pull-right d-md-flex d-none">
                                    <li>
                                      <a href="course.html" class="btn btn-primary-light px-10 base-font">View All</a>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="box mb-15 pull-up">
                              <div class="box-body">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <div class="me-15 bg-warning h-50 w-50 l-h-68 rounded text-center">
                                              <span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
                                          </div>
                                          <div class="d-flex flex-column fw-500">
                                              <a href="course.html" class="text-dark hover-primary mb-1 fs-16">Informatic Course</a>
                                              <span class="text-fade">Nil Yeager, 19 April</span>
                                          </div>
                                      </div>
                                      <a href="course.html">
                                          <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="box mb-15 pull-up">
                              <div class="box-body">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <div class="me-15 bg-primary h-50 w-50 l-h-68 rounded text-center">
                                              <span class="icon-Mail fs-24"></span>
                                          </div>
                                          <div class="d-flex flex-column fw-500">
                                              <a href="course.html" class="text-dark hover-primary mb-1 fs-16">Live Drawing</a>
                                              <span class="text-fade">Micak Doe, 12 June</span>
                                          </div>
                                      </div>
                                      <a href="course.html">
                                          <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="box mb-15 pull-up">
                              <div class="box-body">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <div class="me-15 bg-danger h-50 w-50 l-h-68 rounded text-center">
                                              <span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
                                          </div>
                                          <div class="d-flex flex-column fw-500">
                                              <a href="course.html" class="text-dark hover-primary mb-1 fs-16">Contemporary Art</a>
                                              <span class="text-fade">Potar doe, 27 July</span>
                                          </div>
                                      </div>
                                      <a href="course.html">
                                          <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="box mb-15 pull-up">
                              <div class="box-body">
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center">
                                          <div class="me-15 bg-info h-50 w-50 l-h-68 rounded text-center">
                                              <span class="icon-Mail fs-24"></span>
                                          </div>
                                          <div class="d-flex flex-column fw-500">
                                              <a href="course.html" class="text-dark hover-info mb-1 fs-16">Live Drawing</a>
                                              <span class="text-fade">Micak Doe, 12 June</span>
                                          </div>
                                      </div>
                                      <a href="course.html">
                                          <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-12">
                  <div class="box">
                      <div class="box-header no-border">
                          <h3 class="box-title">Notice board</h3>
                      </div>
                      <div class="box-body p-0">
                          <div class="act-div">
                            <div class="media-list media-list-hover">
                              <div class="media bar-0">
                                <span class="avatar avatar-lg bg-primary-light rounded"><i class="fa fa-user"></i></span>
                                <div class="media-body">
                                  <p class="d-flex align-items-center justify-content-between">
                                    <a class="hover-success fs-16" href="#">New Teacher</a>
                                    <span class="text-fade fs-12">Just Now</span>
                                  </p>
                                  <p class="text-fade">It is a long established fact that a reader will be<span class="d-xxxl-inline-block d-none"> distracted by the readable</span>...</p>
                                </div>
                              </div>

                              <div class="media bar-0">
                                <span class="avatar avatar-lg bg-danger-light rounded"><i class="fa fa-money"></i></span>
                                <div class="media-body">
                                  <p class="d-flex align-items-center justify-content-between">
                                    <a class="hover-success fs-16" href="#">New Fees Structure</a>
                                    <span class="text-fade fs-12">Today</span>
                                  </p>
                                  <p class="text-fade">It is a long established fact that a reader will be<span class="d-xxxl-inline-block d-none"> distracted by the readable</span>...</p>
                                </div>
                              </div>

                              <div class="media bar-0">
                               <span class="avatar avatar-lg bg-success-light rounded"><i class="fa fa-book"></i></span>
                                <div class="media-body">
                                  <p class="d-flex align-items-center justify-content-between">
                                    <a class="hover-success fs-16" href="#">Updated Syllabus</a>
                                    <span class="text-fade fs-12">17 Dec 2020</span>
                                  </p>
                                  <p class="text-fade">It is a long established fact that a reader will be<span class="d-xxxl-inline-block d-none"> distracted by the readable</span>...</p>
                                </div>
                              </div>

                              <div class="media bar-0">
                                <span class="avatar avatar-lg bg-info-light rounded"><i class="fa fa-graduation-cap"></i></span>
                                <div class="media-body">
                                  <p class="d-flex align-items-center justify-content-between">
                                    <a class="hover-success fs-16" href="#">New Course</a>
                                    <span class="text-fade fs-12">27 Oct 2020</span>
                                  </p>
                                  <p class="text-fade">It is a long established fact that a reader will be<span class="d-xxxl-inline-block d-none"> distracted by the readable</span>...</p>
                                </div>
                              </div> --}}

                              {{-- <div class="media bar-0">
                                <span class="avatar avatar-lg bg-danger-light rounded"><i class="fa fa-money"></i></span>
                                <div class="media-body">
                                  <p class="d-flex align-items-center justify-content-between">
                                    <a class="hover-success fs-16" href="#">New Fees Structure</a>
                                    <span class="text-fade fs-12">Today</span>
                                  </p>
                                  <p class="text-fade">It is a long established fact that a reader will be<span class="d-xxxl-inline-block d-none"> distracted by the readable</span>...</p>
                                </div>
                              </div> --}}

                            {{-- </div>
                          </div>
                      </div> --}}
                      {{-- <div class="box-footer text-center p-20">
                          <a href="extra_taskboard.html" class="btn w-p100 btn-primary-light p-5">View all</a>
                      </div> --}}
                  </div>
                </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection
