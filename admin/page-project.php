<?php
include '../layout/admin-header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Project Mentor</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      
          
            <div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>Your Projects</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="dropdown status-dropdown mr-3">
                                    <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                                    <div class="btn bg-body"><span class="h6">Status :</span> In Progress<i class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                        <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>In Progress</a>
                                        <a class="dropdown-item" href="#"><i class="ri-attachment-line mr-2"></i>Priority</a>
                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Category</a> 
                                    </div>
                                </div>
                                <div class="list-grid-toggle d-flex align-items-center mr-3">
                                    <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                        <div class="grid-icon mr-3">
                                            <svg width="20" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

                                            <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-toggle-extra="tab" data-target-extra="#list">
                                        <div class="grid-icon">
                                            <svg  width="20" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-3 border-left btn-new">
                                    <a href="#" class="btn btn-primary" data-target="#new-project-modal" data-toggle="modal">New Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Theme development</h5>
                            <p class="mb-3">Preparing framework of block-based WordPress Theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-primary link-shadow">High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-02" class="circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Vuetify Dashboard in Admin</h5>
                            <p class="mb-3">Start development server and check Vue project in browser.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/04.jpg" alt="">
                                    </a>                                                
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/08.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-secondary link-shadow">Medium</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-03" class="circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Wordpress Dashboard Plugins</h5>
                            <p class="mb-3">Customize your WordPress with smart WordPress plugins.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/01.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/03.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-warning link-shadow">Low</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-04" class="circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Hotel Management App</h5>
                            <p class="mb-3">Build a Cloud-based Hotel Management Theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-success link-shadow">High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-05" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Video Streaming Theme</h5>
                            <p class="mb-3">Launch OTT and media streaming theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-primary link-shadow">High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-06" class="circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Medical Clinic Theme</h5>
                            <p class="mb-3">Hospital and private clinic doctor's theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/04.jpg" alt="">
                                    </a>                                                
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/08.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-secondary link-shadow">Medium</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-07" class="circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Social Media Dashboard</h5>
                            <p class="mb-3">Leverage data with Social Media Dashboard.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/01.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/03.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-warning link-shadow">Low</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-08" class="circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Cloud Service Theme</h5>
                            <p class="mb-3">Exclusively for cloud-based/ Startup theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-success link-shadow">High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-09" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Automotive WordPress Theme</h5>
                            <p class="mb-3">Dealership-based business WordPress theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-primary link-shadow">High</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-10" class="circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Online Education Template</h5>
                            <p class="mb-3">Remote students and teachers dashboard.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/04.jpg" alt="">
                                    </a>                                                
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/08.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-secondary link-shadow">Medium</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-11" class="circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">Blog/Magazine Theme</h5>
                            <p class="mb-3">Launch visually appealing Blog theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/01.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/03.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-warning link-shadow">Low</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div id="circle-progress-12" class="circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                <i class="ri-star-fill m-0 text-warning"></i>
                            </div>
                            <h5 class="mb-1">XAMIN: AI Theme</h5>
                            <p class="mb-3">Artificial Intelligence inspired WordPress theme.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                        <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                    </a>
                                </div>
                                <a class="btn btn-white text-success link-shadow">High</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-13" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Theme development</h5>
                                            <p class="mb-0">Preparing framework of block-based WordPress Theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-primary link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-14" class="circle-progress-01 circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Theme development</h5>
                                            <p class="mb-0">Start development server and check Vue project in browser.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/04.jpg" alt="">
                                        </a>                                                
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/08.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-secondary link-shadow">Medium</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-15" class="circle-progress-01 circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Vuetify Dashboard</h5>
                                            <p class="mb-0">Customize your WordPress with smart WordPress plugins.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/01.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/03.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-warning link-shadow">Low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-16" class="circle-progress-01 circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">WordPress Dashboard</h5>
                                            <p class="mb-0">Build a Cloud-based Hotel Management Theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-success link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-17" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Hotel Management App</h5>
                                            <p class="mb-0">Build a Cloud-based Hotel Management Theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-primary link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-18" class="circle-progress-01 circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Video Streaming Theme</h5>
                                            <p class="mb-0">Launch OTT and media streaming theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/04.jpg" alt="">
                                        </a>                                                
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/08.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-secondary link-shadow">Medium</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-19" class="circle-progress-01 circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Medical Clinic Theme</h5>
                                            <p class="mb-0">Hospital and private clinic doctor's theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/01.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/03.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-warning link-shadow">Low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-20" class="circle-progress-01 circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Social Media Dashboard</h5>
                                            <p class="mb-0">Leverage data with Social Media Dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-success link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-21" class="circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="25" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Cloud Service Theme</h5>
                                            <p class="mb-0">Exclusively for cloud-based/ Startup theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-primary link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-22" class="circle-progress-01 circle-progress circle-progress-secondary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Automotive WordPress</h5>
                                            <p class="mb-0">Dealership-based business WordPress theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/04.jpg" alt="">
                                        </a>                                                
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/08.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-secondary link-shadow">Medium</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-23" class="circle-progress-01 circle-progress circle-progress-warning" data-min-value="0" data-max-value="100" data-value="15" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Online Education</h5>
                                            <p class="mb-0">Remote students and teachers dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/01.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/02.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/03.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-warning link-shadow">Low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div id="circle-progress-24" class="circle-progress-01 circle-progress circle-progress-success" data-min-value="0" data-max-value="100" data-value="40" data-type="percent"></div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">Blog/Magazine Theme</h5>
                                            <p class="mb-0">Launch visually appealing Blog theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/05.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/06.jpg" alt="">
                                        </a>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="../../assets/images/user/07.jpg" alt="">
                                        </a>
                                    </div>
                                    <a class="btn btn-white text-success  link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->
    <div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Project</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Project Name*</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Project Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Categories *</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Category</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText004" class="h5">Due Dates*</label>
                                <input type="date" class="form-control" id="exampleInputText004" value="">
                            </div>                        
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText07" class="h5">Assign Members*</label>
                                <input type="text" class="form-control" id="exampleInputText07">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText02" class="h5">Task Name</label>
                                <input type="text" class="form-control" id="exampleInputText02" placeholder="Enter task Name">
                                <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Assigned to</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Memebers</option>
                                    <option>Kianna Septimus</option>
                                    <option>Jaxson Herwitz</option>
                                    <option>Ryan Schleifer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="exampleInputText05" class="h5">Due Dates*</label>
                                <input type="date" class="form-control" id="exampleInputText05" value="">
                            </div>                        
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Category</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Design</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText040" class="h5">Description</label>
                                <textarea class="form-control" id="exampleInputText040" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText005" class="h5">Checklist</label>
                                <input type="text" class="form-control" id="exampleInputText005" placeholder="Add List">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <label for="exampleInputText01" class="h5">Attachments</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile003">
                                    <label class="custom-file-label" for="inputGroupFile003">Upload media</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-user-modal">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle02">New User</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3 custom-file-small">
                                <label for="exampleInputText01" class="h5">Upload Profile Picture</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputText2" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText04" class="h5">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputText04" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText006" class="h5">Email</label>
                                <input type="text" class="form-control" id="exampleInputText006" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Type</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Type</option>
                                    <option>Trainee</option>
                                    <option>Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Role</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Role</option>
                                    <option>Designer</option>
                                    <option>Developer</option>
                                    <option>Manager</option>
                                    <option>BDE</option>
                                    <option>SEO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-create-modal">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle03">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText03" class="h5">Task Name</label>
                                <input type="text" class="form-control" id="exampleInputText03" placeholder="Enter task Name">
                                <a href="#" class="task-edit text-body"><i class="ri-edit-box-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Assigned to</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Memebers</option>
                                    <option>Kianna Septimus</option>
                                    <option>Jaxson Herwitz</option>
                                    <option>Ryan Schleifer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Project Name</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Enter your project Name</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Dashboard Templates</option>
                                    <option>Wordpress Themes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText40" class="h5">Description</label>
                                <textarea class="form-control" id="exampleInputText40" rows="2" placeholder="Textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText8" class="h5">Checklist</label>
                                <input type="text" class="form-control" id="exampleInputText8" placeholder="Add List">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <label for="exampleInputText01" class="h5">Attachments</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Upload media</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">2023©</span> <a href="#" class="">Project Mentor</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></©>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    
    <script src="../assets/vendor/moment.min.js"></script>
  </body>
</html>