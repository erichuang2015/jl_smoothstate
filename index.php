<?php

$title = "Jaxx Liberty | Home";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>

<!--banner-->

<div role="banner" class="container-fluid scene_element scene_element--fadeindown">
    <div class="row bg--home-banner min-700-lg pt-5">
        <div class="col-lg-9 d-flex flex-column justify-content-center align-items-start text-left text-light p-5 m-0 scene_element scene_element--fadein">
            <h1 class="h2 text-dark font-weight-light pb-2 pt-3 scene_element scene_element--fadeinright scene_element--delayed">Jaxx Liberty Digital Asset Wallet</h1>
            <h3 class="knockout-home page-title font-weight-bold scene_element scene_element--fadeinup scene_element--delayed">Manage, track, explore, send, and receive.</h3>
            <hr class="hr-big border-0 bg-orange">
            <h4 class="h1 font-weight-bold orange scene_element scene_element--fadeinup scene_element--delayed">All in one app.</h4>
        </div>
        <div class="offset-lg-3"></div>       
    </div>
</div>

<div role="banner" class="m_scene container-fluid p-3 bg-white text-secondary scene_element scene_element--fadeinup">
    <div id="sec-1" class="row d-flex min-700-lg m-4 bg-light rounded shadow-lg ">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12 scene_element scene_element--fadeinright">
            <h2 class="section-title font-weight-bold">Your all-in-one digital asset platform.</h2>
<!--            <hr class="hr-big border-0 bg-orange">-->
            <p class="h5 pt-2 m-0 text-secondary">Easily manage and exchange more than 85 digital assets including Bitcoin, Ethereum, Litecoin, and Dash.</p>
            <a href="/features.php" class="btn btn-lg btn-outline-orange mt-3">Learn More</a>
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center min-300 p-3 scene_element scene_element--fadeinleft">
           <div class="device-wrapper">
              <div class="device" data-device="galaxyS5" data-orientation="portrait" data-color="white">
                <div class="screen">
                  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="w-100" src="/assets/img/jaxx-screenshots/iphone-6/jaxx-home.PNG" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="/assets/img/jaxx-screenshots/iphone-6/jaxx-app-main.PNG" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="/assets/img/jaxx-screenshots/iphone-6/jaxx-menu.PNG" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="/assets/img/jaxx-screenshots/iphone-6/jaxx-backup.PNG" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="/assets/img/jaxx-screenshots/iphone-6/jaxx-markets.PNG" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="/assets/img/jaxx-screenshots/iphone-6/jaxx-customize.PNG" alt="Third slide">
                        </div>
                      </div>
<!--
                      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
-->
                    </div>
                    <!--end carousel-->
                </div>
              </div>
            </div>
            <!--end device-->
        </div>
    </div><!--end row-->
    
<!--security-->
    <div class="row d-flex min-700-lg m-4 rounded shadow-lg scene_element scene_element--fadeinleft">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg--home-security min-300 p-0">
            <img class="img-full" src="/assets/img/jaxx-android-girl-hand.png" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">
            <h2 class="section-title font-weight-bold m-0">Secure. Private. Trusted.</h2>
            <p class="h5 pt-2 m-0 text-secondary">More than just a feature. Security is our foundation.</p>
            <a class="btn btn-lg btn-outline-orange mt-3" href="/security.php">Explore</a>
        </div>
        
    </div><!--end row-->
    
    <!--multi platform + download-->
    <div id="sec-2" class="row d-flex min-700-lg bg-white m-4 rounded shadow-lg scene_element scene_element--fadeinright">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12">
            <h2 class="section-title font-weight-bold m-0">Available on mobile, desktop and web.</h2>
            <p class="h5 pt-2 m-0 text-secondary">Download for Android, iOS, Mac OS X, Windows, Linux, & Google Chrome.</p>
            <div class="btn-group">
                <button id="download" type="button" class="btn btn-lg btn-outline-orange dropdown-toggle mt-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Start Now</button>
                <div class="dropdown-menu" >
                <a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank" onclick="googleAnalyticsTrigger('Android', 'Home_Section2')">Android</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" onclick="googleAnalyticsTrigger('iOS', 'Home_Section2')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank">iOS</a>
                 <div class="dropdown-divider"></div>
                <!--chrome extension-->
                <a class="dropdown-item" role="button" onclick="googleAnalyticsTrigger('Desktop', 'Home_Section2')" href="/downloads.php">Desktop</a>
                <div class="dropdown-divider"></div>
                <!--chrome extension-->
                <a class="dropdown-item" role="button" onclick="googleAnalyticsTrigger('Chrome', 'Home_Section2')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank">Chrome</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg--home-devices min-300 p-4"></div>
    </div><!--end row-->

    <!--testimonials-->
    <div class="row d-flex min-500 m-4 rounded shadow-lg scene_element scene_element--fadeindown">
      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center text-light min-500 bg--home-testimonials p-5 o-12">
          <h2 class="section-title font-weight-bold">What blockchain leaders are saying</h2>
      </div>
    </div><!--end row-->

    <!--testimonial content-->

    <div class="row d-flex justify-content-center aligh-items-center min-400 bg-light m-4 p-5 rounded shadow-lg">
        <div class="col-xl-3 col-lg-6 p-3">
            <i class="fa fa-quote-right p-0 pb-2 fa--stroke fa--stroke-o"></i>
            <p class="border-right pr-3">"I look forward to seeing the new Jaxx Liberty and how the broader DigiByte community will use it."</p>
            <p  class="h5 font-weight-bold">Josiah Spackman</p>
            <footer class="blockquote-footer orange">Ambassador, DigiByte Foundation</footer>
        </div>
        <div class="col-xl-3 col-lg-6 p-3">
            <i class="fa fa-quote-right p-0 pb-2 fa--stroke fa--stroke-o"></i>
            <p class="border-right pr-3">"Polymath welcomes the launch of Jaxx Liberty. We chose Jaxx Liberty as our go-to wallet for the POLY token community."</p>
            <p class="h5 font-weight-bold">Trevor Koverko</p>
            <footer class="blockquote-footer orange">Co-Founder & CEO, Polymath</footer>
        </div>
        <div class="col-xl-3 col-lg-6 p-3">
            <i class="fa fa-quote-right p-0 pb-2 fa--stroke fa--stroke-o"></i>
            <p class="border-right pr-3">"We’re very happy to partner with Jaxx, a highly-secure and very easy-to-use wallet that is the first to support RSK"</p>
            <p class="h5 font-weight-bold">Diego Gutierrez Zaldivar</p>
            <footer class="blockquote-footer orange">CEO & Co-Founder, RSK Labs</footer>
        </div>
        <div class="col-xl-3 col-lg-6 p-3">
            <i class="fa fa-quote-right p-0 pb-2 fa--stroke fa--stroke-o"></i>
            <p class="border-right pr-3">“Jaxx is a partner we rely on. We can be sure Jaxx Liberty will serve and support our expanding ecosystem.”</p>
            <p class="h5 font-weight-bold">Malcolm CasSelle</p>
            <footer class="blockquote-footer orange">President, WAX / CIO, OPSkins</footer>
        </div>
    </div><!--end testimonials-->

    <!--community-->

    <div class="row d-flex bg-white min-500 m-4 rounded shadow-lg bg--home-community">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left text-light min-400 p-5 o-12">
            <h2 class="section-title font-weight-bold m-0">Our Ecosystem</h2>
            <p class="h5 pt-2 m-0">Uniting over 85 digital assets and communities.</p>
            <a class="btn btn-lg btn-outline-orange mt-3" href="/community.php">Join Us</a>
        </div>
        <div class="offset-lg-6"></div>
    </div><!--end row-->

    <!--Partners-->

    <div class="row d-flex bg-white m-4 min-500 rounded shadow-lg">
        <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center min-400 py-5">
            <h2 class="section-title font-weight-bold m-0">Our Friends</h2>
            <p class="h5 pt-2 m-0">Jaxx Liberty brings together a variety of blockchain projects.</p>
            <a class="btn btn-lg btn-outline-orange mt-3" href="/community.php">Learn More</a>
            <img class="img w-50 mt-4 ds" src="/assets/img/Jaxx-Liberty-Partner-Logos-Laptop-Trans/7.png" alt="">
        </div>
    </div><!--end row-->

    <!--card grid-->

   <div class="row d-flex min-50 m-4 rounded">
   <div class="card-deck">
     <div class="card shadow-lg text-secondary">
        <img class="card-img-top" src="/assets/img/jaxx-support-banner.jpg" alt="Card image cap">
          <div class="card-body text-left p-5">
              <h4 class="h3 card-title font-weight-bold">Jaxx Support</h4>
              <p class="card-text text-muted">Need help? Our User Success Team is available to answer all of your questions.</p>
              <a class="btn btn-lg btn-outline-orange mt-3" href="https://support.decentral.ca/hc/en-us" target="_blank">Get Help</a>
        </div>
      </div><!--end card-->

      <div class="card shadow-lg text-secondary">
        <img class="card-img-top" src="/assets/img/jaxx-home-banner.jpg" alt="Card image cap">
        <div class="card-body text-left p-5">
          <h4 class="h3 card-title font-weight-bold">Jaxx Blog</h4>
          <p class="card-text">Follow the Jaxx Blog for news and updates about the Jaxx Liberty ecosystem.</p>
          <a class="btn btn-lg btn-outline-orange mt-3" href="https://blog.jaxx.io/" target="_blank">Read More</a>
        </div>
      </div><!--end card-->

      <div class="card shadow-lg text-secondary">
        <img class="card-img-top" src="/assets/img/jaxx-people-2.jpg" alt="Card image cap">
        <div class="card-body text-left p-5">
          <h4 class="h3 card-title font-weight-bold">About Decentral</h4>
          <p class="card-text text-muted">Jaxx Liberty was developed by Anthony Di Iorio, co-founder of Ethereum, and founder and CEO of Decentral Inc.</p>
          <a class="btn btn-lg btn-outline-orange mt-3" href="/about.php">Find Out</a>
        </div>
      </div><!--end card-->
    </div><!--end card deck-->
    </div><!--end row-->

    <!-- social-->
    <div id="sec-5" class="row d-flex text-secondary m-4 shadow-lg">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center bg-light min-300 p-5 o-12">
            <h2 class="section-title font-weight-bold m-0">Get Social</h2>
            <p class="h5 pt-2 m-0">Join the Jaxx Liberty community today.</p>
            <div class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xs-3">
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="col-xs-3">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="col-xs-3">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <div class="col-xs-3">
                        <i class="fa fa-youtube"></i>
                    </div>
                    <div class="col-xs-3">
                        <i class="fa fa-reddit"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg--home-social min-300 p-4">
        </div>
    </div><!--end row-->

    <!--download-->
    <div id="sec-2" class="row d-flex text-secondary m-4 rounded shadow-lg">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg--home-download min-300 p-4"></div>
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center bg-light min-50 p-5 o-12">
            <h2 class="section-title font-weight-bold m-0">Reclaim Your Liberty</h2>
            <p class="h5 pt-2 m-0">Take control of your digital life. Download Jaxx Liberty. It’s 100% free.</p>
            <a href="/downloads.php" onclick="googleAnalyticsTrigger('Downloads_Page', 'Features_CTA')">
            <button class="btn btn-lg btn-outline-orange my-3">Start Now</button>
            </a>
        </div>
    </div><!--end row-->       
</div><!--end container-->

<?php

include 'includes/footer.php';

?>