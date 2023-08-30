<?php
session_start();

if (isset($_GET['param'])) {
    echo $_GET['param'];
}

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
    <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <?php include '../layout/super-admin-header.php'; ?>
        <?php include 'meetings-controller.php'; ?>

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-transparent card-block card-stretch card-height">
                            <div class="card-body p-0">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Overview Progress</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-inline p-0 mb-0">
                                            <li class="mb-1">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">UX / UI Design</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="iq-progress-bar bg-secondary-light">
                                                                <span class="bg-secondary iq-progress progress-1"
                                                                    data-percent="65"></span>
                                                            </div>
                                                            <span class="ml-3">65%</span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/07.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div> -->
                                                </div>
                                            </li>
                                            <li class="mb-1">
                                                <div class="d-flex align-items-center justify-content-between row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Development</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="iq-progress-bar bg-primary-light">
                                                                <span class="bg-primary iq-progress progress-1"
                                                                    data-percent="59"></span>
                                                            </div>
                                                            <span class="ml-3">59%</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <!-- <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/08.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/09.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/04.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Testing</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="iq-progress-bar bg-warning-light">
                                                                <span class="bg-warning iq-progress progress-1"
                                                                    data-percent="78"></span>
                                                            </div>
                                                            <span class="ml-3">78%</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <!-- <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/01.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/02.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/03.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3">
                                                                <div id="circle-progress-21"
                                                                    class="circle-progress-01 circle-progress circle-progress-primary"
                                                                    data-min-value="0" data-max-value="100"
                                                                    data-value="25" data-type="percent"></div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="mt-3 mt-md-0">
                                                                    <h5 class="mb-1">Cloud Service Theme</h5>
                                                                    <p class="mb-0">Exclusively for cloud-based/ Startup
                                                                        theme.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                        <!-- <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                        <a class="btn btn-white text-primary link-shadow mt-2">High</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3">
                                                                <div id="circle-progress-22"
                                                                    class="circle-progress-01 circle-progress circle-progress-secondary"
                                                                    data-min-value="0" data-max-value="100"
                                                                    data-value="30" data-type="percent"></div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="mt-3 mt-md-0">
                                                                    <h5 class="mb-1">Automotive WordPress</h5>
                                                                    <p class="mb-0">Dealership-based business WordPress
                                                                        theme.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                        <!-- <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/07.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/02.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/04.jpg" alt="">
                                                    </a>                                                
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/08.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                        <a
                                                            class="btn btn-white text-secondary link-shadow mt-2">Medium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3">
                                                                <div id="circle-progress-23"
                                                                    class="circle-progress-01 circle-progress circle-progress-warning"
                                                                    data-min-value="0" data-max-value="100"
                                                                    data-value="15" data-type="percent"></div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="mt-3 mt-md-0">
                                                                    <h5 class="mb-1">Online Education</h5>
                                                                    <p class="mb-0">Remote students and teachers
                                                                        dashboard.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                        <!-- <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/01.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/02.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/03.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                        <a class="btn btn-white text-warning link-shadow mt-2">Low</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-3">
                                                                <div id="circle-progress-24"
                                                                    class="circle-progress-01 circle-progress circle-progress-success"
                                                                    data-min-value="0" data-max-value="100"
                                                                    data-value="40" data-type="percent"></div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="mt-3 mt-md-0">
                                                                    <h5 class="mb-1">Blog/Magazine Theme</h5>
                                                                    <p class="mb-0">Launch visually appealing Blog
                                                                        theme.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                        <!-- <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/05.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/06.jpg" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="../assets/images/user/07.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                        <a class="btn btn-white text-success  link-shadow mt-2">High</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4">
                        <div class="card card-block card-stretch card-height p-1">
                            <div class="card-body">
                                <?php
                                if (isset($_SESSION['meeting_rows'])) {
                                    // Access the stored array of rows
                                    $meetingRows = $_SESSION['meeting_rows'];

                                    if (!empty($meetingRows)) {
                                        // Get the first row separately
                                        $firstRow = array_shift($meetingRows);

                                        // Display information for the first row
                                        echo "<div class='card card-body' style='background-color: #b8ffd0; background-image: linear-gradient(315deg, #afffca 0%, #bceeff 74%); border: 0;'>
                    <div class='d-flex align-items-center'>
                        <img src='https://download.logo.wine/logo/Google_Meet/Google_Meet-Logo.wine.png' width='70' alt=''>
                        <div class='pl-3 border-left fw-bold' style='border-color: black !important;'>
                            <h5 style='color: #000000;'>{$firstRow['meeting_title']}</h5>
                            <p class='mb-0' style='color: #000000; font-size: 90%'>" . date("F j, Y", strtotime($firstRow['meeting_date'])) . " @ " . date("g:i A", strtotime($firstRow['start_time'])) . "</p>
                        </div>
                    </div>
                    <div class='card py-1' style='position: relative; margin-top: 5%; margin-bottom: 0; text-align: center; background-color: #ffffff;'>
                        <a style='color: #000000; font-weight:700;font-size: 18px;' href='{$firstRow['meeting_link']}'>Join Meeting </a>
                    </div>
                </div>";

                                        // Loop through the rest of the rows and display them
                                        foreach ($meetingRows as $row) {
                                            echo "<div>
                        <h5>{$row['meeting_title']}</h5>
                        <p class='mb-3' style='margin-top: 1%;'>
                            <i class='las la-calendar-check mr-2'></i>" .
                                                date("F j, Y", strtotime($row['meeting_date'])) . " @ " .
                                                date("g:i A", strtotime($row['start_time'])) . "
                                                </p>
                                                <hr>
                                            </div>";
                                        }
                                    } else {
                                        echo "No meetings schedules :D";
                                    }
                                } else {
                                    echo "No meetings schedules :D";
                                }
                                ?>
                            </div>

                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="card-transparent mb-0">
                            <div class="card-header d-flex align-items-center justify-content-between p-0 pb-3">
                                <div class="header-title">
                                    <h4 class="card-title">Current Tasks</h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <div id="top-project-slick-arrow" class="slick-aerrow-block">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-unstyled row top-projects mb-0">
                                    <li class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-3">Hotel Management App UI Kit</h5>
                                                <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021
                                                </p>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <!-- <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="../assets/images/user/01.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="../assets/images/user/02.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div> -->
                                                    <div>
                                                        <a href="#" class="btn bg-secondary-light">Design</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-3">General Improvement in pages</h5>
                                                <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021
                                                </p>
                                                <div class="iq-progress-bar bg-info-light mb-4">
                                                    <span class="bg-info iq-progress progress-1" data-percent="65"
                                                        style="transition: width 2s ease 0s; width: 65%;"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <a href="#" class="btn bg-info-light">Testing</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-3">Product list view changes</h5>
                                                <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021
                                                </p>
                                                <div class="iq-progress-bar bg-success-light mb-4">
                                                    <span class="bg-success iq-progress progress-1" data-percent="65"
                                                        style="transition: width 2s ease 0s; width: 65%;"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <a href="#" class="btn bg-success-light">SEO</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-3">Add Multiple theme options</h5>
                                                <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021
                                                </p>
                                                <div class="iq-progress-bar bg-warning-light mb-4">
                                                    <span class="bg-warning iq-progress progress-1" data-percent="65"
                                                        style="transition: width 2s ease 0s; width: 65%;"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <!-- <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/01.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/02.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div> -->
                                                    <div>
                                                        <a href="#" class="btn bg-warning-light">Development</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="mb-3">Admin Panel Customization</h5>
                                                <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021
                                                </p>
                                                <div class="iq-progress-bar bg-primary-light mb-4">
                                                    <span class="bg-primary iq-progress progress-1"
                                                        data-percent="65"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <!-- <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/01.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/02.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/03.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="../assets/images/user/04.jpg" class="img-fluid avatar-40 rounded-circle" alt="">
                                                </a>
                                            </div> -->
                                                    <div>
                                                        <a href="#" class="btn bg-primary-light">Content</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
                                <input type="text" class="form-control" id="exampleInputText01"
                                    placeholder="Project Name">
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
    </div>
    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-task-modal">
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
                                <input type="text" class="form-control" id="exampleInputText02"
                                    placeholder="Enter task Name">
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
    </div>
    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-user-modal">
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
                                <input type="text" class="form-control" id="exampleInputText2"
                                    placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText04" class="h5">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputText04"
                                    placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText006" class="h5">Email</label>
                                <input type="text" class="form-control" id="exampleInputText006"
                                    placeholder="Enter your Email">
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
    </div>
    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="new-create-modal">
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
                                <input type="text" class="form-control" id="exampleInputText03"
                                    placeholder="Enter task Name">
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
                                <textarea class="form-control" id="exampleInputText40" rows="2"
                                    placeholder="Textarea"></textarea>
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
                    <span class="mr-1">
                        <script>document.write(new Date().getFullYear())</script>©
                    </span> <a href="#" class="">Webkit</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

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