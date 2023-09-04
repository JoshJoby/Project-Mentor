<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Project Mentor</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/flaticon-eduvalt.css">
  <link rel="stylesheet" href="assets/css/default-icons.css">
  <link rel="stylesheet" href="assets/css/select2.min.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/spacing.css">
  <link rel="stylesheet" href="assets/css/tg-cursor.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <style>
    .section-heading {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .section {
      padding-bottom: 20px;
      margin-bottom: 20px;
    }

    .form-grp label {
      display: block;
      /* margin-bottom: 2px; */
    }

    .form-grp input[type="date"],
    .form-grp input[type="file"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .sub-heading {
      font-weight: bold;
      margin-top: 15px;
    }

    .radio-container,
    .multiselect label {
      margin-bottom: 10px;
    }

    #passing-year {
      border: 0.5px #7c7c7c solid;
      background-color: #ffffff;
      max-height: 50px;
      overflow-y: scroll;
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .multiselect {
      width: 100%;
    }

    .selectBox {
      position: relative;
    }

    /* .selectBox select {
        width: 100%;
      } */
    .overSelect {
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
    }

    #skills {
      display: none;
      border: 0.5px #7c7c7c solid;
      background-color: #ffffff;
      max-height: 150px;
      overflow-y: scroll;

    }

    #skills label {
      display: flex;
      font-weight: normal;
      align-items: center;
      white-space: nowrap;
      background-color: #ffffff00;
      padding: 0.5rem 0.5rem 0.5rem 0.5rem;
    }

    #skills input[type="checkbox"] {
      width: 12px;
      height: 12px;
    }

    #skills label:hover {
      background-color: #1e90ff;
    }

    .radio-container {
      display: flex;
      align-items: center;
      margin-bottom: 0;
    }

    .radio-container input[type="radio"] {
      margin-right: 5px;
      width: 16px;
      height: 16px;
    }

    .radio-container label {
      font-size: 14px;
      cursor: pointer;
    }

    .radio-container label:hover {
      text-decoration: underline;
    }

    .radio-container input[type="radio"]:checked+label {
      font-weight: bold;
    }

    .btn {
      margin-top: 5px;
    }

    .image-container {
      float: right;
      margin-left: 5%;
      margin-right: 2.5%;

    }

    .image-container img {
      width: 350px;
      height: auto;
    }

    #skills label {
      margin-bottom: 5px;
      /* Adjust this value to control vertical spacing */
    }
  </style>
</head>

<body>
  <header class="tg-header__style-three">
    <div class="tg-header__top">
      <div class="container custom-container">
        <div class="row">
          <div class="col-md-6">
            <ul class="tg-header__top-info list-wrap">
              <li><i class="flaticon-pin"></i> <span>463 7th Ave, NY 10018, USA</span></li>
              <li><i class="flaticon-email"></i> <a href="mailto:info@gmail.com">info@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="tg-header__top-social list-wrap">
              <li>Follow Us On :</li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="sticky-header" class="tg-header__area">
      <div class="container custom-container">
        <div class="row">
          <div class="col-12">
            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
            <div class="tgmenu__wrap">
              <nav class="tgmenu__nav">
                <div class="logo">
                  <a href="index  "><img src="assets/img/logo/logo.png" alt="Logo"></a>
                </div>
                <div class="tgmenu__categories d-none d-md-block">
                  <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z"
                          fill="currentcolor" />
                      </svg>
                      Categories
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Business</a></li>
                      <li><a class="dropdown-item" href="#">Data Science</a></li>
                      <li><a class="dropdown-item" href="#">Art & Design</a></li>
                      <li><a class="dropdown-item" href="#">Marketing</a></li>
                      <li><a class="dropdown-item" href="#">Finance</a></li>
                    </ul>
                  </div>
                </div>
                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                  <ul class="navigation">
                    <li class="menu-item-has-children"><a href="#">Home</a>
                      <ul class="sub-menu">
                        <li><a href="index  ">Home One</a></li>
                        <li><a href="index-2  ">Home Two</a></li>
                        <li><a href="index-3  ">Home Three</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Courses</a>
                      <ul class="sub-menu">
                        <li><a href="courses  ">All Courses</a></li>
                        <li><a href="course-details  ">Course Details</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                      <ul class="sub-menu">
                        <li><a href="about-us  ">About Us</a></li>
                        <li><a href="instructors  ">Our Instructors</a></li>
                        <li><a href="instructor-details  ">Instructor Details</a></li>
                        <li><a href="mentors  ">Our Mentors</a></li>
                        <li><a href="events  ">Our Events</a></li>
                        <li><a href="events-details  ">Event Details</a></li>
                        <li><a href="faq  ">Asked Question</a></li>
                        <li><a href="404  ">404 Page</a></li>
                        <li><a href="contact  ">contact</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Shop</a>
                      <ul class="sub-menu">
                        <li><a href="shop  ">Shop Page</a></li>
                        <li><a href="shop-details  ">Shop Details</a></li>
                      </ul>
                    </li>
                    <li class="active menu-item-has-children"><a href="#">Blog</a>
                      <ul class="sub-menu">
                        <li><a href="blog-grid  ">Blog Grid</a></li>
                        <li class="active"><a href="blog  ">Blog Standard</a></li>
                        <li><a href="blog-details  ">Blog Details</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="tgmenu__search-bar">
                  <form action="#">
                    <input type="text" placeholder="Search For Course . . .">
                    <button type="submit"><i class="flaticon-searching"></i></button>
                  </form>
                </div>
                <div class="tgmenu__action">
                  <ul class="list-wrap">
                    <li class="mini-cart-icon">
                      <a href="shop  " class="cart-count">
                        <img src="assets/img/icons/cart.svg" alt="cart">
                        <span class="mini-cart-count">0</span>
                      </a>
                    </li>
                    <li class="header-btn"><a href="contact  " class="btn">Sign Up</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- Mobile Menu  -->
            <div class="tgmobile__menu">
              <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                  <a href="index  "><img src="assets/img/logo/logo.png" alt="Logo"></a>
                </div>
                <div class="tgmobile__search">
                  <form action="#">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fas fa-search"></i></button>
                  </form>
                </div>
                <div class="tgmobile__menu-outer">
                  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="tgmenu__action">
                  <ul class="list-wrap">
                    <li class="header-btn login-btn"><a href="#" class="btn">Log in</a></li>
                    <li class="header-btn"><a href="#" class="btn">Try For Free</a></li>
                  </ul>
                </div>
                <div class="social-links">
                  <ul class="list-wrap">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="tgmobile__menu-backdrop"></div>
            <!-- End Mobile Menu -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="contact-form-wrap">
      
      <h4 class="title">Additional Details</h4>
      <form id="additional-details-form" action="student-regn-controller.php" method="POST"
        enctype="multipart/form-data">
        <div class="image-container">
          <img src="assets\img\others\fact_img02.png">
        </div>
        <div class="section">
          <h5 class="section-heading">Personal Details</h5>

          <div class="form-grp col-sm-6">
            <label for="photo" class="sub-heading">Upload Photo </label>
            <div class="circular-input-container">
              <input id="photo" name="photo" type="file" accept="image/*" />
            </div>
          </div>
          <div class="form-grp col-sm-6">
            <label for="dob" class="sub-heading">Date of Birth</label>
            <input id="dob" name="dob" type="date" required />
          </div>
          <div class="form-grp col-sm-6">
            <label for="address" class="sub-heading">Address</label>
            <input id="address" name="address" type="text" required />
          </div>
          <div class="form-grp">
            <label for="gender" class="sub-heading">Gender</label>
            <div class="radio-container">
              <input name="gender" type="radio" value="Male" id="male" required />
              <label for="male">Male</label>
            </div>
            <div class="radio-container">
              <input name="gender" type="radio" value="Female" id="female" required />
              <label for="female">Female</label>
            </div>
            <div class="radio-container">
              <input name="gender" type="radio" value="Other" id="other" required />
              <label for="other">Other</label>
              
            </div>
          </div>
          <br>
          <!--           
        </div>
        <div class="section"> -->
          <h5 class="section-heading">Educational Details</h5>
          <div class="form-grp">
          <div class="image-container">
          <img src="assets\img\others\fact_img03.png">
        </div>
            <div class="form-group col-sm-6">
              <label for="college" class="sub-heading">College Name</label>
              <input id="college" name="college" type="text" required />
            </div>
            <div class="form-group col-sm-6">
              <label for="passing-year" class="sub-heading">Passing Year</label>
              <select id="passing-year" name="passing-year" required></select>
            </div>
            <div class="form-group col-sm-6">
              <label for="state" class="sub-heading">State</label>
              <input id="state" name="state" type="text" required />
            </div>
            <div class="form-group col-sm-6">
              <label for="tech" class="sub-heading">Pick your Skills</label>
              <div id="tech" class="multiselect">
                <div id="mySelectLabel" class="selectBox" onclick="toggleCheckboxArea()">
                  <select class="form-select">
                    <option>somevalue</option>
                  </select>
                  <div class="overSelect"></div>
                </div>
                <div id="skills">
                  <label for="python"><input type="checkbox" id="python" onchange="checkboxStatusChange()"
                      value="Python" /> Python</label>
                  <label for="java"><input type="checkbox" id="java" onchange="checkboxStatusChange()" value="Java" />
                    Java</label>
                  <label for="javascript"><input type="checkbox" id="javascript" onchange="checkboxStatusChange()"
                      value="JavaScript" /> JavaScript</label>
                  <label for="php"><input type="checkbox" id="php" onchange="checkboxStatusChange()" value="PHP" />
                    PHP</label>
                  <label for="mysql"><input type="checkbox" id="mysql" onchange="checkboxStatusChange()"
                      value="MySQL" /> MySQL</label>
                  <label for="kotlin"><input type="checkbox" id="kotlin" onchange="checkboxStatusChange()"
                      value="Kotlin" /> Kotlin</label>
                  <label for="c++"><input type="checkbox" id="c++" onchange="checkboxStatusChange()" value="C++" />
                    C++</label>
                  <label for="html"><input type="checkbox" id="html" onchange="checkboxStatusChange()" value="HTML" />
                    HTML</label>
                  <label for="css"><input type="checkbox" id="css" onchange="checkboxStatusChange()" value="CSS" />
                    CSS</label>
                </div>
                <input type="hidden" id="selectedValues" name="selectedValues">

              </div>
              
            </div>
            
          </div>
        </div>
        
        <button type="submit" class="btn">
          Submit
        </button>
      </form>
    </div>
  </div>
  <br>
  <br>
  <footer class="footer-bg" data-bg-color="var(--tg-common-color-dark)">
    <div class="footer__top-wrap">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer-widget">
              <div class="footer__about">
                <div class="footer__logo logo">
                  <a href="index  "><img src="assets/img/logo/secondary_logo.png" alt="img"></a>
                </div>
                <p>when an unknown printer took galley of type and scrambled it to make pspecimen bookt has.</p>
                <ul class="list-wrap m-0 p-0">
                  <li class="address">463 7th Ave, NY 10018, USA</li>
                  <li class="number">+123 88 9900 456</li>
                  <li class="socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer-widget widget_nav_menu">
              <h4 class="fw-title">Resources</h4>
              <ul class="list-wrap">
                <li><a href="about-us  ">About</a></li>
                <li><a href="contact  ">Contact</a></li>
                <li><a href="contact  ">Help Center</a></li>
                <li><a href="#">Refund</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer-widget widget_nav_menu">
              <h4 class="fw-title">Courses</h4>
              <ul class="list-wrap">
                <li><a href="courses  ">Life Coach</a></li>
                <li><a href="courses  ">Business Coach</a></li>
                <li><a href="courses  ">Health Coach</a></li>
                <li><a href="courses  ">Development</a></li>
                <li><a href="courses  ">Web Design</a></li>
                <li><a href="courses  ">SEO Optimize</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="footer-widget">
              <h4 class="fw-title">Subscribe Newsletter</h4>
              <div class="footer__newsletter">
                <p class="desc">Known printer took galley type and
                  scrambled it to make.</p>
                <form action="#">
                  <input type="email" placeholder="Enter your email">
                  <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright__wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="copyright__text">
              <p>Copyright © 2023 eduvalt. All rights reserved.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="copyright__menu">
              <ul class="list-wrap d-flex flex-wrap justify-content-center justify-content-lg-end">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/jquery.odometer.min.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/tween-max.min.js"></script>
  <script src="assets/js/select2.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/slick-animation.min.js"></script>
  <script src="assets/js/tg-cursor.min.js"></script>
  <script src="assets/js/vivus.min.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    window.onload = (event) => {
      initMultiselect();
    };

    function initMultiselect() {
      checkboxStatusChange();

      document.addEventListener("click", function (evt) {
        var flyoutElement = document.getElementById('tech'),
          targetElement = evt.target; // clicked element

        do {
          if (targetElement == flyoutElement) {
            // This is a click inside. Do nothing, just return.
            //console.log('click inside');
            return;
          }

          // Go up the DOM
          targetElement = targetElement.parentNode;
        } while (targetElement);

        // This is a click outside.
        toggleCheckboxArea(true);
        //console.log('click outside');
      });
    }

    function checkboxStatusChange() {
      var multiselect = document.getElementById("mySelectLabel");
      var multiselectOption = multiselect.getElementsByTagName('option')[0];

      var values = [];
      var checkboxes = document.getElementById("skills");
      var checkedCheckboxes = checkboxes.querySelectorAll('input[type=checkbox]:checked');

      for (const item of checkedCheckboxes) {
        var checkboxValue = item.getAttribute('value');
        values.push(checkboxValue);
      }

      var dropdownValue = "Nothing is selected";
      if (values.length > 0) {
        dropdownValue = values.join(', ');
      }

      multiselectOption.innerText = dropdownValue;
      var selectedValuesInput = document.getElementById('selectedValues');
      selectedValuesInput.value = dropdownValue;
    }

    function toggleCheckboxArea(onlyHide = false) {
      var checkboxes = document.getElementById("skills");
      var displayValue = checkboxes.style.display;

      if (displayValue != "block") {
        if (onlyHide == false) {
          checkboxes.style.display = "block";
        }
      } else {
        checkboxes.style.display = "none";
      }
    }

    var currentYear = new Date().getFullYear();
    var selectPassingYear = document.getElementById('passing-year');

    for (var year = currentYear; year <= currentYear + 10; year++) {
      var option = document.createElement('option');
      option.value = year;
      option.textContent = year;
      selectPassingYear.appendChild(option);
    }
  </script>
</body>

</html>