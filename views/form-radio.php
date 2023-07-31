<?php
include '../layout/header.php';
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
  <body class=" color-light ">
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
            <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Default Radio Buttons</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio" id="radio1" checked="">
                        <label for="radio1">Active</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio" id="radio2">
                        <label for="radio2">Inactive</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio1" id="radio3" disabled="" checked="">
                        <label for="radio3">Active - Disabled</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio1" id="radio4" disabled="">
                        <label for="radio3">Inactive - Disabled</label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom Colored Radio Buttons</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio01" name="customRadio-11" class="custom-control-input bg-primary">
                        <label class="custom-control-label" for="customRadio01"> Primary </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio02" name="customRadio-11" class="custom-control-input bg-success">
                        <label class="custom-control-label" for="customRadio02"> Success </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio03" name="customRadio-11" class="custom-control-input bg-danger">
                        <label class="custom-control-label" for="customRadio03"> Danger </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio04" name="customRadio-11" class="custom-control-input bg-warning">
                        <label class="custom-control-label" for="customRadio04"> Warning </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio05" name="customRadio-11" class="custom-control-input bg-dark">
                        <label class="custom-control-label" for="customRadio05"> Dark </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio06" name="customRadio-11" class="custom-control-input bg-info">
                        <label class="custom-control-label" for="customRadio06"> Info </label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom Radio Buttons</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6"> One </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio7"> Two </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio8" name="customRadio-1" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio8"> Three </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio-8" name="customRadio-2" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio-8"> Four Checked </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio9" name="customRadio-3" class="custom-control-input" disabled="">
                        <label class="custom-control-label" for="customRadio9"> Five disabled</label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio10" name="customRadio-4" class="custom-control-input" disabled="" checked="">
                        <label class="custom-control-label" for="customRadio10"> Six Selected and  disabled</label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Colored Radio Buttons</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-1" name="customRadio-10" class="custom-control-input bg-primary">
                        <label class="custom-control-label" for="customRadio-1"> Primary </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-2" name="customRadio-10" class="custom-control-input bg-success">
                        <label class="custom-control-label" for="customRadio-2"> Success </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-3" name="customRadio-10" class="custom-control-input bg-danger">
                        <label class="custom-control-label" for="customRadio-3"> Danger </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-4" name="customRadio-10" class="custom-control-input bg-warning">
                        <label class="custom-control-label" for="customRadio-4"> Warning </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-5" name="customRadio-10" class="custom-control-input bg-dark">
                        <label class="custom-control-label" for="customRadio-5"> Dark </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-6" name="customRadio-10" class="custom-control-input bg-info">
                        <label class="custom-control-label" for="customRadio-6"> Info </label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
                    <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">Webkit</a>.
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