<?php
session_start();
include '../layout/super-admin-header.php';
include 'experts-controller.php';
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
                        if (isset($_SESSION['expert_rows'])) {
                            // Access the stored array of rows
                            $expertRows = $_SESSION['expert_rows'];

                            if (!empty($expertRows)) {
                                foreach ($expertRows as $row) {

                                    echo "<div class='col-lg-4 col-md-6'>
                    <div class='card-transparent card-block card-stretch card-height'>
                        <div class='card-body text-center p-0'>                            
                            <div class='item'>
                                <div class='odr-img'>
                                    <img src='" . ($row['expert_pfp'] != '' ? 'data:image/jpeg;base64,' . base64_encode($row['expert_pfp']) : '../assets/images/user/01.jpg') . "' class='img-fluid rounded-circle avatar-90 m-auto " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "' alt='Image'>
                                </div>                        
                                <div class='odr-content rounded '>                                          
                                    <h4 class='mb-2'>" . $row['first_name'] . " " . $row['last_name'] . "</h4>
                                    <p class='mb-3'>" . $row['email'] . "</p>
                                    <ul class='list-unstyled mb-3 '>
                                        <li class='bg-secondary-light rounded-circle iq-card-icon-small mr-4 " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'><i class='ri-mail-open-line m-0'></i></li>
                                        <li class='bg-primary-light rounded-circle iq-card-icon-small mr-4 " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'><i class='ri-chat-3-line m-0'></i></li>
                                        <li class='bg-success-light rounded-circle iq-card-icon-small " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'><i class='ri-phone-line m-0'></i></li>
                                    </ul>                                    
                                    <div class='pt-3 border-top '>
                                        <a href='#' class='btn btn-primary " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'>Message</a>
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
                            <form action="expert-status-controller.php" method="POST">

                                <?php
                                if (isset($_SESSION['expert_rows'])) {
                                    // Access the stored array of rows
                                    $expertRows = $_SESSION['expert_rows'];

                                    if (!empty($expertRows)) {
                                        foreach ($expertRows as $row) {

                                            echo "<tr>
                                    <td>
                                        <div class='media align-items-center'>
                                            <img src='" . ($row['expert_pfp'] != '' ? 'data:image/jpeg;base64,' . base64_encode($row['expert_pfp']) : '../assets/images/user/01.jpg') . "'
                                                class='img-fluid rounded-circle avatar-40 " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "' alt='image'>
                                            <h5 class='ml-3'>" . $row['first_name'] . " " . $row['last_name'] . "</h5>
                                        </div>
                                    </td>
                                    <td>" . $row['email'] . "</td>
                                    <td>
                                        <div class='media align-items-center'>
                                            <div class='bg-secondary-light rounded-circle iq-card-icon-small mr-3 " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'><i
                                                    class='ri-mail-open-line m-0'></i></div>
                                            <div class='bg-primary-light rounded-circle iq-card-icon-small mr-3 " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'><i
                                                    class='ri-chat-3-line m-0'></i></div>
                                            <div class='bg-success-light rounded-circle iq-card-icon-small " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'><i
                                                    class='ri-phone-line m-0'></i></div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href='#' class='btn btn-primary " . ($row['expert_status'] == 0 ? 'disabled-card' : '') . "'>Message</a>
                                    </td>
                                    <td>
                                    <button type='submit' name='submitButton' id='submitButton' class='btn btn-" . ($row['expert_status'] == 0 ? 'success' : 'secondary') . "' value='" . $row['expert_id'] . "'>
                                    " . ($row['expert_status'] == 0 ? 'Activate' : 'Deactivate') . "
                                </button>                                        </td>
                                    <td>
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
    <div class='modal fade' role='dialog' aria-modal='true' id='new-project-modal'>
        <div class='modal-dialog  modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header d-block text-center pb-3 border-bttom'>
                    <h3 class='modal-title' id='exampleModalCenterTitle01'>New Project</h3>
                </div>
                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText01' class='h5'>Project Name*</label>
                                <input type='text' class='form-control' id='exampleInputText01'
                                    placeholder='Project Name'>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Categories *</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Category</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText004' class='h5'>Due Dates*</label>
                                <input type='date' class='form-control' id='exampleInputText004' value=''>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText07' class='h5'>Assign Members*</label>
                                <input type='text' class='form-control' id='exampleInputText07'>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='d-flex flex-wrap align-items-ceter justify-content-center mt-2'>
                                <div class='btn btn-primary mr-3' data-dismiss='modal'>Save</div>
                                <div class='btn btn-primary' data-dismiss='modal'>Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='modal fade bd-example-modal-lg' role='dialog' aria-modal='true' id='new-task-modal'>
        <div class='modal-dialog  modal-dialog-centered modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header d-block text-center pb-3 border-bttom'>
                    <h3 class='modal-title' id='exampleModalCenterTitle'>New Task</h3>
                </div>
                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText02' class='h5'>Task Name</label>
                                <input type='text' class='form-control' id='exampleInputText02'
                                    placeholder='Enter task Name'>
                                <a href='#' class='task-edit text-body'><i class='ri-edit-box-line'></i></a>
                            </div>
                        </div>
                        <div class='col-lg-4'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Assigned to</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Memebers</option>
                                    <option>Kianna Septimus</option>
                                    <option>Jaxson Herwitz</option>
                                    <option>Ryan Schleifer</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-4'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText05' class='h5'>Due Dates*</label>
                                <input type='date' class='form-control' id='exampleInputText05' value=''>
                            </div>
                        </div>
                        <div class='col-lg-4'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Category</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Design</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText040' class='h5'>Description</label>
                                <textarea class='form-control' id='exampleInputText040' rows='2'></textarea>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText005' class='h5'>Checklist</label>
                                <input type='text' class='form-control' id='exampleInputText005' placeholder='Add List'>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-0'>
                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                <div class='custom-file'>
                                    <input type='file' class='custom-file-input' id='inputGroupFile003'>
                                    <label class='custom-file-label' for='inputGroupFile003'>Upload media</label>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='d-flex flex-wrap align-items-ceter justify-content-center mt-4'>
                                <div class='btn btn-primary mr-3' data-dismiss='modal'>Save</div>
                                <div class='btn btn-primary' data-dismiss='modal'>Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='modal fade bd-example-modal-lg' role='dialog' aria-modal='true' id='new-user-modal'>
        <div class='modal-dialog  modal-dialog-centered modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header d-block text-center pb-3 border-bttom'>
                    <h3 class='modal-title' id='exampleModalCenterTitle02'>New User</h3>
                </div>
                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3 custom-file-small'>
                                <label for='exampleInputText01' class='h5'>Upload Profile Picture</label>
                                <div class='custom-file'>
                                    <input type='file' class='custom-file-input' id='inputGroupFile02'>
                                    <label class='custom-file-label' for='inputGroupFile02'>Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Full Name</label>
                                <input type='text' class='form-control' id='exampleInputText2'
                                    placeholder='Enter your full name'>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText04' class='h5'>Phone Number</label>
                                <input type='text' class='form-control' id='exampleInputText04'
                                    placeholder='Enter phone number'>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText006' class='h5'>Email</label>
                                <input type='text' class='form-control' id='exampleInputText006'
                                    placeholder='Enter your Email'>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Type</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Type</option>
                                    <option>Trainee</option>
                                    <option>Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Role</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Role</option>
                                    <option>Designer</option>
                                    <option>Developer</option>
                                    <option>Manager</option>
                                    <option>BDE</option>
                                    <option>SEO</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='d-flex flex-wrap align-items-ceter justify-content-center mt-2'>
                                <div class='btn btn-primary mr-3' data-dismiss='modal'>Save</div>
                                <div class='btn btn-primary' data-dismiss='modal'>Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='modal fade bd-example-modal-lg' role='dialog' aria-modal='true' id='new-create-modal'>
        <div class='modal-dialog  modal-dialog-centered modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header d-block text-center pb-3 border-bttom'>
                    <h3 class='modal-title' id='exampleModalCenterTitle03'>New Task</h3>
                </div>
                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText03' class='h5'>Task Name</label>
                                <input type='text' class='form-control' id='exampleInputText03'
                                    placeholder='Enter task Name'>
                                <a href='#' class='task-edit text-body'><i class='ri-edit-box-line'></i></a>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Assigned to</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Memebers</option>
                                    <option>Kianna Septimus</option>
                                    <option>Jaxson Herwitz</option>
                                    <option>Ryan Schleifer</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-6'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText2' class='h5'>Project Name</label>
                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                    <option>Enter your project Name</option>
                                    <option>Ui/Ux Design</option>
                                    <option>Dashboard Templates</option>
                                    <option>Wordpress Themes</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText40' class='h5'>Description</label>
                                <textarea class='form-control' id='exampleInputText40' rows='2'
                                    placeholder='Textarea'></textarea>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText8' class='h5'>Checklist</label>
                                <input type='text' class='form-control' id='exampleInputText8' placeholder='Add List'>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='form-group mb-0'>
                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                <div class='custom-file'>
                                    <input type='file' class='custom-file-input' id='inputGroupFile01'>
                                    <label class='custom-file-label' for='inputGroupFile01'>Upload media</label>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='d-flex flex-wrap align-items-ceter justify-content-center mt-4'>
                                <div class='btn btn-primary mr-3' data-dismiss='modal'>Save</div>
                                <div class='btn btn-primary' data-dismiss='modal'>Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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