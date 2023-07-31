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
                        <h4 class="card-title"> Default Validation</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form>
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationDefault01">First name</label>
                              <input type="text" class="form-control" id="validationDefault01" required>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationDefault02">Last name</label>
                              <input type="text" class="form-control" id="validationDefault02" required>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationDefaultUsername">Username</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                 </div>
                                 <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationDefault03">City</label>
                              <input type="text" class="form-control" id="validationDefault03" required>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationDefault04">State</label>
                              <select class="form-control" id="validationDefault04" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationDefault05">Zip</label>
                              <input type="text" class="form-control" id="validationDefault05" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                              </label>
                           </div>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title"> Supported elements</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form class="was-validated">
                        <div class="mb-3">
                           <label for="validationTextarea">Textarea</label>
                           <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                           <div class="invalid-feedback">
                              Please enter a message in the textarea.
                           </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                           <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                           <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>
                        <div class="custom-control custom-radio">
                           <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                           <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                           <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                           <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                           <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-group">
                           <select class="custom-select" required>
                              <option value="">Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                           <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                           <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                           <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom Validation</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form class="needs-validation" novalidate>
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">First name</label>
                              <input type="text" class="form-control" id="validationCustom01"  required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom02">Last name</label>
                              <input type="text" class="form-control" id="validationCustom02"  required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustomUsername">Username</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                 </div>
                                 <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                 <div class="invalid-feedback">
                                    Please choose a username.
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom03">City</label>
                              <input type="text" class="form-control" id="validationCustom03" required>
                              <div class="invalid-feedback">
                                 Please provide a valid city.
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom04">State</label>
                              <select class="form-control" id="validationCustom04" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                              <div class="invalid-feedback">
                                 Please select a valid state.
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom05">Zip</label>
                              <input type="text" class="form-control" id="validationCustom05" required>
                              <div class="invalid-feedback">
                                 Please provide a valid zip.
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                              </label>
                              <div class="invalid-feedback">
                                 You must agree before submitting.
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                     </form>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Tooltips</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form class="needs-validation" novalidate>
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationTooltip01">First name</label>
                              <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                              <div class="valid-tooltip">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationTooltip02">Last name</label>
                              <input type="text" class="form-control" id="validationTooltip02" value="Tech" required>
                              <div class="valid-tooltip">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationTooltipUsername">Username</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                 </div>
                                 <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                 <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationTooltip03">City</label>
                              <input type="text" class="form-control" id="validationTooltip03" required>
                              <div class="invalid-tooltip">
                                 Please provide a valid city.
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationTooltip04">State</label>
                              <select class="form-control" id="validationTooltip04" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                              <div class="invalid-tooltip">
                                 Please select a valid state.
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationTooltip05">Zip</label>
                              <input type="text" class="form-control" id="validationTooltip05" required>
                              <div class="invalid-tooltip">
                                 Please provide a valid zip.
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                     </form>
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