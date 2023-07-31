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
                        <h4 class="card-title">Vertical Wizard</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <ul id="top-tabbar-vertical" class="p-0">
                              <li class="active" id="personal">
                                 <a href="javascript:void();">
                                 <i class="ri-lock-unlock-line text-primary"></i><span>Personal</span>
                                 </a>
                              </li>
                              <li id="contact">
                                 <a href="javascript:void();">
                                 <i class="ri-user-fill text-danger"></i><span>Contact</span>
                                 </a>
                              </li>
                              <li id="official">
                                 <a href="javascript:void();">
                                 <i class="ri-camera-fill text-success"></i><span>Official</span>
                                 </a>
                              </li>
                              <li id="payment">
                                 <a href="javascript:void();">
                                 <i class="ri-check-fill text-warning"></i><span>Payment</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-9">
                           <form id="form-wizard3" class="text-center">
                              <!-- fieldsets -->
                              <fieldset>
                                 <div class="form-card text-left">
                                    <div class="row">
                                       <div class="col-12">
                                          <h3 class="mb-4">User Information:</h3>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="fname">First Name: *</label>
                                             <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="required" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="lname">Last Name: *</label>
                                             <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Gender: *</label>
                                             <div class="form-check">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                   <label class="custom-control-label" for="customRadio1"> Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                   <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                   <label class="custom-control-label" for="customRadio2"> Female</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="dob">Date Of Birth: *</label>
                                             <input type="date" class="form-control" id="dob" name="dob" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button id="submit" type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                              </fieldset>
                              <fieldset>
                                 <div class="form-card text-left">
                                    <div class="row">
                                       <div class="col-12">
                                          <h3 class="mb-4">Contact Information:</h3>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="email">Email Id: *</label>
                                             <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="ccno">Contact Number: *</label>
                                             <input type="text" class="form-control" id="ccno" name="ccno" placeholder="Contact Number" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="city">City: *</label>
                                             <input type="text" class="form-control" id="city" name="city" placeholder="City." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="state">State: *</label>
                                             <input type="text" class="form-control" id="state" name="state" placeholder="State." />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                                 <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                              </fieldset>
                              <fieldset>
                                 <div class="form-card text-left">
                                    <div class="row">
                                       <div class="col-12">
                                          <h3 class="mb-4">Official Information:</h3>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="empid">Employee Id: *</label>
                                             <input type="email" class="form-control" id="empid" name="empid" placeholder="Employee Id." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="desg">Designation: *</label>
                                             <input type="text" class="form-control" id="desg" name="desg" placeholder="Designation." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="accname">Departmrnt Name: *</label>
                                             <input type="text" class="form-control" id="accname" name="accname" placeholder="Departmrnt Name." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="workhour">Working Hour: *</label>
                                             <input type="text" class="form-control" id="workhour" name="workhour" placeholder="Working Hour." />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Submit" >Submit</button>
                                 <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                              </fieldset>
                              <fieldset>
                                 <div class="form-card text-left">
                                    <div class="row">
                                       <div class="col-12">
                                          <h3 class="mb-4 text-left">Payment:</h3>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="panno">Pan No: *</label>
                                             <input type="text" class="form-control" id="panno" name="panno" placeholder="Pan No." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="accno">Account No: *</label>
                                             <input type="text" class="form-control" id="accno" name="accno" placeholder="Account No." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="holname">Account Holder Name: *</label>
                                             <input type="text" class="form-control" id="holname" name="accname" placeholder="Account Holder Name." />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="ifsc">IFSC Code: *</label>
                                             <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC Code." />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <a class="btn btn-primary action-button float-right" href="form-wizard-vertical" >Submit</a>
                                 <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                              </fieldset>
                           </form>
                        </div>
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