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
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Default</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1">
                     </div>
                     <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                     </div>
                     <label for="basic-url">Your URL</label>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                           <span class="input-group-text">.00</span>
                        </div>
                     </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text text-area">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Simple Icon</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon4"><i class="las la-bell font-size-20"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                           aria-describedby="basic-addon4">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                           aria-describedby="basic-addon5">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon5"><i class="las la-bell font-size-20"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Spinning Icon</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon6"><i class="fa fa-spinner fa-spin"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                           aria-describedby="basic-addon6">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                           aria-describedby="basic-addon7">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon7"><i class="fa fa-spinner fa-spin"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Switch</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <div class="custom-control custom-switch custom-switch-color">
                                 <input type="checkbox" class="custom-control-input bg-primary" id="customSwitch01"
                                    checked="">
                                 <label class="custom-control-label" for="customSwitch01"></label>
                              </div>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <div class="custom-control custom-switch custom-switch-color">
                                 <input type="checkbox" class="custom-control-input bg-success" id="customSwitch02"
                                    checked="">
                                 <label class="custom-control-label" for="customSwitch02"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Buttons with dropdowns</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Dropdown </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Dropdown </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Segmented buttons</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button type="button" class="btn btn-primary">Action</button>
                           <button type="button" class="btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="las la-angle-down"></i>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        <div class="input-group-append">
                           <button type="button" class="btn btn-outline-secondary">Action</button>
                           <button type="button" class="btn btn-secondary dropone dropdown-toggle  dropdown-toggle-split"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="las la-angle-down"></i>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom select</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group mb-4">
                        <select class="custom-select" id="inputGroupSelect02">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                     </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <select class="custom-select" id="inputGroupSelect03">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Sizing</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="input-group input-group-sm mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default"
                           aria-describedby="inputGroup-sizing-default">
                     </div>
                     <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Dropdown Icon</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
      
                        <div class="input-group-prepend">
                           <button class="btn btn-primary  dropone dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"><i class="las la-cog font-size-20"></i></button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1 "></i>Right </p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                           <button class="btn btn-success dropone dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"><i class="las la-cog font-size-20"></i></button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Checkboxes</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <input type="checkbox" aria-label="Text input with checkbox">
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox"
                           aria-describedby="basic-addon1">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox"
                           aria-describedby="basic-addon5">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <input type="checkbox" aria-label="Text input with checkbox" checked>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Radios</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <input type="radio" name="custom-radio-1" checked>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Checkbox">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Checkbox">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <input type="radio" name="custom-radio-1" checked>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Multiple inputs</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="input-group">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="first">First and last name</span>
                           </div>
                           <input type="text" class="form-control">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Multiple addons</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                           <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                           <span class="input-group-text">$</span>
                           <span class="input-group-text">0.00</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom select</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-primary" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username">
                        <div class="input-group-append">
                           <button class="btn btn-primary" type="button">Button</button>
                        </div>
                     </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-primary" type="button">Button</button>
                           <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username">
                        <div class="input-group-append">
                           <button class="btn btn-outline-primary" type="button">Button</button>
                           <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom file input</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile01">
                           <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group mb-4">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile02">
                           <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text" id="upload">Upload</span>
                        </div>
                     </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile03">
                           <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile04">
                           <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
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