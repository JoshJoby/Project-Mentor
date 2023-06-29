
<!doctype html>
<html lang="en" dir="">
  <head>
      <title>Webkit |  Documentation</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="iqonic themes">
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <!-- FontAwesome JS -->
      <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
      <!-- Global CSS -->
      <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
      <!-- vendor CSS -->
      <link rel="stylesheet" href="assets/vendor/prism/prism.css">
      <link rel="stylesheet" href="assets/vendor/elegant_font/css/style.css">
      
      <!-- Theme CSS -->
      <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
      <style>
      :root{
        --doc-primary-color: #5773FF;
        --doc-body-color: #f9f9fb;
      }
      </style>  </head>
  <body class="body-green  ">
    <div class="page-wrapper">
      <header id="header" class="header">
        <div class="container">
            <div class="branding">
                <h1 class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="logo" class="logo-img">
                        <span class="text-highlight"><b>Webkit</b></span><span class="text-bold ml-3">Docs</span>
                    </a>
                </h1>
      
            </div><!--//branding-->
      
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Quick Start</li>
            </ol>
      
        </div><!--//container-->
      </header><!--//header--><div class="doc-wrapper">
        <div class="container">
            <div class="doc-body row">
                <div class="doc-content col-md-9 col-12 order-1">
                    <div class="content-inner">
                        <section id="intro-section" class="doc-section">
                            <div class="row">
                                <div class="col-md-12 left-align">
                                    <h2 class="sub-title">Introduction<hr></h2>
                                        <div class="row">
                                            <div class="col-md-12 full">
                                                <div class="intro1">
                                                    <ul>
                                                        <li><strong>Item Name : </strong>Webkit | HTML Inventory Admin Template</li>
                                                        <li><strong>Item Version : </strong> v 1.0</li>
                                                        <li><strong>Author  : </strong> <a href="https://themeforest.net/user/iqonicdesign/portfolio" target="_blank">Iqonic Design</a></li>
                                                        <li><strong>Support Forum : </strong> <a href="https://iqonic.desky.support/" target="_blank">https://iqonic.desky.support/</a></li>
                                                        <li><strong>License : </strong> <a href="https://themeforest.net/licenses/standard" target="_blank">Themeforest License</a></li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div>
                                                    <p>First of all, Thank you so much for purchasing this template and for being my loyal customer.</p>
                                                    <p>This documentation is to help you regarding each step of customization. Please go through the documentation carefully to understand how this template is made and how to edit it properly. Basic HTML and CSS knowledge is required to customize this template. You may learn basics <a href="https://www.w3schools.com/" target="_blank">here</a>, <a href="https://developer.mozilla.org/" target="_blank">here</a> and <a href="http://learn.shayhowe.com/html-css/building-your-first-web-page/" target="_blank">here</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section id="quick-start-section" class="doc-section">
                            <div class="row">
                            <div class="col-md-12 full">
                                <h2 class="sub-title">Quick Start <hr></h2>
                                <p>Get details about Requirements, Basic Installation, Structure, Color mode, Logo, favicon and loader setup your project with easy steps.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-md-12 full">
                                <section class="section" id="requirements">
                                      <h4>File Structure</h4>
                                    <p>Here is the <strong>general File structure of the template:</strong></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                                  <div>
                                                    <ul id="myfiles">            
                                                        <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>html</span>
                                                            <ul class="list-inline">
                                                                <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>assets</span>
                                                                        <ul>
                                                                            <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>css</span></li>
                                                                            <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>js</span></li>
                                                                            <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>images</span></li>
                                                                            <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>vendor</span></li>
                                                                        </ul>
                                                                </li>
                                                                <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>app</span>
                                                                        <ul>
                                                                            <li><i class="fa fa-file mr-2" aria-hidden="true"></i><span>all app html pages</span></li>
                                                                        </ul>
                                                                </li>
                                                                <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>backend</span>
                                                                    <ul>
                                                                        <li><i class="fa fa-file mr-2" aria-hidden="true"></i><span>all backend html pages</span></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>documentation</span>
                                                                    <ul>
                                                                        <li><i class="fa fa-folder-open mr-2" aria-hidden="true"></i><span>asset</span></li>
                                                                        <li><i class="fa fa-file mr-2" aria-hidden="true"></i><span>index.html</span></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                               </div>
                                        </div>
                                    </div>
                                    </section>
                            <div id="basic-installation"  class="section-block">
                            <h2 class="section-title">Installation</h2>
                                <h3 class="block-title py-2">Basic Installation</h3>
                                <p>Steps to be followed for getting started with the template:</p>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <h4 id="html-install">HTML</h4>
                                            <ol>
                                               <li>Open <span class="text-red">HTML</span> folder to find all the Template files.</li>
                                               <li>You need to upload these files using FTP on your server.</li>
                                               <li>
                                                  Make sure you maintain the structure while uploading the required files/folders:
                                                  <ul class="mt-2">
                                                     <li><i class="fa fa-folder-open" aria-hidden="true"></i><span class="text-highlight"> HTML/assets/css</span> - Stylesheet Folders</li>
                                                     <li><i class="fa fa-folder-open" aria-hidden="true"></i><span class="text-highlight"> HTML/assets/images</span> - Image Folders</li>
                                                     <li><i class="fa fa-folder-open" aria-hidden="true"></i><span class="text-highlight"> HTML/assets/js</span> - Javacript Folders</li>
                                                     <li><i class="fa fa-folder-open" aria-hidden="true"></i><span class="text-highlight"> HTML/assets/vendor</span> - Vendor Folder</li>
                                                    <li><i class="fa fa-folder-open" aria-hidden="true"></i><span class="text-highlight"> HTML/app</span> - App Folder</li>
                                                     <li><i class="fa fa-folder-open" aria-hidden="true"></i><span class="text-highlight"> HTML/backend/index.html</span> - Index File/Homepage</li>
                                                  </ul>
                                                  Other files can be used according to your convenience.
                                               </li>
                                               <li>Now that you have followed these steps, your basic installation is complete and ready to flaunt your site to the world.</li>
                                            </ol>
                                    </div>
                                </div><!--//row-->
                            </div><!--//section-block-->
                            <div id="basic-structure"  class="section-block">
                                <h3 class="block-title">HTML Structure</h3>
                                <p>Here is the <strong>general HTML structure of the template:</strong></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
[Page meta, page css, page js files, page title etc...]
&lt;/head&gt;
<p> &lt;body&gt;

   &lt;!-- preloader --&gt;
   &lt;div  id=&quot;loading&quot; &gt; [LOADER CONTENT] &lt;/div&gt;
   &lt;!--preloader --&gt;

   &lt;!--header --&gt;
   &lt;header&gt;
</p>
<p> &lt;/header&gt;
   &lt;!--header --&gt;

   &lt;!--main-content- --&gt;
   &lt;div class=&quot;main-content&quot; &gt;
   &lt;!--Section 1- --&gt;
   &lt;section&gt;
   [SECTION 1 CONTENT]   
   &lt;/section&gt;
   &lt;!--Section 1- --&gt;
    &lt;!--Section 2- --&gt;
   &lt;section&gt;
   [SECTION 2 CONTENT]   
   &lt;/section&gt;
   &lt;!--Section 2- --&gt;
   &lt;div&gt;
   &lt;!--main-content- --&gt;
   &lt;!--footer- --&gt;
   &lt;footer class=&quot;iq-footer2&quot; &gt;
   [FOOTER_CONTENT]   
   &lt;/footer&gt;
   &lt;!--footer- --&gt;
  [PAGE JAVASCRIPTS HERE]   
 &lt;/body&gt;
&lt;/html&gt;
</p>
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                            </div><!--//section-block-->
                            <div id="basic-css"  class="section-block">
                                <h3 class="block-title">CSS Structure</h3>
                                <p>Here is the <strong>general CSS structure of the template:</strong></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;!-- Backend CSS --&gt;
&lt;link rel="stylesheet" href=".../assets/css/backend.min.css"&gt;

&lt;!-- fontawesome CSS --&gt;
&lt;link rel="stylesheet" type="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"&gt;

&lt;!-- line-awesome CSS --&gt;
&lt;link rel="stylesheet" href=".../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css"&gt;

&lt;!-- remixicon CSS --&gt;
&lt;link rel="stylesheet" href=".../assets/vendor/remixicon/fonts/remixicon.css"&gt;

&lt;!-- dripicons CSS --&gt;
&lt;link rel="stylesheet" href="...assets/vendor/@icon/dripicons/dripicons.css"&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div><!--//section-block css-->

                            <div id="basic-js"  class="section-block">
                                <h3 class="block-title">Javascript Structure</h3>
                                <p>Here is the <strong>general Javascript structure of the template:</strong></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;!-- Backend-bundle JS --&gt;
&lt;script src="../assets/js/backend-bundle.min.js" &gt;&lt;/script&gt;

&lt;!-- Ionicons  --&gt;
&lt;script src="../assets/vendor/ionicons/dist/ionicons.js"&gt;&lt;/script&gt;

&lt;!--  Flextree --&gt;
&lt;script src="../assets/js/flex-tree.min.js" &gt;&lt;/script&gt;
&lt;script src="../assets/js/tree.js" &gt;&lt;/script&gt;

&lt;!-- Table Treeview Javascript --&gt;
&lt;script src="../assets/js/table-treeview.js"&gt;&lt;/script&gt;

&lt;!-- Masonary Javascript --&gt;
&lt;script src="../assets/js/masonry.pkgd.min.js"&gt;&lt;/script&gt;
&lt;script src="../assets/js/imagesloaded.pkgd.min.js"&gt;&lt;/script&gt;

&lt;!-- Mapbox Javascript --&gt;
&lt;script src="../assets/js/mapbox-gl.js"&gt;&lt;/script&gt;
&lt;script src="../assets/js/mapbox.js"&gt;&lt;/script&gt;

&lt;!-- SweetAlert Javascript --&gt;
&lt;script src="../assets/js/sweetalert.js"&gt;&lt;/script&gt;

&lt;!-- Vectoe Map Javascript --&gt;
&lt;script src="../assets/js/vector-map-custom.js"&gt;&lt;/script&gt;

&lt;!--  Customizer Javascript  --&gt;
&lt;script src="../assets/js/customizer.js" &gt;&lt;/script&gt;

&lt;!-- Chart Custom JavaScript --&gt;
&lt;script src="../assets/js/chart-custom.js"&gt;&lt;/script&gt;

&lt;!-- Slider JavaScript --&gt;
&lt;script src="../assets/js/slider.js"&gt;&lt;/script&gt;

&lt;!-- App JavaScript --&gt;
&lt;script src="../assets/js/app.js"&gt;&lt;/script&gt;
                                        </code></pre>

                                    </div>
                                </div>
                            </div><!--//section-block Javascript Structure-->

                            <div id="basic-favicon"  class="section-block">
                                <h3 class="block-title">For Favicon icon</h3>
                                <p>Favicon is an icon associated with the URL that is displayed at various places, such as in a browser’s address bar or next to the site name in a bookmark list.</p>
                                <p>You can add a Favicon to your Website using the following code:</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">&lt;link rel=&quot;shortcut icon&quot; href=&quot;images/favicon.ico&quot;&gt;</code></pre>
                                    </div>
                                </div>
                            </div><!--//section-block favicon-->

                            <div id="basic-loading"  class="section-block">
                                <h3 class="block-title">For Page Loading Transitions</h3>
                                <p>Page Loading Transitions are enabled by default. If you wish to disable the page loading transition you can simply delete with the help of below section code</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre> <code class="language-markup">&lt;div id="loading"&gt;
    &lt;div id="loading-center"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                                    </div>
                                </div>
                            </div><!--//section-block loading-->
                            <div id="basic-logo"  class="section-block">
                                <h3 class="block-title">For Logo</h3>
                                <p>The Logo Container can be found in the Header Container - <span class="atv"> #header</span>. Replace <span class="atv">"logo.png"</span> with your own logo image URL.</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre> <code class="language-markup">&lt;ul class="menu-logo"&gt;
    &lt;li&gt;
        &lt;a href="index.html"&gt;
            &lt;img src="../assets/images/logo.png" alt="logo"&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>

                                    </div>
                                </div>
                            </div><!--//section-block logo-->
                            <div id="basic-fonts"  class="section-block">
                                <h3 class="block-title">For Changing Fonts</h3>
                                <p> You can add or change the site font from all fonts (used from <a href="https://www.google.com/fonts"> Google Web Font Services</a>). You can choose any one that suits you the best. You can find the font link at the top of the <span class="atv">Style.css</span> in all HTML files. Refer the below example:</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre> <code class="language-markup">&lt;!-- google font --&gt;
&lt;link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,800|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet"&gt; </code></pre>
                                        <br>
                                        <p>To include new font you can simply add another link like this: </p>
                                        <pre> <code class="language-markup">&lt;!-- google font --&gt;
&lt;!-- Robaoto font --&gt;
&lt;link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" /&gt;

&lt;!-- "Nunito",sans-serif font --&gt;
&lt;link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,200;1,300;1,400;1,600&display=swap" rel="stylesheet"&gt;</code></pre>
                                        <br>
                                        <p>In order to change the fonts, you need to edit the above links with your custom font. You can use <a href="https://www.google.com/fonts"> Google Web Font Services</a> (If you plan to use a Google Font or remove it completely.) If you plan to use a self hosted font, here is an Example of using Self Hosted Fonts: <a href="https://css-tricks.com/snippets/css/using-font-face/">Self Hosted Fonts</a></p>

                                    </div>
                                </div>
                            </div><!--//section-block fonts-->

                        </section><!--//doc-section-->
                        <section id="helper-section" class="doc-section">
                            <h2 class="section-title">Helper classes</h2>

                            <div id="basic-padding"  class="section-block">
                                <h3 class="block-title">For section padding</h3>
                                <p>You can add helper class by setting section <span class="atv">padding as top 100px</span> and <span class="atv"> bottom 100px</span>.
                                    <br> Add <span class="atv">overview-block-ptb</span> class in <span class="atv">section</span> tag. Refer the below example:
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;section class=&quot;... overview-block-ptb&quot;&gt;
  [YOUR CONTENT]&lt;p&gt;
 &lt;/section&gt;
&lt;/p&gt;
                                        </code></pre>
                                        <p> <span class="badge badge-danger">Note</span> Use this helper class to maintain all page section spacing. You can also use <span class="atv">overview-block-pt</span> for only padding top and <span class="atv">overview-block-pb</span> for only padding bottom. </p>
                                    </div>
                                </div>
                            </div><!--//section-block fonts-->
                            <div class="section-block" id="basic-color">
                                <h3 class="block-title">For Text color</h3>
                                <p>You can add color in your text simply by adding <span class="atv"> .main-color </span> (or any color you want) class. Refer the below example: </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;div class=&quot;text-primary&quot;&gt;
    [YOUR TEXT CONTENT]
&lt;/div&gt;
                                        </code></pre>
                                        <p> <span class="badge badge-danger">Note</span> You can also include 4 color helper class (i-e, <span class="atv">text-gray, text-black, main-color and text-white</span>) in our template. You can add unlimited color class according to your needs. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block" id="basic-background">
                                <h3 class="block-title">For Background color</h3>
                                <p>You can set color in the background simply by adding <span class="atv"> .white-bg</span> (or any other color you want) class. Refer the below example: </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;div class=&quot;bg-primary&quot;&gt;
    [YOUR CONTENT]
&lt;/div&gt;
                                        </code></pre>
                                        <p> <span class="badge badge-danger">Note</span> We include 4 color helper class in our template <span class="atv">text-gray, text-black, main-color and text-white</span>. you can add unlimited color class according to your needs. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block" id="basic-pattern">
                                <h3 class="block-title">For Background Images and pattern</h3>
                                <p>You can use an image in the background with parallax effect by simply adding <span class="atv"> InlineStyle </span> inside div tag. With the help of this you can create your own background. Refer the below example: </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;div style=&quot;background-image:url(Path); &quot;&gt;
    [YOUR CONTENT]
&lt;/div&gt;
                                        </code></pre>
                                        <br>
                                        <p> If your background is small and you want to use repeated background then use styling property <span class="atv"> background-repeat </span> and set the value as <span class="atv">repeat</span> or <span class="atv">no-repeat</span>. Refer the below example:</p>

                                        <pre><code class="language-markup">
&lt;div style=&quot;background-image:url(Path); background-repeat:no-repeat;&quot;&gt;
    [YOUR CONTENT]
&lt;/div&gt;
                                        </code></pre>
                                        <br>
                                        <p> If you want to use your background like cover or container then you need to add styling property <span class="atv"> background-size </span> and set the value as <span class="atv">cover</span> or <span class="atv">container</span>. Refer the below example:</p>
                                        <pre><code class="language-markup">
&lt;div style=&quot;background-image:url(Path); background-size:cover;&quot;&gt;
    [YOUR CONTENT]
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block" id="basic-overlay">
                                <h3 class="block-title">For Background overlay</h3>
                                <p>You can use classes like <span class="atv"> .iq-over-black-30, .iq-over-white-20, .iq-over-green-90 </span> with any element in your HTML code. This will help you to apply overlay color on any image or section. Refer the below example:</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <pre><code class="language-markup">
&lt;div class=&quot;iq-over-black-80&quot;&gt;
    [YOUR CONTENT]
&lt;/div&gt;
                                        </code></pre>
                                        <p><strong>Structure: </strong> <span class="atv">.iq-over-{<b>color</b>}-{<b>opacity</b>}</span>. For Example, <span class="atv"> .iq-over-black-80</span></p>
                                    </div>
                                </div>
                            </div>
                        </section><!--//doc-section-->
                        <section id="basic-components" class="doc-section">
                            <h2 class="section-title">Bootstrap Components</h2>
                            <div class="section-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/utilities/text/#text-alignment" target="black">Text Alignments</a>
                                            </li>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/components/alerts/" target="black">Alerts</a>
                                            </li>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/components/badge/" target="black">Badges</a>
                                            </li>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/components/carousel/" target="black">Carousel</a>
                                            </li>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/layout/grid/">Columns</a>
                                            </li>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/content/tables/">Tables</a>
                                            </li>
                                            <li>
                                                <a href="https://getbootstrap.com/docs/4.1/components/buttons/" target="black">Buttons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section><!--//doc-section-->

                        <section id="basic-sliders" class="doc-section">
                            <h2 class="section-title">For Sliders</h2>
                            <div class="section-block">
                                <p>There are 2 different sliders with variety of options. You can apply these sliders on any page you want. The list of the Sliders are:</p>
                                <ul>
                                    <li><strong><i class="fa fa-folder-open" aria-hidden="true"></i> Slick Slider</strong></li>
                                    <li><strong><i class="fa fa-folder-open" aria-hidden="true"></i> Swipper Slider</strong></li>
                                </ul>
                            </div><!--//section-block-->
                        </section><!--//doc-section-->
                        <section id="basic-source" class="doc-section">
                            <h2 class="section-title">Source & Credits</h2>
                            <div class="section-block">
                                <p>All images and videos are for preview purposes only and are not included in the download files. Images are of copyrights under Creative Commons CC0.</p>
                                <br>
                                <h3 class="block-title">Images</h3>
                                <ul>
                                    <li><a href="https://www.bigstockphoto.com/">BigStockPhoto</a></li>
                                    <li><a href="https://www.pexels.com/">Pexels</a></li>
                                    <li><a href="http://www.freepik.com/">Freepik</a></li>
                                    <li><a href="https://pixabay.com/">Pixabay</a></li>
                                </ul>
                                <br>
                                <br>
                                <h3 class="block-title">Scripts</h3>
                                <ul>
                                    <li><a href="https://jquery.com/">Jquery</a></li>
                                    <li><a href="https://github.com/bas2k/jquery.appear/">Jquery appear</a></li>   
                                    <li><a href="https://github.com/mhuggins/jquery-countTo">Counter</a></li>
                                    <li><a href="http://dimsemenov.com/plugins/magnific-popup/">Magnific Popup</a></li>
                                    <li><a href="https://apexcharts.com/">Apex Chart</a></li>
                                </ul>
                                <br>
                                <br>
                                <h3 class="block-title">CSS & Fonts</h3>
                                <ul>
                                    <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
                                    <li><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a></li>
                                    <li><a href="https://icons8.com/line-awesome">Line Awesome</a></li>
                                    <li><a href="https://remixicon.com/">Remixicon</a></li>
                                    <li><a href="https://iconstore.co/icons/dripicons">Dripicons</a></li>
                                    <li><a href="https://www.google.com/fonts">Google Fonts</a></li>
                                </ul>
                            </div><!--//section-block-->
                        </section><!--//doc-section-->

                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                    <div id="doc-nav" class="doc-nav">
                        <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                            <a class="font-weight-bolder nav-link scrollto" href="#intro-section">Introdution</a>
                            <a class="font-weight-bolder nav-link scrollto" href="#quick-start-section">Quick Start</a>                            
                            <nav class="doc-sub-menu nav flex-column">
                                <a class="nav-link scrollto" href="#basic-installation">Basic Installation</a>
                                <a class="nav-link scrollto" href="#basic-structure">HTML Structure</a>
                                <a class="nav-link scrollto" href="#basic-css">CSS Structure</a>
                                <a class="nav-link scrollto" href="#basic-js">Javascript Structure</a>
                                <a class="nav-link scrollto" href="#basic-favicon">For Favicon icon</a>
                                <a class="nav-link scrollto" href="#basic-loading">For Page Loading Transitions</a>
                                <a class="nav-link scrollto" href="#basic-logo">For Logo</a>
                                <a class="nav-link scrollto" href="#basic-fonts">For Changing Fonts</a>
                            </nav><!--//nav-->
                            <a class="font-weight-bolder nav-link scrollto" href="#helper-section">Helper classes</a>
                            <nav class="doc-sub-menu nav flex-column">
                                <a class="nav-link scrollto" href="#basic-padding">For section padding</a>
                                <a class="nav-link scrollto" href="#basic-color">For Text color</a>
                                <a class="nav-link scrollto" href="#basic-background">For Background color</a>
                                <a class="nav-link scrollto" href="#basic-pattern">For Background Images and pattern</a>
                                <a class="nav-link scrollto" href="#basic-overlay">For Background overlay</a>
                            </nav><!--//nav-->
                            <a class="font-weight-bolder nav-link scrollto" href="#basic-components">Bootstrap Components</a>
                            <a class="font-weight-bolder nav-link scrollto" href="#basic-sliders">For Sliders</a>
                            <a class="font-weight-bolder nav-link scrollto" href="#basic-source">Source & Credits</a>
                        </nav><!--//doc-menu-->

                    </div>
                </div><!--//doc-sidebar-->
            </div><!--//doc-body-->
        </div><!--//container-->
    </div><!--//doc-wrapper-->
      <footer id="footer" class="footer text-center">
          <div class="container">
              <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
              <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
          </div><!--//container-->
      </footer><!--//footer-->    </div>
    <!-- Wrapper End-->
    
    <!-- Main Javascript -->
    <script type="text/javascript" src="assets/vendor/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendor/prism/prism.js"></script>
    <script type="text/javascript" src="assets/vendor/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="assets/vendor/stickyfill/dist/stickyfill.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>