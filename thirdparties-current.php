<?php

$title = "Jaxx Liberty | Community";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>      
      
<!--jumbotron-->
<div class="jumbotron jumbotron-fluid d-flex flex-column justify-content-center align-items-center text-center bg-img-banner-thirdparties min-70 p-5 mb-0">
    <img class="jaxx-logo-text mt-5 pt-5 relative z-2" src="/img/JaxxLiberty_Logo_RGB_Screen%20(white%20Liberty%20white%20X).svg" alt="Jaxx Liberty">
    <h1 class="site-title x-bold text-white mt-0 mb-5">Third Party Agreements</h1>
</div>
<main role="main">
<!--container-->
<div class="container-fluid bg-white bg-dots py-5 px-3">
    <div id="thirdPartyIntegrations" class="col-sm-12 font-weight-light p-4">
        <h2 class="font-weight-bold border-bottom pb-3">Third Party Integrations & Contractors</h2>
        <p class="pt-2"><span class="orange font-weight-bold">Jaxx Liberty</span> is a service built around minimizing personal information requirements. We build in privacy by design. We have no sign-up. We conduct no registration. Managing your digital assets requires no personal information. We're commited to safeguarding your privacy rights.</p>
        <p>But <span class="orange font-weight-bold">Jaxx Liberty</span> also operates on the Internet, where we interoperate with third parties. While we never ask for your name or a log-in, we -- and the third-party data processors we contract with -- are exposed to persistent identifiers like Internet Protocol addresses.</p>
        <p class="pb-4 border-bottom">We encrypt wherever we can. We build strong security and privacy requirements into our contracting process. But we also believe in transparency and accountability for our data flows. This page provides you with information about that data processor ecosystem both for the <span class="orange font-weight-bold">Jaxx Liberty</span> service, and for this website.</p>
        <div class="table-responsive-sm py-4">
            <table class="table table-striped table-bordered w-100">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Party (Jurisdiction)</th>
                        <th scope="col">Functionality</th>
                        <th scope="col">Data Exposed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" class="font-weight-bold">1. Jaxx integrations</td>
                    </tr>
                    <tr>
                        <td>ShapeShift AG (Switzerland)</td>
                        <td>Application transferring digital assets between coin and token types.</td>
                        <td>IP address; public blockchain addresses; transaction information.</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold">2. User communications</td>
                    </tr>
                    <tr>
                        <td>Zendesk Inc. (United States)</td>
                        <td>Track, prioritize, and solve customer support tickets.</td>
                        <td>Optionally, and as presented, name and email address: they're not tied to your Jaxx Liberty instance. Ticket information (free text).</td>
                    </tr>
                    <tr>
                        <td>SendGrid Inc. (United States)</td>
                        <td>Store and send emails to myJaxx users.</td>
                        <td>myJaxx display name; email address as presented; IP address in use at time of subscription.</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold">3. Cloud platform</td>
                    </tr>
                    <tr>
                        <td>Amazon Web Services Inc. (United States).</td>
                        <td>Cloud hosting for the Jaxx service.</td>
                        <td>Jaxx data flows (always encrypted).</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-weight-bold">4. Web site</td>
                    </tr>
                    <tr>
                        <td>Cloudflare Inc. (United States)</td>
                        <td><a href="https://en.wikipedia.org/wiki/HTTP_cookie" class="orange font-weight-bold" target="_blank">Pseudonymous cookie</a> for Web security.</td>
                        <td>Browsing activity.</td>
                    </tr>
                    <tr>
                        <td>Google Inc. (United States)</td>
                        <td><a href="https://en.wikipedia.org/wiki/HTTP_cookie" class="font-weight-bold orange" target="_blank">Pseudonymous cookies</a> for Web analytics.</td>
                        <td>Browsing habits by pseudonymous User ID.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end table-->
    </div>
    <!--end thirdParties-->
</div>
<!--end container-->

<?php

include 'includes/footer.php';

?>