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
  <body class="  ">
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
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-lg-6">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">Badge</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <p>Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units.</p>
                      <h1 class="mt-2">Example heading <span class="badge  badge-primary">New</span></h1>
                      <h2 class="mt-2">Example heading <span class="badge badge-secondary">New</span></h2>
                      <h3 class="mt-2">Example heading<span class="badge badge-success ml-1">New</span>
                      </h3>
                      <h4 class="mt-2">Example heading <span class="badge badge-danger">New</span></h4>
                      <h5 class="mt-2">Example heading <span class="badge badge-warning">New</span></h5>
                      <h6 class="mb-0">Example heading <span class="badge badge-info">New</span></h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">Button Badges</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <p>Badges can be used as part of buttons to provide a counter.</p>
                      <button type="button" class="btn mb-1 btn-primary">
                      Notifications <span class="badge badge-light ml-2">4</span>
                      </button>
                      <button type="button" class="btn mb-1 btn-success">
                      Notifications <span class="badge badge-light ml-2">4</span>
                      </button>
                      <button type="button" class="btn mb-1 btn-danger">
                      Notifications <span class="badge badge-light ml-2">4</span>
                      </button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">Button Light background Badges</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <p>Badges can be used as part of buttons to provide a counter.</p>
                      <button type="button" class="btn mb-1 btn-outline-primary">
                      Notifications <span class="badge badge-primary ml-2">4</span>
                      </button>
                      <button type="button" class="btn mb-1 btn-outline-success">
                      Notifications <span class="badge badge-success ml-2">4</span>
                      </button>
                      <button type="button" class="btn mb-1 btn-outline-danger">
                      Notifications <span class="badge badge-danger ml-2">4</span>
                      </button>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">Button Border Badges</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <p>Badges can be used as part of buttons to provide a counter.</p>
                      <button type="button" class="btn mb-1 bg-primary-light">
                      Notifications <span class="badge badge-primary ml-2">4</span>
                      </button>
                      <button type="button" class="btn mb-1 bg-success-light">
                      Notifications <span class="badge badge-success ml-2">4</span>
                      </button>
                      <button type="button" class="btn mb-1 bg-danger-light">
                      Notifications <span class="badge badge-danger ml-2">4</span>
                      </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-6">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                      <h4 class="card-title">Contextual variations</h4>
                    </div>
                  </div>
                  <div class="card-body">
                      <p class="mb-2">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                      <span class="mt-2 badge badge-primary">Primary</span>
                      <span class="mt-2 badge badge-secondary">Secondary</span>
                      <span class="mt-2 badge badge-success">Success</span>
                      <span class="mt-2 badge badge-danger">Danger</span>
                      <span class="mt-2 badge badge-warning">Warning</span>
                      <span class="mt-2 badge badge-info">Info</span>
                      <span class="mt-2 badge badge-light">Light</span>
                      <span class="mt-2 badge badge-dark">Dark</span>
                      <h5 class="card-title mt-4">Pill badges</h5>
                      <p class="mb-2">Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger <code>border-radius</code> and additional horizontal <code>padding</code>). Useful if you miss the badges from v3.</p>
                      <span class="mt-2 badge badge-pill badge-primary">Primary</span>
                      <span class="mt-2 badge badge-pill badge-secondary">Secondary</span>
                      <span class="mt-2 badge badge-pill badge-success">Success</span>
                      <span class="mt-2 badge badge-pill badge-danger">Danger</span>
                      <span class="mt-2 badge badge-pill badge-warning">Warning</span>
                      <span class="mt-2 badge badge-pill badge-info">Info</span>
                      <span class="mt-2 badge badge-pill badge-light">Light</span>
                      <span class="mt-2 badge badge-pill badge-dark">Dark</span>
                      <h5 class="card-title mt-4">Links</h5>
                      <p class="mb-2">Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</p>
                      <a href="#" class="mt-2 badge badge-primary">Primary</a>
                      <a href="#" class="mt-2 badge badge-secondary">Secondary</a>
                      <a href="#" class="mt-2 badge badge-success">Success</a>
                      <a href="#" class="mt-2 badge badge-danger">Danger</a>
                      <a href="#" class="mt-2 badge badge-warning">Warning</a>
                      <a href="#" class="mt-2 badge badge-info">Info</a>
                      <a href="#" class="mt-2 badge badge-light">Light</a>
                      <a href="#" class="mt-2 badge badge-dark">Dark</a>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                      <h4 class="card-title">Contextual variations Border</h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-2">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                    <span class="mt-2 badge border border-primary text-primary mt-2">Primary</span>
                    <span class="mt-2 badge border border-secondary text-secondary mt-2">Secondary</span>
                    <span class="mt-2 badge border border-success text-success mt-2">Success</span>
                    <span class="mt-2 badge border border-danger text-danger mt-2">Danger</span>
                    <span class="mt-2 badge border border-warning text-warning mt-2">Warning</span>
                    <span class="mt-2 badge border border-info text-info mt-2">Info</span>
                    <span class="mt-2 badge border border-light text-light mt-2">Light</span>
                    <span class="mt-2 badge border border-dark text-dark mt-2">Dark</span>
                    <h5 class="card-title mt-4">Pill badges</h5>
                    <p class="mb-2">Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger <code>border-radius</code> and additional horizontal <code>padding</code>). Useful if you miss the badges from v3.</p>
                    <span class="mt-2 badge badge-pill border border-primary text-primary">Primary</span>
                    <span class="mt-2 badge badge-pill border border-secondary text-secondary">Secondary</span>
                    <span class="mt-2 badge badge-pill border border-success text-success">Success</span>
                    <span class="mt-2 badge badge-pill border border-danger text-danger">Danger</span>
                    <span class="mt-2 badge badge-pill border border-warning text-warning">Warning</span>
                    <span class="mt-2 badge badge-pill border border-info text-info">Info</span>
                    <span class="mt-2 badge badge-pill border border-light text-light">Light</span>
                    <span class="mt-2 badge badge-pill border border-dark text-dark">Dark</span>
                    <h5 class="card-title mt-4">Links</h5>
                    <p class="mb-2">Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</p>
                    <a href="#" class="mt-2 badge border border-primary text-primary">Primary</a>
                    <a href="#" class="mt-2 badge border border-secondary text-secondary">Secondary</a>
                    <a href="#" class="mt-2 badge border border-success text-success">Success</a>
                    <a href="#" class="mt-2 badge border border-danger text-danger">Danger</a>
                    <a href="#" class="mt-2 badge border border-warning text-warning">Warning</a>
                    <a href="#" class="mt-2 badge border border-info text-info">Info</a>
                    <a href="#" class="mt-2 badge border border-light text-light">Light</a>
                    <a href="#" class="mt-2 badge border border-dark text-dark">Dark</a>
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