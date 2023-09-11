<?php
session_start();
// if (isset($_GET['param'])) {
//     echo $_GET['param'];
// }
include '../layout/admin-header.php';
include 'task-controller.php';
include 'project-controller.php';
include 'add-task.php';


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
                                    <h5>Your Task</h5>
                                    <div class='d-flex flex-wrap align-items-center'>
                                        <div class='dropdown dropdown-project mr-3'>
                                            <div class='dropdown-toggle' id='dropdownMenuButton03'
                                                data-toggle='dropdown'>
                                                <div class='btn bg-body'><span class='h6'>Project :</span> List Of
                                                    Project<i class='ri-arrow-down-s-line ml-2 mr-0'></i></div>
                                            </div>
                                            <?php
                                            if (isset($_SESSION['project_rows'])) {
                                                $projectRows = $_SESSION['project_rows'];

                                                echo '<div class="dropdown">
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton03">';

                                                foreach ($projectRows as $row) {
                                                    echo '<a class="dropdown-item" href="#">' . $row['p_name'] . '</a>';
                                                }
                                                echo '</div>
        </div>';
                                            }
                                            ?>



                                        </div>
                                        <a href='#' class='btn btn-primary' data-target='#new-task-modal'
                                            data-toggle='modal'>New Task</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-12'>
                            <div class='card'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <?php
                                        if (isset($_SESSION['task_rows'])) {
                                            $taskRows = $_SESSION['task_rows'];
                                            $inc = 1; //counter variable to increment the number of tasks
                                            foreach ($taskRows as $row) {

                                                echo " <div id='card-onclick" . $inc . "' data-toggle='collapse' data-target='#collapseEdit" . $inc . "' class='col-lg-12 toggle-collapse'>
                                <div class='card card-widget task-card'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                                <div class='custom-control custom-task custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck01'>
                                                    <label class='custom-control-label' for='customCheck01'></label>
                                                </div>
                                                <div >
                                                    <h5 class='mb-2'>" . $row['task_name'] . "</h5>
                                                  
                                                </div>
                                            </div>
                                            <!-- <div class='media align-items-center mt-md-0 mt-3'>
                                                <a href='#' class='btn bg-secondary-light mr-3'>Design</a>
                                                <a class='btn bg-secondary-light' data-toggle='collapse' href='#collapseEdit1' role='button' aria-expanded='false' aria-controls='collapseEdit1'><i class='ri-edit-box-line m-0'></i></a>
                                            </div> -->
                                        </div>  
                                    </div>
                                </div>                                                                                                        
                                <div class='collapse' id='collapseEdit" . $inc . "'>                                            
                                    <div class='card card-list task-card'>
                                        <div class='card-body'>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText2' class='h5'>Task Name</label>
                                                                <div class='form-group mb-3 position-relative'>
                                                                <input type='text' class='form-control bg-white' placeholder='<Load Task Name from DB>'>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText3' class='h5'>Task Duration</label>
                                                                <input type='text' class='form-control bg-white' placeholder='<Load Task Duration from DB>'>
                                                            </div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-12'>                                                        
                                                            <h5 class='mb-2'>Description</h5>
                                                            <p class='mb-0'>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. [Load from DB]</p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group mb-0'>
                                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                                <div class='custom-file'>
                                                    <input type='file' class='custom-file-input' id='inputGroupFile001'>
                                                    <label class='custom-file-label' for='inputGroupFile001'>Upload media</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>      
                            </div>";
                                                $inc++;
                                            }
                                        } ?>
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
                        <form action="add-task.php" method="post" enctype="multipart/form-data">
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <div class='form-group mb-3'>
                                        <label for='exampleInputText02' class='h5'>Task Name</label>
                                        <input type='text' class='form-control' id='exampleInputText02' name='task_name'
                                            placeholder='Enter task Name'>
                                        <a href='#' class='task-edit text-body'><i class='ri-edit-box-line'></i></a>
                                    </div>
                                </div>
                                <div class='col-lg-4'>
                                    <div class='form-group mb-3'>
                                        <label for='exampleInputText2' class='h5'>Assigned to</label>
                                        <select name='assigned_to' class='selectpicker form-control' data-style='py-0'>
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
                                        <input type='date' name='due_date' class='form-control' id='exampleInputText05'
                                            value=''>
                                    </div>
                                </div>
                                <div class='col-lg-4'>
                                    <div class='form-group mb-3'>
                                        <label for='exampleInputText2' class='h5'>Category</label>
                                        <select name='category' class='selectpicker form-control' data-style='py-0'>
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
                                        <textarea class='form-control' name='description' id='exampleInputText040'
                                            rows='2'></textarea>
                                    </div>
                                </div>
                                <!-- <div class='col-lg-12'>
                                <div class='form-group mb-3'>
                                    <label for='exampleInputText005' class='h5'>Checklist</label>
                                    <input type='text' class='form-control' id='exampleInputText005'
                                        placeholder='Add List'>
                                </div>
                            </div> -->
                                <div class='col-lg-12'>
                                    <div class='form-group mb-0'>
                                        <label for='exampleInputText01' class='h5'>Attachments</label>
                                        <div class='custom-file'>
                                            <input type='file' class='custom-file-input' name='attached'
                                                id='inputGroupFile003'>
                                            <label class='custom-file-label' for='inputGroupFile003'>Upload
                                                media</label>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-lg-12'>
                                    <div class='d-flex flex-wrap align-items-ceter justify-content-center mt-4'>
                                        <!-- <div class='btn btn-primary mr-3' data-dismiss='modal'>Save</div>
                                    <div class='btn btn-primary' data-dismiss='modal'>Cancel</div> -->
                                        <input type="submit" name='save' class='btn btn-primary mr-3' value='Save'>
                                    </div>
                                </div>
                            </div>
                        </form>
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

        <?php
        $inc = 1; // Counter variable to increment the number of tasks
        $taskRows = $_SESSION['task_rows'];

        foreach ($taskRows as $row) {
            echo "
    <script>
        const task" . $inc . " = document.getElementById('card-onclick" . $inc . "');
        
        task" . $inc . ".addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            toggleCollapse('#collapseEdit" . $inc . "');
        });

        function toggleCollapse(targetId) {
            const target = $(targetId);
            if (target.hasClass('show')) {
                target.collapse('hide'); // Collapse if already open
            } else {
                target.collapse('show'); // Open if closed
                scrollToTarget(targetId);
            }
        }

        function scrollToTarget(targetId) {
            $('html, body').animate({
                scrollTop: $(targetId).offset().top
            }, 500); // Adjust the animation duration as needed
        }
    </script>";
            $inc++;
        }
        ?>



        <!-- JavaScript code -->
        <script>
            // Function to handle the task click event
            function handleTaskClick(event, inc) {
                event.preventDefault(); // Prevent the default behavior (page jump)

                // Toggle the collapse manually
                toggleCollapse(inc);
            }

            // Function to toggle the collapse manually
            function toggleCollapse(inc) {
                const targetId = '#collapseEdit' + inc;
                const target = $(targetId);
                if (target.hasClass('show')) {
                    target.collapse('hide');
                } else {
                    target.collapse('show');
                }
            }

            // Prevent Bootstrap collapse from toggling when interacting with elements inside the collapsed div
            const collapseElements = document.querySelectorAll('.collapse');
            collapseElements.forEach(function (element) {
                element.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
            });
        </script>

</body>

</html>