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
                           <h4 class="card-title">Basic Checkbox</h4>
                        </div> 
                     </div>
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox1">
                              <label for="checkbox1">Primary-Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox2" checked="">
                              <label for="checkbox2">Primary / Active</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox3" disabled="">
                              <label for="checkbox3">Disable / Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox4" checked="" disabled="">
                              <label for="checkbox4">Active / Disable</label>
                           </div>
                     </div>
                  </div>

                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Custom Checkbox</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck5">
                           <label class="custom-control-label" for="customCheck5">Primary / Inactive</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck6" Checked="">
                           <label class="custom-control-label" for="customCheck6">Primary - active</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck7"  disabled="">
                           <label class="custom-control-label" for="customCheck7">Primary - inactive - disabled</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck8"  checked="" disabled="">
                           <label class="custom-control-label" for="customCheck8">Primary - active - disabled</label>
                        </div>
                     </div>
                  </div>                    
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Color</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" checked="">
                           <label class="custom-control-label" for="customCheck-1"> Primary</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-success" id="customCheck-2" checked="">
                           <label class="custom-control-label" for="customCheck-2">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-3" checked="">
                           <label class="custom-control-label" for="customCheck-3">Danger</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-4" checked="">
                           <label class="custom-control-label" for="customCheck-4">Warning</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-5" checked="">
                           <label class="custom-control-label" for="customCheck-5">Dark</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-info" id="customCheck-6" checked="">
                           <label class="custom-control-label" for="customCheck-6">Info</label>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Custom Color</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-11">
                           <label class="custom-control-label" for="customCheck-11">Primary </label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-success" id="customCheck-22">
                           <label class="custom-control-label" for="customCheck-22">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-33">
                           <label class="custom-control-label" for="customCheck-33">Danger</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-44">
                           <label class="custom-control-label" for="customCheck-44">Warning</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-55">
                           <label class="custom-control-label" for="customCheck-55">Dark</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-info" id="customCheck-66">
                           <label class="custom-control-label" for="customCheck-66"> Info</label>
                        </div>
                     </div>
                  </div> 
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Change Icon</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-10" checked="">
                           <label class="custom-control-label" for="customCheck-10"><i class="fa fa-music"></i>Music</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-20" checked="">
                           <label class="custom-control-label" for="customCheck-20"><i class="fa fa-commenting-o"></i>SMS</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-30" checked="">
                           <label class="custom-control-label" for="customCheck-30"><i class="fa fa-times"></i>Cancel</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-40" checked="">
                           <label class="custom-control-label" for="customCheck-40"><i class="fa fa-file"></i>File</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-50" checked="">
                           <label class="custom-control-label" for="customCheck-50"><i class="fa fa-bold"></i>Bold</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-60" checked="">
                           <label class="custom-control-label" for="customCheck-60"><i class="fa fa-map-marker"></i>Location</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-70" checked="">
                           <label class="custom-control-label" for="customCheck-70"><i class="fa fa-camera"></i>Camera</label>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Boolean Checkbox</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-t" checked="">
                           <label class="custom-control-label" for="customCheck-t">True</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-f">
                           <label class="custom-control-label" for="customCheck-f">False</label>
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