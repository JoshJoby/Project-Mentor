<?php
 session_start();
// if (isset($_GET['param'])) {
//     echo $_GET['param'];
// }
include '../layout/student-header.php';
include 'query-controller.php';


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

<body class="  ">
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
                                    <h5>Your Queries</h5>
                                    <div class='d-flex flex-wrap align-items-center'>
                                        <a href='#' class='btn btn-primary' data-target='#new-query-modal'
                                            data-toggle='modal'>New Query</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <?php
                                    if (isset($_SESSION['query_rows'])) {
                                        $queryRows = $_SESSION['query_rows'];
                                        $inc=1;//counter variable to increment the number of querys
                                        foreach ($queryRows as $row) {
                                              
                                            echo " <div id='card-onclick".$inc."' data-toggle='collapse' data-target='#collapseEdit".$inc."' class='col-lg-12'>
                                <div class='card card-widget query-card'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                               
                                                <div >
                                                    <h5 class='mb-2'>".$row['query_id']."</h5>
                                                  
                                                </div>
                                            </div>
                                             <div class='media align-items-center mt-md-0 mt-3'>";
                                             if (empty($row['response'])) {
                                                 echo "<a href='#' class='btn mr-3'>pending</a>";
                                             } else {
                                                 echo "<a href='#' class='btn mr-3'>done</a>";
                                             }
                                         echo "
                                                
                                            </div> 
                                        </div>  
                                    </div>
                                </div>                                                                                                        
                                <div class='collapse' id='collapseEdit".$inc."'>                                           
                                    <div class='card card-list query-card'>   
                                        <div class='card-body'>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Querie </h5>
                                                            <p class='mb-0'> ".$row['query']."</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Response </h5>";
                                                            if (empty($row['response'])) {
                                                                echo "<p class='mb-0'>pending.....</p>";
                                                            } else {
                                                                echo "<p class='mb-0'>".$row['response']."</p>";
                                                            }
                                                        echo "</div>
                                                    </div>
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

    <!-- Modal list start
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
    </div> -->
    <div class='modal fade bd-example-modal-lg' role='dialog' aria-modal='true' id='new-query-modal'>
        <div class='modal-dialog  modal-dialog-centered modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header d-block text-center pb-3 border-bttom'>
                    <h3 class='modal-title' id='exampleModalCenterTitle'>New Query</h3>
                </div>
                    <form method="post" action="submit_query.php" enctype="multipart/form-data">
                        <div class='modal-body'>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <div class='form-group mb-3'>
                                        <label for='exampleInputText040' class='h5'>Query</label>
                                        <textarea class='form-control' name='query' id='exampleInputText040' rows='2'></textarea>
                                    </div>
                                </div>
                                <div class='col-lg-12'>
                                    <div class='d-flex flex-wrap  mt-4'>
                                        <button class='btn btn-primary mr-3' type="submit" class='btn btn-primary' name="submit">Submit</button>
                                        <button type="button" class='btn btn-secondary' onclick="cancelForm()">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
        $inc=1;//counter variable to increment the number of querys
        $queryRows = $_SESSION['query_rows'];
        foreach ($queryRows as $row) {
            echo"
            <script>
        const myDiv".$inc." = document.getElementById('card-onclick".$inc."');
        
        myDiv".$inc.".addEventListener('click', function() {
            // Replace 'https://www.example.com' with the actual URL you want to open
            window.location.href = '#collapseEdit".$inc."';
          });
    </script>";
    $inc++;
    }
    ?>
   
</body>

</html>