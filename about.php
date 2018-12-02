<?php

$title = "Jaxx Liberty | Home";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>

    <!--jumbotron-->
    <div id="banner" class="jumbotron jumbotron-fluid d-flex flex-column justify-content-center align-items-center text-center text-light bg--about-banner min-700-lg p-5 mb-0 scene_element scene_element--fadeindown">
        <div class="row">
            <div class="col-lg-12 p-5">
                <div class="d-flex flex-column justify-content-center align-items-center pb-5 rellax" data-rellax-speed="-2">
                    <img class="jaxx-navbar-brand mt-5 mb-2" src="/assets/img/Jaxx_Reversed_Icon_Orange_Large_RGB_Screen.png" alt="Jaxx Liberty Community">
                    <h1 class="page-title m-0 mb-2 scene_element scene_element--fadeinleft .scene_element--delayed">About Us</h1>
                    <hr class="hr-big border-0 bg-orange scene_element scene_element--fadeinright .scene_element--delayed">
                    <h2 class="site-sub-title scene_element scene_element--fadeinup .scene_element--delayed">Find our more about Decentral and Jaxx Liberty</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 scene_element scene_element--fadeinup">
        <!--row 1-->
        <div class="row d-flex min-500 m-4 rounded shadow-lg">
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center min-300 bg--about-passion o-12"></div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start text-left bg-light min-300 p-5 o-1">
                <h2 class="section-sub-title font-weight-light pb-3">Redefining</h2>
                <p class="border-top py-3 m-0"><span class="font-weight-bold orange">Jaxx Liberty</span> was developed by Anthony Di Iorio, co-founder of Ethereum, and founder and CEO of Decentral Inc. Anthony created Jaxx in 2015 because he saw that, as we move toward an age of value, people need an easy way to manage their digital assets and virtual lives — much like the move to browsers to navigate the Web in an age of information.</p>
            </div>
        </div>
        <!--row 2-->
        <div class="row d-flex min-500 m-4 rounded shadow-lg">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start min-300 text-left bg-light p-5">
                <h2 class="section-sub-title font-weight-light pb-3">Built on Success</h2>
                <p class="border-top py-3 m-0"><span class="font-weight-bold orange">Jaxx</span> is a leading multi-platform wallet that supports over 70 digital assets and tokens. It has been downloaded more than a million times. Jaxx Liberty is its successor.</p>
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center bg--about-jump min-300"></div>
        </div>
        <!--row 3-->
        <div class="row d-flex min-500 m-4 rounded shadow-lg">
            <div class="col-lg-5 bg--about-heart min-300 o-12"></div>
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start text-left min-300 bg-light p-5 o-1">
                <h2 class="section-sub-title font-weight-light pb-3">Blockchain Hub</h2>
                <p class="border-top py-3 m-0">Decentral is a major blockchain hub in Toronto, Canada’s largest city. We are always connect with talented and interesting people, and are continuously expanding our network. Connect with us on our official social media channels.</p>
            </div>
        </div>
        <!--row 4 company-->
        <div class="row d-flex min-500 m-4 rounded shadow-lg">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start min-300 text-left bg-light p-5">
                <h2 class="section-sub-title font-weight-light pb-3">Decentral Inc.</h2>
                <p class="border-top py-3 m-0">We are proudly based in the heart of downtown Toronto’s financial district. Our office hours are 9 am to 5 pm ET.</p>
                <a href="https://www.decentral.ca" target="_blank" onclick="googleAnalyticsTrigger('decentral.ca', 'About_Section3')" class="btn btn-lg btn-orange animsition-link" data-animsition-out-class="fade-out-left-sm" data-animsition-out-duration="800">Visit Decentral</a>
            </div><!--end col-->
            <div class="col-lg-5 bg--about-office min-300"></div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    
<?php

include 'includes/footer.php';

?>