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
                                             <div class='media align-items-center mt-md-0 mt-3'>
                                                <a href='#' class='btn mr-3'>View</a>
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
                                    <!-- <div class='col-lg-12'>
                                <div class='card card-widget query-card'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                                <div class='custom-control custom-query custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck2'>
                                                    <label class='custom-control-label' for='customCheck2'></label>
                                                </div>
                                                <div>
                                                    <h5 class='mb-2'>Create unique style of inner pages</h5>
                                                    <div class='media align-items-center'>
                                                        <div class='btn bg-body mr-3'><i class='ri-align-justify mr-2'></i>5/10</div>
                                                        <div class='btn bg-body'><i class='ri-survey-line mr-2'></i>3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='media align-items-center mt-md-0 mt-3'>
                                                <a href='#' class='btn bg-success-light mr-3'>Design</a>
                                                <a class='btn bg-success-light' data-toggle='collapse' href='#collapseEdit2' role='button' aria-expanded='false' aria-controls='collapseEdit2'><i class='ri-edit-box-line m-0'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                       
                                <div class='collapse' id='collapseEdit2'>                                            
                                    <div class='card card-list query-card'>
                                        <div class='card-header d-flex align-items-center justify-content-between px-0 mx-3'>
                                            <div class='header-title'>
                                                <div class='custom-control custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck006'>
                                                    <label class='custom-control-label h5' for='customCheck006'>Mark as done</label>
                                                </div>
                                            </div>
                                            <div><a href='#' class='btn bg-secondary-light'>Design</a></div>
                                        </div>
                                        <div class='card-body'>
                                            <div class='form-group mb-3 position-relative'>
                                                <input type='text' class='form-control bg-white' placeholder='Design landing page of webkit'>
                                                <a href='#' class='query-edit query-simple-edit text-body'><i class='ri-edit-box-line'></i></a>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText2' class='h5'>Memebers</label>
                                                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                                                    <option>Memebers</option>
                                                                    <option>Kianna Septimus</option>
                                                                    <option>Jaxson Herwitz</option>
                                                                    <option>Ryan Schleifer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText4' class='h5'>Due Dates*</label>
                                                                <input type='date' class='form-control' id='exampleInputText4' value=''>
                                                            </div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Description</h5>
                                                            <p class='mb-0'>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                        </div>
                                                        <div class='col-lg-6'>                                      
                                                            <h5 class='mb-2'>Checklist</h5>
                                                            <div class='row'>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck4'>
                                                                        <label class='custom-control-label mb-1' for='customCheck4'>Design mobile version</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck07'>
                                                                        <label class='custom-control-label mb-1' for='customCheck07'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck6'>
                                                                        <label class='custom-control-label' for='customCheck6'>Vector images of small size.</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck7'>
                                                                        <label class='custom-control-label mb-1' for='customCheck7'>Design mobile version of landing page</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck8'>
                                                                        <label class='custom-control-label mb-1' for='customCheck8'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck9'>
                                                                        <label class='custom-control-label' for='customCheck9'>Vector images of small size..</label>
                                                                    </div>
                                                                </div>
                                                            </div>                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group mb-0'>
                                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                                <div class='custom-file'>
                                                    <input type='file' class='custom-file-input' id='inputGroupFile002'>
                                                    <label class='custom-file-label' for='inputGroupFile002'>Upload media</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class='col-lg-12'>
                                <div class='card card-widget query-card'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                                <div class='custom-control custom-query custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck10'>
                                                    <label class='custom-control-label' for='customCheck10'></label>
                                                </div>
                                                <div>
                                                    <h5 class='mb-2'>Activate from WordPress Dashboard</h5>
                                                    <div class='media align-items-center'>
                                                        <div class='btn bg-body mr-3'><i class='ri-align-justify mr-2'></i>5/10</div>
                                                        <div class='btn bg-body'><i class='ri-survey-line mr-2'></i>3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='media align-items-center mt-md-0 mt-3'>
                                                <a href='#' class='btn bg-primary-light mr-3'>Design</a>
                                                <a class='btn bg-primary-light' data-toggle='collapse' href='#collapseEdit3' role='button' aria-expanded='false' aria-controls='collapseEdit3'><i class='ri-edit-box-line m-0'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                       
                                <div class='collapse' id='collapseEdit3'>                                            
                                    <div class='card card-list query-card'>
                                        <div class='card-header d-flex align-items-center justify-content-between px-0 mx-3'>
                                            <div class='header-title'>
                                                <div class='custom-control custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck11'>
                                                    <label class='custom-control-label h5' for='customCheck11'>Mark as done</label>
                                                </div>
                                            </div>
                                            <div><a href='#' class='btn bg-secondary-light'>Design</a></div>
                                        </div>
                                        <div class='card-body'>
                                            <div class='form-group mb-3 position-relative'>
                                                <input type='text' class='form-control bg-white' placeholder='Design landing page of webkit'>
                                                <a href='#' class='query-edit query-simple-edit text-body'><i class='ri-edit-box-line'></i></a>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText2' class='h5'>Memebers</label>
                                                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                                                    <option>Memebers</option>
                                                                    <option>Kianna Septimus</option>
                                                                    <option>Jaxson Herwitz</option>
                                                                    <option>Ryan Schleifer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText5' class='h5'>Due Dates*</label>
                                                                <input type='date' class='form-control' id='exampleInputText5' value=''>
                                                            </div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Description</h5>
                                                            <p class='mb-0'>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                        </div>
                                                        <div class='col-lg-6'>                                      
                                                            <h5 class='mb-2'>Checklist</h5>
                                                            <div class='row'>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck12'>
                                                                        <label class='custom-control-label mb-1' for='customCheck12'>Design mobile version</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck13'>
                                                                        <label class='custom-control-label mb-1' for='customCheck13'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck14'>
                                                                        <label class='custom-control-label' for='customCheck14'>Vector images of small size.</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck15'>
                                                                        <label class='custom-control-label mb-1' for='customCheck15'>Design mobile version of landing page</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck16'>
                                                                        <label class='custom-control-label mb-1' for='customCheck16'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck17'>
                                                                        <label class='custom-control-label' for='customCheck17'>Vector images of small size..</label>
                                                                    </div>
                                                                </div>
                                                            </div>                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group mb-0'>
                                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                                <div class='custom-file'>
                                                    <input type='file' class='custom-file-input' id='inputGroupFile03'>
                                                    <label class='custom-file-label' for='inputGroupFile03'>Upload media</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class='col-lg-12'>
                                <div class='card card-widget query-card'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                                <div class='custom-control custom-query custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck18'>
                                                    <label class='custom-control-label' for='customCheck18'></label>
                                                </div>
                                                <div>
                                                    <h5 class='mb-2'>Add code to output Post Title & Text</h5>
                                                    <div class='media align-items-center'>
                                                        <div class='btn bg-body mr-3'><i class='ri-align-justify mr-2'></i>5/10</div>
                                                        <div class='btn bg-body'><i class='ri-survey-line mr-2'></i>3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='media align-items-center mt-md-0 mt-3'>
                                                <a href='#' class='btn bg-info-light mr-3'>Design</a>
                                                <a class='btn bg-info-light' data-toggle='collapse' href='#collapseEdit4' role='button' aria-expanded='false' aria-controls='collapseEdit4'><i class='ri-edit-box-line m-0'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                       
                                <div class='collapse' id='collapseEdit4'>                                            
                                    <div class='card card-list query-card'>
                                        <div class='card-header d-flex align-items-center justify-content-between px-0 mx-3'>
                                            <div class='header-title'>
                                                <div class='custom-control custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck19'>
                                                    <label class='custom-control-label h5' for='customCheck19'>Mark as done</label>
                                                </div>
                                            </div>
                                            <div><a href='#' class='btn bg-secondary-light'>Design</a></div>
                                        </div>
                                        <div class='card-body'>
                                            <div class='form-group mb-3 position-relative'>
                                                <input type='text' class='form-control bg-white' placeholder='Design landing page of webkit'>
                                                <a href='#' class='query-edit query-simple-edit text-body'><i class='ri-edit-box-line'></i></a>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText2' class='h5'>Memebers</label>
                                                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                                                    <option>Memebers</option>
                                                                    <option>Kianna Septimus</option>
                                                                    <option>Jaxson Herwitz</option>
                                                                    <option>Ryan Schleifer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText6' class='h5'>Due Dates*</label>
                                                                <input type='date' class='form-control' id='exampleInputText6' value=''>
                                                            </div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Description</h5>
                                                            <p class='mb-0'>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                        </div>
                                                        <div class='col-lg-6'>                                      
                                                            <h5 class='mb-2'>Checklist</h5>
                                                            <div class='row'>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck20'>
                                                                        <label class='custom-control-label mb-1' for='customCheck20'>Design mobile version</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck21'>
                                                                        <label class='custom-control-label mb-1' for='customCheck21'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck22'>
                                                                        <label class='custom-control-label' for='customCheck22'>Vector images of small size.</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck23'>
                                                                        <label class='custom-control-label mb-1' for='customCheck23'>Design mobile version of landing page</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck24'>
                                                                        <label class='custom-control-label mb-1' for='customCheck24'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck25'>
                                                                        <label class='custom-control-label' for='customCheck25'>Vector images of small size..</label>
                                                                    </div>
                                                                </div>
                                                            </div>                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group mb-0'>
                                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                                <div class='custom-file'>
                                                    <input type='file' class='custom-file-input' id='inputGroupFile04'>
                                                    <label class='custom-file-label' for='inputGroupFile04'>Upload media</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class='col-lg-12'>
                                <div class='card card-widget query-card mb-0'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                                <div class='custom-control custom-query custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck26'>
                                                    <label class='custom-control-label' for='customCheck26'></label>
                                                </div>
                                                <div>
                                                    <h5 class='mb-2'>Add Header and Footer To Template</h5>
                                                    <div class='media align-items-center'>
                                                        <div class='btn bg-body mr-3'><i class='ri-align-justify mr-2'></i>5/10</div>
                                                        <div class='btn bg-body'><i class='ri-survey-line mr-2'></i>3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='media align-items-center mt-md-0 mt-3'>
                                                <a href='#' class='btn bg-secondary-light mr-3'>Design</a>
                                                <a class='btn bg-secondary-light' data-toggle='collapse' href='#collapseEdit5' role='button' aria-expanded='false' aria-controls='collapseEdit5'><i class='ri-edit-box-line m-0'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                                                       
                                <div class='collapse' id='collapseEdit5'>                                            
                                    <div class='card card-list query-card'>
                                        <div class='card-header d-flex align-items-center justify-content-between px-0 mx-3'>
                                            <div class='header-title'>
                                                <div class='custom-control custom-checkbox custom-control-inline'>
                                                    <input type='checkbox' class='custom-control-input' id='customCheck27'>
                                                    <label class='custom-control-label h5' for='customCheck27'>Mark as done</label>
                                                </div>
                                            </div>
                                            <div><a href='#' class='btn bg-secondary-light'>Design</a></div>
                                        </div>
                                        <div class='card-body'>
                                            <div class='form-group mb-3 position-relative'>
                                                <input type='text' class='form-control bg-white' placeholder='Design landing page of webkit'>
                                                <a href='#' class='query-edit query-simple-edit text-body'><i class='ri-edit-box-line'></i></a>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText2' class='h5'>Memebers</label>
                                                                <select name='type' class='selectpicker form-control' data-style='py-0'>
                                                                    <option>Memebers</option>
                                                                    <option>Kianna Septimus</option>
                                                                    <option>Jaxson Herwitz</option>
                                                                    <option>Ryan Schleifer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class='col-lg-6'>
                                                            <div class='form-group mb-0'>
                                                                <label for='exampleInputText7' class='h5'>Due Dates*</label>
                                                                <input type='date' class='form-control' id='exampleInputText7' value=''>
                                                            </div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Description</h5>
                                                            <p class='mb-0'>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                        </div>
                                                        <div class='col-lg-6'>                                      
                                                            <h5 class='mb-2'>Checklist</h5>
                                                            <div class='row'>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck28'>
                                                                        <label class='custom-control-label mb-1' for='customCheck28'>Design mobile version</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck29'>
                                                                        <label class='custom-control-label mb-1' for='customCheck29'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck30'>
                                                                        <label class='custom-control-label' for='customCheck30'>Vector images of small size.</label>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6'>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck31'>
                                                                        <label class='custom-control-label mb-1' for='customCheck31'>Design mobile version of landing page</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck32'>
                                                                        <label class='custom-control-label mb-1' for='customCheck32'>Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class='custom-control custom-checkbox custom-control-inline mr-0'>
                                                                        <input type='checkbox' class='custom-control-input' id='customCheck33'>
                                                                        <label class='custom-control-label' for='customCheck33'>Vector images of small size..</label>
                                                                    </div>
                                                                </div>
                                                            </div>                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group mb-0'>
                                                <label for='exampleInputText01' class='h5'>Attachments</label>
                                                <div class='custom-file'>
                                                    <input type='file' class='custom-file-input' id='inputGroupFile05'>
                                                    <label class='custom-file-label' for='inputGroupFile05'>Upload media</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>-->
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
    <div class='modal fade bd-example-modal-lg' role='dialog' aria-modal='true' id='new-create-modal'>
        <div class='modal-dialog  modal-dialog-centered modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header d-block text-center pb-3 border-bttom'>
                    <h3 class='modal-title' id='exampleModalCenterTitle03'>New query </h3>
                </div>
                <div class='modal-body'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='form-group mb-3'>
                                <label for='exampleInputText03' class='h5'>query name</label>
                                <input type='text' class='form-control' id='exampleInputText03'
                                    placeholder='Enter query Name'>
                                <a href='#' class='query-edit text-body'><i class='ri-edit-box-line'></i></a>
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