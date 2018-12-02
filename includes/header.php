
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php 
        if(isset($title) && !empty($title)) { 
           echo $title; 
        } 
        else { 
           echo "Default title tag"; 
        } ?></title>
        <!--core meta data-->
        <meta name="description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
        <meta name="keywords" content="Jaxx Liberty,Blockchain,Cryptocurrency,Decentral Inc.,Anthony Di Iorio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">
        <!--icons-->
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <!-- Open Graph Meta Data -->
        <meta property="og:description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
        <meta property="og:image" content="https://www.jaxx.io/img/jaxx-banner-ss.jpg">
        <meta property="og:site_name" content="jaxx.io">
        <meta property="og:title" content="Jaxx Liberty: Your trusted all-in-one multi-asset digital wallet.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://jaxx.io">
        <!-- Twitter Card Meta Data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="https://jaxx.io">
        <meta name="twitter:creator" content="Decentral">
        <meta name="twitter:title" content="Jaxx Liberty: Your trusted all-in-one multi-asset digital wallet.">
        <meta name="twitter:description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
        <meta name="twitter:image" content="https://www.jaxx.io/img/jaxx-banner-ss.jpg">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/html5-device-mockups/dist/device-mockups.min.css">
        <link rel="stylesheet" href="assets/css/keyframes.css">
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/pageTransitions.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/main.css">
        <!--cookies banner-->
        <link rel="stylesheet" href="/js/cookieconsent.min.css">
        <script>            
            window.addEventListener("load", function(){
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                //   "background": "#eb6c44",
                  "background": "#000",
                  "text": "#ffffff"
                },
                "button": {
                  "background": "transparent",
                  "text": "#fff",
                  "border": "#fff"
                }
              },
              "position": "bottom-left",
                "content": {
                "message": "Like most websites, we use analytics cookies to understand how this site is used — as long as your browser is set to accept them.",
                "dismiss": "Start exploring",
                "link": "Find out more.",
                "href": "https://jaxx.io/thirdparties-current.html"
              },
            })});
        </script>
  </head>
  <body>
    <div class="m-scene" id="main">
       
       <!--nav-->
        <nav class="navbar fixed-top navbar-expand-lg scene_element scene_element--fadeindown">
            <a class="navbar-brand" href="/index.php">
            <img class="jaxx-navbar-brand" src="/assets/img/JaxxLiberty_Logo_RGB_Screen.png" alt="Jaxx Liberty">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <img class="jaxx-mobile-menu" src="/assets/img/jaxx-menu-orange.png" alt="Jaxx Liberty Menu">
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/features.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/downloads.php" onclick="googleAnalyticsTrigger('Downloads_Page', 'Menu')">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/security.php">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/community.php">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.jaxx.io/" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://support.decentral.ca/hc/en-us" onclick="googleAnalyticsTrigger('Support_Page', 'Menu')">Support</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end nav-->  