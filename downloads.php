<?php

$title = "Jaxx Liberty | Features";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>
    <!--banner-->

    <div role="banner" class="container-fluid">
        <div class="row bg--downloads-banner min-700-lg pt-5 scene_element scene_element--fadeinleft">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center text-secondary p-5 m-0 scene_element scene_element--fadein">
                <h1 class="page-title font-weight-bold scene_element scene_element--fadeinup scene_element--delayed">Start your journey</h1>
                <h2 class="font-weight-bold orange pt-2 scene_element scene_element--fadeinup scene_element--delayed">Download Jaxx Liberty</h2>
                <a href="/downloads.html" class="btn btn-lg btn-outline-secondary my-3 scene_element scene_element--fadein scene_element--delayed">Start Now</a>
            </div>
        </div>
    </div>

    <div class="m-page">

      <div class="container-fluid p-0 pt-1 bg-white text-secondary">
            <!--download mobile-->
            <div id="mobile" class="row d-flex min-700-lg m-4 shadow-lg rounded scene_element scene_element--fadeinup">
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-start text-left min-400 p-5">
                    <h2 class="section-title font-weight-light pb-2">Mobile</h2>
                    <h5 class="border-top border-bottom border-grey py-4">Put <span class="orange">Jaxx Liberty</span> at your fingertips. Take it anywhere you go. Available now for Android and iOS.</h5>
                    <!--button nest row-->
                    <div class="row pt-3">
                        <!--jaxx liberty google store-->
                         <div class="col-xs-6 m-0 d-flex justify-content-center">
                            <a onclick="googleAnalyticsTrigger('Android/Tablet', 'Downloads_Mobile')" href="https://play.google.com/store/apps/details?id=com.liberty.jaxx" target="_blank"><img title="Play Store Button" class="google-play mr-2 mb-2" src="/assets/img/gooogle-play-2.png" alt="Google Store Button"/></a>
                        </div>
                        <!--jaxx liberty itunes-->
                        <a onclick="googleAnalyticsTrigger('iOS', 'Downloads_Mobile')" href="https://itunes.apple.com/us/app/jaxx-liberty/id1435383184?ls=1&mt=8" target="_blank"><img title="iTunes Store Button" class="app-store mb-2" src="/assets/img/app-store-button.svg" alt="iTunes Store Button"/></a>
                    </div><!--end button nest row-->  
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-center min-500 bg--downloads-mobile"></div>
            </div>
            <!--end mobile row-->

            <!--download google chrome ext-->
            <div id="chrome" class="row d-flex min-700-lg m-4 shadow-lg rounded scene_element scene_element--fadeinleft">
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-start text-left bg-light min-400 p-5">
                    <h2 class="section-title font-weight-light pb-2">Chrome Extension</h2>
                    <h5 class="py-4 border-top border-bottom border-grey">Add the Jaxx Liberty Google Chrome extension to your browser.</h5>
                    <a onclick="googleAnalyticsTrigger('Chrome Extension', 'Downloads_Chrome')" href="https://chrome.google.com/webstore/detail/jaxx-liberty/cjelfplplebdjjenllpjcblmjkfcffne" target="_blank">
                    <img class="chrome-logo pt-3" src="/assets/img/jaxx-chrome.png" alt="Add Jaxx Liberty to Google Chrome">
                    </a>
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-center text-left min-400 p-3 o-12">
                    <img class="img w-100 ds" src="/assets/img/jaxx-liberty-chrome-trans/10.png" alt="Jaxx Google Chrome">
                </div>
            </div>
            <!--end chrome ext row-->

            <!--download desktop + jaxx legacy-->
            <div id="desktop" class="row d-flex min-700-lg m-4 shadow-lg rounded">
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-start text-left min-400 p-5">
                        <h2 class="section-title font-weight-light pb-3 scene_element scene_element--fadeindown">Desktop</h2>
                        <h5 class="border-top border-bottom border-grey py-4 scene_element scene_element--fadeinright">Download <span class="orange">Jaxx Liberty</span> now for Mac OS X, Windows, and Linux.</h5>
                        <!--nested container for modals-->
                        <div class="container-fluid">
                            <div class="row pt-3">
                               <!-- Button dropdown group for desktop platforms -->
                                <div class="btn-group scene_element scene_element--fadeinup">
                                  <button type="button" class="btn btn-lg btn-dark dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#libertyMacOSX">Mac OS X</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#libertyWindows">Windows</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#libertyLinux32">Linux 32-bit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#libertyLinux64">Linux 64-bit</a>
                                  </div>
                                </div>

                                <!--jaxx liberty linux 32 bit modal-->

                                <div class="modal fade" id="libertyLinux32" tabindex="-1" role="dialog" aria-labelledby="libertyLinux32" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header bg-light border-bottom-0 p-0">
                                        <button type="button" class="close font-weight-light ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">X</span>
                                        </button>
                                      </div>
                                      <div class="modal-body bg-light px-5 pb-5">
                                            <h3 class="font-weight-light pb-3 mb-3 border-bottom">Jaxx Liberty for Linux 32-bit</h3>
                                            <h5 class="font-weight-bold">Checksums</h5>
                                            <p>The checksum below is a simple way for you to double-check the copy of Jaxx you are installing is genuine. You can match the checksum in your instance of Jaxx with the data below.</p>
                                            <h5 class="font-weight-bold py-4 m-0 border-bottom border-top">Jaxx requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                            <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.0.6-i386.AppImage</p>
                                            <p class="word-break">cc2fdbc3706eb8419cbeef4a7113af5fb62f0cab</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                            <a role="button" class="btn btn-secondary" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_32')" href="https://github.com/Jaxx-io/JaxxLiberty/releases/download/v2.0.6/com.liberty.jaxx-2.0.6-i386.AppImage">Download</a>
                                        </div>
                                    </div>
                                  </div>
                                </div><!--end linux 32 bit modal-->

                                <!--jaxx liberty linux 64 bit modal-->
                                <div class="modal fade" id="libertyLinux64" tabindex="-1" role="dialog" aria-labelledby="libertyLinux64" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light border-bottom-0 p-0">
                                            <button type="button" class="close font-weight-light ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">X</span>
                                            </button>
                                        </div>
                                      <div class="modal-body bg-light px-5 pt-0 pb-5">
                                            <h3 class="font-weight-light pb-3 mb-3 border-bottom">Jaxx Liberty for Linux 64-bit</h3>
                                            <h5 class="font-weight-bold">Checksums</h5>
                                            <p>The checksum below is a simple way for you to double-check the copy of Jaxx you are installing is genuine. You can match the checksum in your instance of Jaxx with the data below.</p>
                                            <h5 class="font-weight-bold py-4 m-0 border-bottom border-top">Jaxx requires Ubuntu 12.04, Fedora 21, or Debian 8 (or later)</h5>
                                            <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.0.6-x86_64.AppImage</p>
                                            <p class="word-break">d01b78183e58d1e9275cb7740445e691a9460f93</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                            <a role="button" class="btn btn-secondary" onclick="googleAnalyticsTrigger('Linux_Modal', 'Downloads_Desktop_Liberty_64')" href="https://github.com/Jaxx-io/JaxxLiberty/releases/download/v2.0.6/com.liberty.jaxx-2.0.6-x86_64.AppImage">Download</a>
                                        </div>
                                    </div>
                                  </div>
                                </div><!--end linux 64 bit modal-->

                                 <!--jaxx liberty Mac modal-->
                                <div class="modal fade" id="libertyMacOSX" tabindex="-1" role="dialog" aria-labelledby="libertyMacOSX" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light border-bottom-0 p-0">
                                            <button type="button" class="close font-weight-light ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">X</span>
                                            </button>
                                        </div>
                                      <div class="modal-body bg-light px-5 pt-0 pb-5">
                                            <h3 class="font-weight-light pb-3 mb-3 border-bottom">Jaxx Liberty for Mac OS X</h3>
                                            <h5 class="font-weight-bold">Checksums</h5>
                                            <p>The checksum below is a simple way for you to double-check the copy of Jaxx you are installing is genuine. You can match the checksum in your instance of Jaxx with the data below.</p>
                                            <h5 class="font-weight-bold py-4 m-0 border-bottom border-top">Jaxx requires OS X 10.9 (or later)</h5>
                                            <p class="py-4 m-0 border-bottom"><b>Note: </b>Depending on your system settings, the system might warn you that "Jaxx can't be opened because it comes from an unidentified developer." You can either change your system settings to allow apps from unknown developers in your "Security & Privacy" settings, or simply right click Jaxx -> Open (as administrator), which will prompt you with a warning.</p>
                                            <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-2.0.6.dmg</p>
                                            <p class="word-break">05c3621fe1963b4ae1cb07531cb96229b5599e49</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                            <a role="button" class="btn btn-secondary" onclick="googleAnalyticsTrigger('Mac_Modal', 'Downloads_Desktop_Liberty_Mac')" href="https://github.com/Jaxx-io/JaxxLiberty/releases/download/v2.0.6/com.liberty.jaxx-2.0.6.dmg">Download</a>
                                        </div>
                                    </div>
                                  </div>
                                </div><!--end Liberty Mac modal-->

                             <!--jaxx liberty Windows modal-->
                                <div class="modal fade" id="libertyWindows" tabindex="-1" role="dialog" aria-labelledby="libertyWindows" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header bg-light border-bottom-0 p-0">
                                            <button type="button" class="close font-weight-light ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">X</span>
                                            </button>
                                        </div>
                                      <div class="modal-body bg-light px-5 pt-0 pb-5">
                                            <h3 class="font-weight-light pb-3 mb-3 border-bottom">Jaxx Liberty for Windows</h3>
                                            <h5 class="font-weight-bold">Checksums</h5>
                                            <p>The checksum below is a simple way for you to double-check the copy of Jaxx you are installing is genuine. You can match the checksum in your instance of Jaxx with the data below.</p>
                                            <h5 class="font-weight-bold py-4 m-0 border-bottom border-top">Jaxx requires Windows 7 (or later)</h5>
                                            <p class="pt-3 font-weight-bold">$ sha1sum com.liberty.jaxx-setup-2.0.6.exe</p>
                                            <p class="word-break">0f826f00aa5f34ee0f52e1e9a4bf32a7f169de86</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                            <a role="button" class="btn btn-secondary" onclick="googleAnalyticsTrigger('Windows_Modal', 'Downloads_Desktop_Liberty_Windows')" href="https://github.com/Jaxx-io/JaxxLiberty/releases/download/v2.0.6/com.liberty.jaxx-setup-2.0.6.exe">Download</a>
                                        </div>
                                    </div>
                                  </div>
                                </div><!--end Liberty Windows modal-->

                            </div><!--end button row--> 
                        </div><!--end button nest row--> 
                </div><!--end col-->
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-center bg-white min-400 p-0 o-12 scene_element scene_element--fadeinright">
                    <img class="img-full" src="/assets/img/jaxx-laptop-hands.jpg" alt="Jaxx Liberty Desktop">
                </div><!--end col-->
            </div><!--end desktop row-->
        </div><!--end container-->

<?php

include 'includes/footer.php';

?> 
