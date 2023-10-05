<?php
session_start();
include '../layout/expert-header.php';
include 'query-controller.php';
if (!isset($_SESSION["expert_id"])) {
    header("Location: ../landing");
} ?>

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
</head>

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
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                    <h5>Incoming Queries</h5>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="list" data-toggle-extra="tab-content">
                    <div class='col-lg-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <?php
                                    if (isset($_SESSION['query_rows'])) {
                                        $queryRows = $_SESSION['query_rows'];
                                        $inc = 1; //counter variable to increment the number of querys
                                        foreach ($queryRows as $row) {

                                            echo "<div id='card-onclick" . $row['query_id'] . "' data-toggle='collapse' data-target='#collapseEdit" . $row['query_id'] . "' class='col-lg-12'>
                                            <div class='card card-widget query-card'>
                                    <div class='card-body'>
                                        <div class='d-flex flex-wrap align-items-center justify-content-between'>
                                            <div class='d-flex align-items-center'>
                                                <div>
                                                    <h5 class='mb-2'>" . $row['query_id'] . "</h5>
                                                </div>
                                            </div>
                                            <div class='media align-items-center mt-md-0 mt-3'>";
                                             if (empty($row['response'])) {
                                                 echo "<a href='#' class='btn mr-3'>pending</a>";
                                             } else {
                                                 echo "<a href='#' class='btn mr-3'>done</a>";
                                             }
                                         echo "
                                                
                                            </div>
                                        </div>  
                                    </div>
                                </div>                                                                                                        
                                <div class='collapse' id='collapseEdit" . $inc . "'>                                           
                                    <div class='card card-list query-card'>   
                                        <div class='card-body'>
                                            <div class='card mb-3'>
                                                <div class='card-body'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>                                                        
                                                            <h5 class='mb-2'>Querie </h5>
                                                            <p class='mb-0'> " . $row['query'] . "</p>
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
                                                                    echo "<div style=\"text-align: left !important; \" class=\"pl-3  btn-new\">
                                                                                        <a href=\"#\" class=\"btn btn-primary\" data-target=\"#query-responce\" data-toggle=\"modal\" data-query-id=\"" . $row['query_id'] . "\">Respond</a>
                                                                                    </div>";
                                                                } else {
                                                                    echo "<p class='mb-0'>" . $row['response'] . "</p>";
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

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Page end  -->
                        </div>
                    </div>
                </div>
                <!-- Wrapper End  -->

                <!-- Modal list start -->


                <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="query-responce">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-block text-center pb-3 border-bttom">
                                <h3 class="modal-title" id="exampleModalCenterTitle01">New Response</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form method="POST" action="submit_response.php">
                                        <input type="hidden" name="query_id">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="exampleInputText040" class="h5">Response Message</label>
                                                <textarea class="form-control" id="exampleInputText040" name="response_message"
                                                style="width: 390%;" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap align-items-center justify-content-center mt-4">
                                                <button type="submit" name="submit" class="btn btn-primary mr-3">Submit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <script>
                    // Function to set the hidden input value
                    function setQueryId(queryId) {
                        document.querySelector('input[name="query_id"]').value = queryId;
                    }

                    // Add an event listener to all elements with id starting with 'card-onclick'
                    document.addEventListener('DOMContentLoaded', function () {
                        var cardOnClickElements = document.querySelectorAll('[id^="card-onclick"]');
                        cardOnClickElements.forEach(function (element) {
                            element.addEventListener('click', function () {
                                // Extract the query ID from the element's id attribute
                                var queryId = element.getAttribute('id').replace('card-onclick', '');
                                // Call the setQueryId function to update the hidden input value
                                setQueryId(queryId);
                            });
                        });
                    });
                </script>


</body>

</html>