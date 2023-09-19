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
   <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">

   <style>
      .auth-card {
         opacity: 0;
         animation-name: fade-in;
         animation-duration: 0.5s;
         animation-delay: 0.5s;
         animation-fill-mode: forwards;
         border: none;
         height: fit-content;
         box-sizing: border-box;
         margin-bottom: -10px;
         /* Adjust the value as needed */
      }


      @keyframes fade-in {
         from {
            opacity: 0;
         }

         to {
            opacity: 1;
         }
      }
   </style>

   
</head>

<body class=" "
   style="background-image: url('../assets/images/login/login_overlay.jpg'); background-size: cover; background-position: center;">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->

   <div class="wrapper">
      <section class="login-content">
         <div class="overlay"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: -1;">
         </div>
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-9">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-6 bg-primary">
                              <div class="p-3">
                                 <h2 class="mb-2 text-white">Create Account</h2>
                                 <br>
                                 <form action="auth-sign-up-controller" method="post">
                                    <div class="col-lg-12">
                                       <div class="floating-label form-group">
                                          <!-- <label>First Name</label> -->
                                          <input class="floating-input form-control" type="text" placeholder="First Name" required
                                             name="fname">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="floating-label form-group">
                                          <!-- <label>Last Name</label> -->
                                          <input class="floating-input form-control" type="text" placeholder="Last Name" required
                                             name="lname">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="floating-label form-group">
                                          <!-- <label>Email</label> -->
                                          <input class="floating-input form-control" type="email" placeholder="Email" required
                                             name="email">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="floating-label form-group">
                                          <!-- <label>Phone No.</label> -->
                                          <input class="floating-input form-control" type="text" placeholder="Phone No." required
                                             name="phno">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="floating-label form-group">
                                          <!-- <label>Password</label> -->
                                          <input class="floating-input form-control" type="password" placeholder="Password" required
                                             name="password">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="floating-label form-group">
                                          <!-- <label>Confirm Password</label> -->
                                          <input class="floating-input form-control" type="password" placeholder="Confirm Password" required 
                                             name="confpassword">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <button type="submit" class="btn btn-white" id="signupButton">Sign
                                          Up</button>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                       <p>
                                          Already have an Account <a href="auth-sign-in"
                                             class="text-white text-underline">Sign In</a>
                                       </p>
                                    </div>
                                 </form>
                              </div>

                           </div>
                           <div class="col-lg-12 content-right">
                              <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

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