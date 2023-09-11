<?php
session_start();
// if (isset($_GET['param'])) {
//     echo $_GET['param'];
// }
include '../layout/super-admin-header.php';
include 'task-controller.php';


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

<body class='  '>
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
                                    <h5>Add Super Administrator</h5>

                                </div>
                            </div>
                        </div>
                    </div>

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