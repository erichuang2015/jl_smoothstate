<?php

$title = "Jaxx Liberty | Changelog";

$metaD = "Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.";

include 'includes/header.php';

?>       

       <!--jumbotron-->
        <div role="banner" class="jumbotron jumbotron-fluid d-flex flex-column justify-content-center align-items-center text-center bg--changelog-banner text-white min-700-lg p-5 mb-0 scene_element scene_element--fadein">            
            <img class="jaxx-logo-text mt-5 mb-0 pt-3" src="/assets/img/JaxxLiberty_Logo_RGB_Screen%20(white%20Liberty%20white%20X).svg" alt="Jaxx Liberty Changelog">
            <h1 class="page-title font-weight-bold py-3 scene_element scene_element--fadeinup scene_element--delayed">Change Log</h1>
            <hr class="hr-big border-0 bg-orange scene_element scene_element--fadeinleft scene_element--delayed">
            <h2 class="h3 font-weight-light scene_element scene_element--fadeinleft scene_element--delayed">Jaxx Liberty updates and improvements</h2>
        </div>
        <main role="main">
            <div class="container-fluid bg-white scene_element scene_element--fadeinup">
                <div class="row pt-0 p-4">
                    <div class="col-sm-12">
                        <div class="wrap border-bottom pb-3">
                            <img class="jaxx-logo-text d-inline mr-2 align-bottom" src="/assets/img/JaxxLiberty_Logo_Grouped.svg" alt="Jaxx Liberty">
                            <h1 class="font-weight-bold font-italic pb-2 m-0">Change Log</h1>
                        </div>
                        <!--content-->
                        <h3 class="orange border-bottom py-3">Jaxx Liberty 2.0.6 (Updates):</h3>
                        <p class="font-weight-light border-bottom pb-2 mb-2">[11/08/18]</p>
                        <h4>Features:</h4>
                        <ul>
                            <li>
                                ShapeShift 2.0 (OAuth and KYC/AML integration).
                            </li>
                            <li>
                                Customize Interface option for mobile viewports.
                            </li>
                        </ul>
                        <h4>Bug Fixes:</h4>
                        <ul class="border-bottom pb-3 mb-0">
                            <li>Missing insufficient gas error message.</li>
                            <li>Article description is missing for some articles</li>
                            <li>Balance on home page for Wallets and Portfolio load infinite gains/loss</li>
                            <li>0 Values for tokens with shiftCount shown in Block Explorer</li>
                            <li>Back button on Block explorer is inactive</li>
                            <li>Dead link on Transaction Hash link for coins in Block Explorer module</li>
                            <li>Block Explorer: Missing BTC logo for dropdown menu on homepage</li>
                            <li>Block Explorer: negative values not trimmed well</li>
                            <li>Block Explorer: No ERC20 token ticker at search bar</li>
                            <li>Block Explorer: Selecting dropdown changes app size and layout</li>
                            <li>Block Explorer: Sent to self is shown as an outgoing transactions for coins</li>
                            <li>Block Explorer: Incorrect Fiat balance displayed on address lookup for altcoins</li>
                            <li>Chrome Extension - Info icon distorted and requires padding on Wallets > Receive page</li>
                            <li>Chrome UI: Scrolling is disabled on all pages</li>
                            <li>Confirmation Screen: “Confirm” text is not vertically aligned inside button</li>
                            <li>Create New Wallet: config file is not refreshing from server</li>
                            <li>Desktop: Backup Wallet success screen not vertically aligned</li>
                            <li>Desktop: Coin ticker is cut off when balance has too many decimal places</li>
                            <li>Desktop Manage Wallets: Draggable object is invisible</li>
                            <li>Desktop Portfolio: Enabling/Disabling wallet doubles balance and list of coins shown</li>
                            <li>Desktop Responsiveness issues</li>
                            <li>myJaxx puzzle is resizable</li>
                            <li>Portfolio widget text overlap</li>
                            <li>Wallets widget and myJaxx reduces in size when you are signed up for myJaxx</li>
                            <li>Wallet Widget text overlap</li>
                            <li>Empty red banner without any error message when transaction broadcast request times out on cloudflare</li>
                            <li>ERC20 Wallet: Confirmation screen shows contract address as receiving address</li>
                            <li>ETC red banner consolidation error</li>
                            <li>Fiat currency shows default 0 values on pair restore wallet.</li>
                            <li>TokenCard fiat value missing</li>
                            <li>Block explorer bottom line on the widget. It’s not aligned on Note 8.</li>
                            <li>Runtime error on Pair/Restore from Global Settings (stuck on 10/11)</li>
                            <li>Manage Wallets: # of Wallets enabled on Global Settings is wrong</li>
                            <li>Manage Wallets: Enabling coin you searched brings it them to the top of the list after</li>
                            <li>Manage Wallets: No search results if input value is not lowercase</li>
                            <li>Markets: Newer supported assets aren’t always linked to Wallet > Info page</li>
                            <li>Markets: Only the 2nd column is scrollable instead of the entire page</li>
                            <li>Capacitive back button allows to go back to pair/restore page</li>
                            <li>MyJaxx: w/password enabled, info needs to be entered twice</li>
                            <li>News: Missing description/summary/warning for some articles</li>
                            <li>Pair/Restore wallet page is missing text “Scan QR Code”</li>
                            <li>Portfolio: No Error message when Portfolio fails</li>
                            <li>Portfolio: Portfolio fails after initializing DGB,BTX and GRS</li>
                            <li>Portfolio: timestamp does not change after manual refresh</li>
                            <li>Portfolio and MyJaxx shown scrolled down on Chrome</li>
                            <li>Private Keys: Clicking “Copy” button before private keys finish loading gives a false positive</li>
                            <li>Private keys: ETH “hide zero balances” doesn’t work</li>
                            <li>Refresh icon is missing padding on the right</li>
                            <li>Remove blue screen when pairing or restoring a wallet</li>
                            <li>Send page: fiat value doesn’t change when it’s selected and overwritten</li>
                            <li>Send Page: fiat value goes to default amount after hitting “Cancel” on Confirmation page</li>
                            <li>ShapeShift: “Sign in again” link is not working</li>
                            <li>ShapeShift: DOGE Max shift value requires improvements in displaying</li>
                            <li>ShapeShift: Error TX-021 -  false negative for successful ShapeShift transaction</li>
                            <li>ShapeShift: If ETH max is greater then spendable, max button does not fill input fields</li>
                            <li>ShapeShift: Incorrect token balance on exchange page</li>
                            <li>ShapeShift: Min and Max unresponsive for some assets</li>
                            <li>ShapeShift: Minimum quantity only displayed after selecting another asset and re-selecting the first first</li>
                            <li>ShapeShift: No error message when balance is less then min or when amount entered is more than max</li>
                            <li>ShapeShift: Red SnackBar error TX-024 when selecting non ERC-20 assets</li>
                            <li>ShapeShift: Trying to ShapeShift before level 1 verification still broadcasts the transaction</li>
                            <li>ShapeShift: TX-030 error instead of SS Integration page when not connected to ShapeShift</li>
                            <li>Title UI: Desktop titles should read “Jaxx Liberty” instead of Liberty Platform</li>
                            <li>Transactions don’t show for all coins because incorrect data structure is being passed to the transaction component</li>
                            <li>Wallet: Coin balance displayed is more than the Fiat balance displayed</li>
                            <li>Wallet: Can’t send DCN</li>
                            <li>When sending with Password enabled, fiat balance shown is zero after entering password</li>
                            <li>TX History: Certain currency acronyms/abbreviations are added to prefix of sent values for certain tokens</li>
                            <li>TX history: Value Now is negative for many asset tx’s</li>
                            <li>Red snackbar “BigNumber Error” when sending SWC</li>
                            <li>UI: Chrome extension: Transaction History cut off at the bottom [BUG]</li>
                            <li>UI:Customize Interface: Option shown on Desktop [BUG]</li>
                            <li>Wallet: Balance doesn’t update on the UI when you’re in the home screen even after “Payment Received” snackbar appears [BUG]</li>
                            <li>Wallets: 0 balance is shown after wallet is initialized [BUG]</li>
                            <li>Wallets list no longer says “Click to initialize” for wallets that have not been initialized [BUG]</li>
                            <li>Wallets UI: iPhone5/SE Layout of certain tokens incongruent with others [BUG]</li>
                        </ul>
                        <!---->
                        <h3 class="orange border-bottom py-3">Jaxx Liberty 2.0.5 (Updates):</h3>
                        <p class="font-weight-light border-bottom pb-2 mb-2">[11/05/18]</p>
                        <h4>Features:</h4>
                        <ul>
                            <li>
                                ZCASH Sapling update
                            </li>
                            <li>
                                Groestlecoin (GRS) integration
                            </li>
                        </ul>
                        <!---->
                        <h3 class="orange border-bottom py-3">Jaxx Liberty 2.0.4 (Updates):</h3>
                        <p class="font-weight-light border-bottom pb-2 mb-2">[10/26/18]</p>
                        <h4>Features:</h4>
                        <ul>
                            <li>
                                ShapeShift transaction component rework ( app will now await for the ShapeShift order ID before signing transaction )
                            </li>
                            <li>
                                Add last updated timestamp to Portfolio Widget
                            </li>
                            <li>
                                Portfolio optimization for low powered devices
                            </li>
                            <li>
                                Add app version number in the About menu header in Global Settings
                            </li>
                            <li>
                                Add link to Changelog History below ToS in Global Settings
                            </li>
                        </ul>
                        <h4>Bug Fixes:</h4>
                        <ul class="border-bottom pb-3 mb-0">
                            <li>
                                Chrome Extension Unintended click to wallets while swiping through wallets
                            </li>
                            <li>
                                Incorrect crypto balance shown on exch
                            </li>
                        </ul>
                        <!---->
                        <h3 class="orange border-bottom py-3">Jaxx Liberty 2.0.3 (Updates):</h3>
                        <p class="font-weight-light border-bottom pb-2 mb-2">[10/17/18]</p>
                        <h4>Features:</h4>
                        <ul>
                            <li>ShapeShift transaction component rework ( app will now await for the ShapeShift order ID before signing transaction )</li>
                            <li>Add last updated timestamp to Portfolio Widget</li>
                            <li>Portfolio optimization for low powered devices</li>
                            <li>Add app version number in the About menu header in Global Settings</li>
                            <li>Add link to Changelog History below ToS in Global Settings</li>
                        </ul>
                        <h4>Bug Fixes:</h4>
                        <ul class="border-bottom pb-3 mb-0">
                            <li>Chrome Extension unintended click to wallets while swiping through wallets </li>
                            <li>Incorrect crypto balance shown on exchange page</li>
                            <li>Native currency is always in USD on MarketCap, supply, and volume when native currency is other than USD in Settings</li>
                            <li>Missing coin logo at summary page for block explorer address lookup - for BTC,BCH,BTX and DGB only</li>
                            <li>Added upcoming Days of Jaxx tokens to Pricing service</li>
                            <li>For tokens with shiftCount balance after initialization is 0 followed by payment received snackbar (false alert) - tokens like MGO, POE, DGD, STORJ will experience this issue</li>
                            <li>Missing fiat values for some newly added tokens (intermittent issue)</li>
                            <li>False positive for failed ShapeShift transaction - this fix will make sure the app shows an error message for failed ShapeShift transaction instead of showing the user the ShapeShift success page with the rotating heart</li>
                            <li>ShapeShift: can pick the same asset to exchange to - users are able to select a same coin pair from the drop down ETC consolidation with password not working</li>
                            <li>No balance displayed next to address when viewing private keys</li>
                            <li>Private keys with balance not displayed for BTC, ETC, LTC and DOGE</li>
                            <li>While performing Pair/Restore from Global Settings app intermittently getting stuck at 10/11</li>
                            <li>False negative for Offline warning (when the device is actually online)</li>
                            <li>Fixed an issue with the app occasionally not showing the correct balance on the Home Screen Wallet widget</li>
                            <li>When sending tokens: confirmation screen shows contract address as receiving address which can lead to sending to contract addresses</li>
                        </ul>
                        <!---->
                        <h3 class="orange border-bottom py-3">Jaxx Liberty 2.0.1 (2) (Hotfix):</h3>
                        <p class="font-weight-light  border-bottom pb-2 mb-2">[10/11/18]</p>
                        <h4>Bug Fixes:</h4>
                        <ul class="border-bottom pb-3 mb-0">
                            <li>Missing information(address panel) for addresses on Block explorer address lookup</li>
                            <li>Desktop: Wrong coin color on Wallets widget</li>
                            <li>Desktop: Empty blue page after Pair/Restore</li>
                            <li>Two of the same wallet is shown on Wallets Widget, Portfolio, and list of Private keys</li>
                            <li>UI: Desktop home screen background image is zoomed in</li>
                            <li>Wallet Setup: Can't scroll for desktop version</li>
                            <li>Block explorer missing icon issue</li>
                        </ul>
                        <!---->
                        <h3 class="orange border-bottom py-3">Jaxx Liberty 2.0.1 (Hotfix) [Released]:</h3>
                        <p class="font-weight-light  border-bottom pb-2 mb-2">[10/11/18]</p>
                        <h4>Bug Fixes:</h4>
                        <ul class="border-bottom pb-3 mb-0">
                            <li>Assets for Tokens</li>
                        </ul>
                        <!---->
                        <div class="wrap border-bottom pb-3">
                            <img class="jaxx-logo-text d-inline mr-2 align-bottom" src="/assets/img/Jaxx_Legacy_Logo.svg" alt="Jaxx Legacy">
                            <h1 class="font-weight-bold font-italic pb-2 m-0">Change Log</h1>
                        </div>
                        <div>
                            <h3 class="orange border-bottom py-3">1.3.17</h3>
                            <p>
                                •  Asset Update<br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.15</h3>
                            <p>
                                •  Security Fixes<br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.14</h3>
                            <p>
                                •  Security Enhancements<br>
                                •  RSK (rootstock) support<br>
                                •  Address Book<br>
                                <a href="https://decentral.zendesk.com/hc/en-us/articles/360001997634-Jaxx-Address-Book-What-is-it-how-it-works-how-to-use-">https://decentral.zendesk.com/hc/en-us/articles/360001997634-Jaxx-Address-Book-What-is-it-how-it-works-how-to-use-</a> <br>
                                •  UI Enhancements and minor bug fixes
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.13</h3>
                            <p>
                                •  Feature Updates & Bug Fixes
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.12</h3>
                            <p>
                                •  More control of the initialization process <br>
                                •  Advance Jaxx custom data validation update <br>
                                •  Tips and Tricks is back <br>
                                •  Assets integration <br>
                                •  Update spendable algorithm <br>
                                •  UI and UX updates <br>
                                •  *Bug Fixes* <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.11</h3>
                            <p>
                                •  ShapeShift UI major updates <br>
                                •  Mining fee algorithm changes <br>
                                •  Argentina Peso currency added <br>
                                •  Custom data on advance Jaxx update <br>
                                •  Security update for desktop builds <br>
                                •  Dynamic gas price for tokens <br>
                                •  Architecture changes and stable pricing data <br>
                                •  New infrastructure support for up to date information <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.9</h3>
                            <p>
                                •  ShapeShift improvements <br>
                                •  Hot Fix <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.8</h3>
                            <h6>New Features</h6>
                            <p>
                                •	ETH Gas Limit Control with limit maximums and minimums in Advance Jaxx <br>
                                •	Paper Wallet activation <br>
                                •	Pricing Data update <br>
                            </p>
                        </div>
                        <div>
                            <h6>Bug Fixes</h6>
                            <p>
                                •	BTC transaction histories display correct balances <br>
                                •	ETC spendable balance is checked before allowing a send-transaction <br>
                                •	ETH wallets now show accurate balances in transaction history <br>
                                •	ERC20 spendable balance is checked and verified before attempting a send transaction for all ERC20 tokens <br>
                                •	ShapeShift Unavailable Message is now available on all platforms <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.7</h3>
                            <p>
                                •	Fixed Spendable Issues
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.3.6</h3>
                            <p>
                                •	BCH Integration <br>
                                •	Performance improvements <br>
                                •	BTC build transactions have been resolved <br>
                                •	Added jaxx config version <br>
                                •	Implemented general URI support for QR scanner validator <br>
                                •	Minor security updates <br>
                                •	Fixed UI issues <br>
                                •	ETC &amp; ZEC Updated for Transactions and Balances <br>
                                •	Send Confirmation Popup updated <br>
                                •	Fixed issue where Desktop application was not closing on close <br>
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.41</h3>
                            <p>•  Added BNT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.40</h3>
                            <p>•  Added DAP</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.39</h3>
                            <p>•  Added EOS</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.38</h3>
                            <p>•  Added ANT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.37</h3>
                            <p>•  Added SNT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.36</h3>
                            <p>•  Added SAN</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.35</h3>
                            <p>•  Added WINGS</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.34</h3>
                            <p>•  Added EDG</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.33</h3>
                            <p>•  Added RLC</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.32</h3>
                            <p>•  Added BAT</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.31</h3>
                            <p>•  Added TenX</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.30</h3>
                            <p>•  Added Maecenas</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.29</h3>
                            <p>•  Added QTUM</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.28</h3>
                            <p>•  Added Musiconomi</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.27</h3>
                            <p>•  Added Cofound.it</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.26</h3>
                            <p>•  Added Po.et</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.25</h3>
                            <p>•  Added Stox</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.24</h3>
                            <p>•  BTC transactions (mining fees update) <br>•&nbsp;Change log update <br>•&nbsp;REP contract update <br>•&nbsp;Display private keys bug fixes</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.21</h3>
                            <p>• Added Civic Token</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.20</h3>
                            <p>• Bug fixes <br>•&nbsp;Roll back Civic token</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.19</h3>
                            <p>• Added Civic Token</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.18</h3>
                            <p>• LTC multisig support <br>•&nbsp;Doge private keys UI fix <br>•&nbsp;Bulletin updates <br>•&nbsp;ETH
                                warning message updated based on selecting fiat <br>•&nbsp;Default gas limit of ICOs updated
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.17</h3>
                            <p>• Added Slow mining fee pop up with warning message <br>•&nbsp;Added ETH warning message for
                                greater than 1000 ETH <br>•&nbsp;Pricing updates
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.16</h3>
                            <p>• Reduced ETH gas cost <br>• ETH and ETC gas price display issue in Transaction History fixed
                                <br>• ETH and ETC Replay Safe Split issue fixed
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.15</h3>
                            <p>• Added Pricing information for ICN, BCAP and DigixDAO <br>• Ethereum Balances updated <br>•
                                Bitcoin average mining fees updated
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.14</h3>
                            <p>• Added Doge <br>• Fixed Ethereum cache balances</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.13</h3>
                            <p>• Added BCAP <br>• Ethereum HD addresses no longer generated</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.12</h3>
                            <p>• Fixed Gnosis Pricing <br>• Fixed Golem Caching <br>• Instant unconfirmed with Dash, litecoin
                                and Zcash
                            </p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.11</h3>
                            <p>• Added DigixDAO</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.10</h3>
                            <p>• Added Iconomi</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.9</h3>
                            <p>• Added Golem</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.8</h3>
                            <p>• Added Gnosis <br>• Fixed minor carousel issue <br>• Biginteger issue resolved for small amounts</p>
                        </div>
                        <div>
                            <h3 class="orange border-bottom pb-2">1.2.7</h3>
                            <p>• Added coin-specific Bulletin in Menu <br>• Sleep mode activates after 5 minutes of inactivity
                                <br>• Bug with incorrect version numbers fixed <br>• Terms of Service "Accept" button more
                                responsive <br>• Drop down arrow position fixed <br>• Zcash and LTC minor fixes <br>• Initializing
                                Wallet message centered <br>• Loading Wallet modal after Pair / Restore now opaque <br>•
                                Error message in Ethereum Private Keys removed <br>• REP icon now visible in Ethereum Private
                                Keys
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </main>
               
<?php

include 'includes/footer.php';

?>