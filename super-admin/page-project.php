<?php
session_start();
include '../layout/super-admin-header.php';
include 'admins-controller.php';
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Project Mentor</title>

    <!-- Favicon -->
    <link rel='shortcut icon' href='../assets/images/favicon.ico' />
    <link rel='stylesheet' href='../assets/css/backend-plugin.min.css'>
    <link rel='stylesheet' href='../assets/css/backend.css?v=1.0.0'>
    <link rel='stylesheet' href='../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css'>
    <link rel='stylesheet' href='../assets/vendor/remixicon/fonts/remixicon.css'>

    <link rel='stylesheet' href='../assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css'>
    <link rel='stylesheet' href='../assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css'>
    <link rel='stylesheet' href='../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css'>

    <style>
        .disabled-card {
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent gray background */
            pointer-events: none;
            /* Disable interactions with the div */
            filter: grayscale(100%);
            /* Grayscale effect to visually disable content */
        }

        .disabled-card-allow-pointer {
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent gray background */
            filter: grayscale(100%);
            /* Grayscale effect to visually disable content */
        }
    </style>
</head>

<body class='  '>
    <!-- loader Start -->
    <div id='loading'>
        <div id='loading-center'>
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class='wrapper'>



        <div class='content-page'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <div
                                    class='d-flex flex-wrap align-items-center justify-content-between breadcrumb-content'>
                                    <h5>Projects Administrators</h5>
                                    <div class='d-flex align-items-center'>
                                        <div class='list-grid-toggle d-flex align-items-center mr-3'>
                                            <div data-toggle-extra='tab' data-target-extra='#grid' class='active'>
                                                <div class='grid-icon mr-3'>
                                                    <svg width='20' height='40' xmlns='http://www.w3.org/2000/svg'
                                                        viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                                        stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                                                        <rect x='3' y='3' width='7' height='7'></rect>
                                                        <rect x='14' y='3' width='7' height='7'></rect>
                                                        <rect x='14' y='14' width='7' height='7'></rect>
                                                        <rect x='3' y='14' width='7' height='7'></rect>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div data-toggle-extra='tab' data-target-extra='#list'>
                                                <div class='grid-icon'>
                                                    <svg width='20' height='40' xmlns='http://www.w3.org/2000/svg'
                                                        viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                                        stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                                                        <line x1='21' y1='10' x2='3' y2='10'></line>
                                                        <line x1='21' y1='6' x2='3' y2='6'></line>
                                                        <line x1='21' y1='14' x2='3' y2='14'></line>
                                                        <line x1='21' y1='18' x2='3' y2='18'></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='grid' class='item-content animate__animated animate__fadeIn active'
                    data-toggle-extra='tab-content'>
                    <div class='row'>

                        <?php
                        if (isset($_SESSION['admin_rows'])) {
                            // Access the stored array of rows
                            $adminRows = $_SESSION['admin_rows'];

                            if (!empty($adminRows)) {
                                foreach ($adminRows as $row) {

                                    echo "<div class='col-lg-4 col-md-6'>
                    <div class='card-transparent card-block card-stretch card-height'>
                        <div class='card-body text-center p-0'>                            
                            <div class='item'>
                                <div class='odr-img'>
                                    <img src='../assets/images/user/01.jpg' class='img-fluid rounded-circle avatar-90 m-auto " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "' alt='image'>
                                </div>                        
                                <div class='odr-content rounded '>                                          
                                    <h4 class='mb-2'>" . $row['first_name'] . " " . $row['last_name'] . "</h4>
                                    <p class='mb-3'>" . $row['email'] . "</p>
                                    <ul class='list-unstyled mb-3 '>
                                        <li class='bg-secondary-light rounded-circle iq-card-icon-small mr-4 " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'><i class='ri-mail-open-line m-0'></i></li>
                                        <li class='bg-primary-light rounded-circle iq-card-icon-small mr-4 " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'><i class='ri-chat-3-line m-0'></i></li>
                                        <li class='bg-success-light rounded-circle iq-card-icon-small " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'><i class='ri-phone-line m-0'></i></li>
                                    </ul>                                    
                                    <div class='pt-3 border-top '>
                                        <a href='#' class='btn btn-primary " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'>Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div id='list' class='item-content animate__animated animate__fadeIn' data-toggle-extra='tab-content'>
                    <div class='table-responsive rounded bg-white mb-4'>
                        <table class='table mb-0 table-borderless tbl-server-info'>
                            <tbody>
                                <form action="admin-status-controller.php" method="POST">
                                    <?php
                                    if (isset($_SESSION['admin_rows'])) {
                                        // Access the stored array of rows
                                        $adminRows = $_SESSION['admin_rows'];

                                        if (!empty($adminRows)) {
                                            foreach ($adminRows as $row) {

                                                echo "<tr>
                                                <td>
                                                    <div class='media align-items-center'>
                                                        <img src='../assets/images/user/01.jpg'
                                                            class='img-fluid rounded-circle avatar-40 " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "' alt='image'>
                                                        <h5 class='ml-3'>" . $row['first_name'] . " " . $row['last_name'] . "</h5>
                                                    </div>
                                                </td>
                                                <td>" . $row['email'] . "</td>
                                                <td>
                                                    <div class='media align-items-center'>
                                                        <div class='bg-secondary-light rounded-circle iq-card-icon-small mr-3 " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'><i
                                                                class='ri-mail-open-line m-0'></i></div>
                                                        <div class='bg-primary-light rounded-circle iq-card-icon-small mr-3 " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'><i
                                                                class='ri-chat-3-line m-0'></i></div>
                                                        <div class='bg-success-light rounded-circle iq-card-icon-small " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'><i
                                                                class='ri-phone-line m-0'></i></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href='#' class='btn btn-primary " . ($row['admin_status'] == 0 ? 'disabled-card' : '') . "'>Message</a>
                                                </td>
                                                <td>
                                                    <button type='submit' name='submitButton' id='submitButton' class='btn btn-" . ($row['admin_status'] == 0 ? 'success' : 'secondary') . "' value='" . $row['admin_id'] . "'>
                                                        " . ($row['admin_status'] == 0 ? 'Activate' : 'Deactivate') . "
                                                    </button>                                    
                                                </td>
                                            </tr>";
                                            
                                            }
                                        }
                                    }
                                    ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
        </div>
    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->
    
    <footer class='iq-footer'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-6'>
                    <ul class='list-inline mb-0'>
                        <li class='list-inline-item'><a href='privacy-policy'>Privacy Policy</a></li>
                        <li class='list-inline-item'><a href='terms-of-service'>Terms of Use</a></li>
                    </ul>
                </div>
                <div class='col-lg-6 text-right'>
                    <span class='mr-1'>
                        <script>document.write(new Date().getFullYear())</script>©
                    </span> <a href='#' class=''>Webkit</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src='../assets/js/backend-bundle.min.js'></script>

    <!-- Table Treeview JavaScript -->
    <script src='../assets/js/table-treeview.js'></script>

    <!-- Chart Custom JavaScript -->
    <script src='../assets/js/customizer.js'></script>

    <!-- Chart Custom JavaScript -->
    <script async src='../assets/js/chart-custom.js'></script>
    <!-- Chart Custom JavaScript -->
    <script async src='../assets/js/slider.js'></script>

    <!-- app JavaScript -->
    <script src='../assets/js/app.js'></script>

    <script src='../assets/vendor/moment.min.js'></script>
</body>

</html>