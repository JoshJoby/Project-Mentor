<?php
session_start();
include '../layout/admin-header.php';
if(!isset($_SESSION["admin_id"])){
    header("Location: admin-sign-in");
}
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>Your Projects</h5>
                            <div class="d-flex align-items-center">                                
                                <div class="list-grid-toggle d-flex align-items-center mr-3">
                                    <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div class="col-lg-12">
                        <div class="iq-edit-list-data">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="super-admin-add-admin-controller.php" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="form-group row align-items-center">
                                                    <div class="form-grp col-sm-6">
                                                        <label for="photo" class="sub-heading">Upload Photo:
                                                        </label>
                                                        <div class="circular-input-container">
                                                            <input id="photo" name="photo" type="file"
                                                                accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" row align-items-center">
                                                    <div class="form-group col-sm-6">
                                                        <label for="fname">First Name:</label>
                                                        <input type="text" class="form-control"  name="fname">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="lname">Last Name:</label>
                                                        <input type="text" class="form-control" id="lname" name="lname">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="phno">Phone Number:</label>
                                                        <input type="text" class="form-control"  name="phno">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="email">Email-ID:</label>
                                                        <input type="text" class="form-control"  id="email" name="email">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="password">Password:</label>
                                                        <input type="text" class="form-control" id="password" name="password">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="confpassword">Repeat Password:</label>
                                                        <input type="text" class="form-control" id="confpassword" name="confpassword">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="tech" class="sub-heading">Select Skills of
                                                            Expertise</label>
                                                        <div id="tech" class="multiselect">
                                                            <div id="mySelectLabel" class="selectBox"
                                                                onclick="toggleCheckboxArea()">
                                                                <select class="form-select">
                                                                    <option>somevalue</option>
                                                                </select>
                                                                <div class="overSelect"></div>
                                                            </div>
                                                            <div id="skills">
                                                                <label for="python"><input type="checkbox" id="python"
                                                                        onchange="checkboxStatusChange()"
                                                                        value="Python" /> Python</label>
                                                                <label for="java"><input type="checkbox" id="java"
                                                                        onchange="checkboxStatusChange()"
                                                                        value="Java" />
                                                                    Java</label>
                                                                <label for="javascript"><input type="checkbox"
                                                                        id="javascript"
                                                                        onchange="checkboxStatusChange()"
                                                                        value="JavaScript" /> JavaScript</label>
                                                                <label for="php"><input type="checkbox" id="php"
                                                                        onchange="checkboxStatusChange()" value="PHP" />
                                                                    PHP</label>
                                                                <label for="mysql"><input type="checkbox" id="mysql"
                                                                        onchange="checkboxStatusChange()"
                                                                        value="MySQL" /> MySQL</label>
                                                                <label for="kotlin"><input type="checkbox" id="kotlin"
                                                                        onchange="checkboxStatusChange()"
                                                                        value="Kotlin" /> Kotlin</label>
                                                                <label for="c++"><input type="checkbox" id="c++"
                                                                        onchange="checkboxStatusChange()" value="C++" />
                                                                    C++</label>
                                                                <label for="html"><input type="checkbox" id="html"
                                                                        onchange="checkboxStatusChange()"
                                                                        value="HTML" />
                                                                    HTML</label>
                                                                <label for="css"><input type="checkbox" id="css"
                                                                        onchange="checkboxStatusChange()" value="CSS" />
                                                                    CSS</label>
                                                            </div>
                                                            <input type="hidden" id="selectedValues"
                                                                name="selectedValues">

                                                        </div>

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
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