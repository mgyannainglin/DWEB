<?php
    session_start();
    $_SESSION['whereami'] = 'Home';
    include 'config.php';
    $sql = "SELECT total_views FROM site_preferences WHERE id=1";
    if($result=$mysqli->query($sql))
    {
        while($row=$result->fetch_assoc())
        {
            $_SESSION['total_views'] = $row['total_views'];
        }
    }
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/gwsc.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>GWSC</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">  
</head>
<body>
    <?php
        include 'menu.php';
        if(isset($_SESSION['auth']['uid']) && isset($_SESSION['auth']['username']))
        {
    ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">Welcome, 
                        <?php echo $_SESSION['auth']['username']; ?>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login</a></li>
            </ul>
    </div>
    <?php
        }
    ?>

<section class="engine"><a href="https://mobirise.info/v"></a></section><section class="mbr-section article content1 cid-r9BzYSCu87" id="content1-3y">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7"></div>
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-r9BrMpqv5A" id="content9-3w">
    <div class="container">
        <div class="welcome-bar">
            <?php
                if(isset($_SESSION['auth']['uid']) && isset($_SESSION['auth']['username']))
                {
            ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="index.php">Welcome, 
                                <?php echo $_SESSION['auth']['username']; ?>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login</a></li>
                    </ul>
            </div>
            <?php
                }
            ?>
        </div>
</section>

<section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Privacy Policy</h2>
                <h5 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
<p>At GWSC, we understand that your privacy is important and we endeavour to protect your personal information.</p>
<p>1. <strong>Purpose of Privacy Policy</strong></p>
<p>This Privacy Policy is designed to assist you, the customer, in understanding how we may collect, use, disclose or otherwise process personal information you provide to us in accordance with the Personal Data Protection Act (“PDPA”), and in making informed decisions when you are using our website or any other means through which you disclose your personal data to us. Our policy applies to personal data in our possession or under our control, including personal data in the possession of organisations which we have engaged to collect, use, disclose or process personal data for our purposes.</p>
<p>As used in this Policy:</p>
<p>“customer” means an individual who (a) has contacted us through any means to find out more about any products or services we provide, or (b) may, or has, entered into a contract with us for the supply of any products or services by us; and</p>
<p>“personal data” means data, whether true or not, about a customer who can be identified: (a) from that data; or (b) from that data and other information to which we have or are likely to have access. Depending on the nature of your interaction with us, some examples of personal data which we may collect from you include your name and contact information such as your address, email address or telephone number, nationality, gender, date of birth, marital status, photographs and other audio-visual information (such as CCTV recordings), employment information and financial information such as credit card numbers, debit card numbers or bank account information.</p>
<p>2. <strong>What information do we collect?</strong></p>
<p>We generally do not collect your personal data unless:</p>
<p style="padding-left: 30px;">a. it is provided to us voluntarily by you directly or via a third party who has been duly authorised by you to disclose your personal data to us (your “authorised representative”) after (i) you (or your authorised representative) have been notified of the purposes for which the data is collected, and (ii) you (or your authorised representative) have provided written consent to the collection and usage of your personal data for those purposes, or</p>
<p style="padding-left: 30px;">b. collection and use of personal data without consent is permitted or required by the PDPA or other laws. We shall seek your consent before collecting any additional personal data and before using your personal data for a purpose which has not been notified to you (except where permitted or authorised by law).</p>
<p>When you visit our website, you may be providing us with the following information:</p>
<p style="padding-left: 30px;">c. personal data you voluntarily choose to disclose to us, e.g., your name, mailing and email addresses and telephone number which you provide to us;</p>
<p style="padding-left: 30px;">d. personal data of your parents or legal guardian in the case that you are currently under 18 years of age and have obtained consent from your parents or legal guardian to do so; and</p>
<p style="padding-left: 30px;">e. website use information collected on an aggregate basis as you and others browse our website.</p>
<p>3. <strong>What do we use your personal information for?</strong></p>
<p>The personal information we collect from you may be used in one of the following ways:</p>
<p style="padding-left: 30px;">a. To perform obligations in the course of or in connection with our provision of the products and/or services requested by you, in particular, to ensure that your academic progression proceeds smoothly;</p>
<p style="padding-left: 30px;">b. To verify your identity;</p>
<p style="padding-left: 30px;">c. To respond to, handle, and process queries, requests, applications, complaints, and feedback from you;</p>
<p style="padding-left: 30px;">d. To manage your relationship with us including but not limited to sending a graduate employment survey to graduates of programmes delivered by GWSC;</p>
<p style="padding-left: 30px;">e. To process payment or credit transactions;</p>
<p style="padding-left: 30px;">f. To send you marketing information about our products or services (and those of our sponsors/partners) including notifying you of our marketing events, initiatives and promotions, lucky draws, membership and rewards schemes and other promotions;</p>
<p style="padding-left: 30px;">g. Any other purposes for which you have provided the information;</p>
<p style="padding-left: 30px;">h. To improve on our website;</p>
<p style="padding-left: 30px;">i. To transmit to any unaffiliated third parties including our third party service providers and agents, and relevant governmental and/or regulatory authorities, whether in or abroad, for the aforementioned purposes; and</p>
<p style="padding-left: 30px;">j. Any other incidental business purposes related to or in connection with the above, which may at times include, but not be limited to: academic programme management and quality review; audit requirements; regulatory reporting; law enforcement or investigation; subpeona or other legal directive; other specific requests from official government or statutory bodies.</p>
<p>The purposes listed in the above clauses may continue to apply even in situations where your relationship with us (for example, pursuant to a contract) has been terminated or altered in any way, for a reasonable period thereafter (including, where applicable, a period to enable us to enforce our rights under any contract with you).</p>
<p>4. <strong>Will your personal information be passed on to any third parties?</strong><br />
We may disclose your personal data:</p>
<p style="padding-left: 30px;">a. where such disclosure is required for performing obligations in the course of or in connection with our provision of the products or services requested by you; or</p>
<p style="padding-left: 30px;">b. to third party service providers, agents and other organisations we have engaged to perform any of the functions listed in Section 3 above for us.</p>
<p>Rest assured, we do not sell, trade or rent your personal data to others.</p>
<p>5. <strong>Will you be able to withdraw your consent earlier provided to us?</strong></p>
<p>Absolutely! The consent that you provide for the collection, use and disclosure of your personal data will remain valid until such time it is being withdrawn by you in writing. You may withdraw consent and request us to stop using and/or disclosing your personal data for any or all of the purposes listed above by submitting your request in writing or via email to our Data Protection Officer at the contact details provided below.</p>
<p>Upon receipt of your written request to withdraw your consent, we may require reasonable time (depending on the complexity of the request and its impact on our relationship with you) for your request to be processed and for us to notify you of the consequences of us acceding to the same, including any legal consequences which may affect your rights and liabilities to us. In general, we shall seek to process your request within ten (10) business days of receiving it.</p>
<p>Whilst we respect your decision to withdraw your consent, please note that depending on the nature and scope of your request, we may not be in a position to continue providing our products or services to you and we shall, in such circumstances, notify you before completing the processing of your request. Should you decide to cancel your withdrawal of consent, please inform us in writing in the manner described above.</p>
<p>Please note that withdrawing consent does not affect our right to continue to collect, use and disclose personal data where such collection, use and disclose without consent is permitted or required under applicable laws.</p>
<p>6. <strong>Can you access, update, correct your personal data which we hold about you?</strong></p>
<p>Yes, you may do so.</p>
<p>If you wish to make (a) an access request for access to a copy of the personal data which we hold about you or information about the ways in which we use or disclose your personal data, or (b) a correction request to correct or update any of your personal data which we hold about you, you may submit your request in writing or via email to our Data Protection Officer at the contact details provided below.</p>
<p>Please note that a reasonable fee may be charged for an access request. If so, we will inform you of the fee before processing your request.</p>
<p>We will respond to your request as soon as reasonably possible. Should we not be able to respond to your request within thirty (30) calendar days after receiving your request, we will inform you in writing within thirty (30) calendar days of the time by which we will be able to respond to your request. If we are unable to provide you with any personal data or to make a correction requested by you, we shall generally inform you of the reasons why we are unable to do so (except where we are not required to do so under the PDPA).</p>
<p>7. <strong>How do we protect your personal data?</strong></p>
<p>The security of your personal information is our utmost priority. To safeguard your personal data from unauthorised access, collection, use, disclosure, copying, modification, disposal or similar risks, we have introduced appropriate administrative, physical and technical measures such as up-to-date antivirus protection, encryption and the use of privacy filters to secure all storage and transmission of personal data by us, and disclosing personal data both internally and to our authorised third party service providers and agents only on a need-to-know basis.</p>
<p>You should be aware, however, that no method of transmission over the Internet or method of electronic storage is completely secure. While security cannot be guaranteed, we strive to protect the security of your information and are constantly reviewing and enhancing our information security measures.</p>
<p>8. <strong>How long do we retain your personal data?</strong></p>
<p>We may retain your personal data for as long as it is necessary to fulfil the purpose for which it was collected, or as required or permitted by applicable laws.</p>
<p>We will cease to retain your personal data, or remove the means by which the data can be associated with you, as soon as it is reasonable to assume that such retention no longer serves the purpose for which the personal data was collected, and is no longer necessary for legal or business purposes.</p>
<p>9. <strong>What else should you know about data protection?</strong></p>
<p>We generally rely on personal data provided by you (or your authorised representative). In order to ensure that your personal data is current, complete and accurate, please update us if there are changes to your personal data by informing our Data Protection Officer in writing or via email at the contact details provided below. We do not assume responsibility for the publication of the information due to errors during transmission or due to unauthorised access by third parties.</p>
<p>10. <strong>TRANSFERS OF PERSONAL DATA OUTSIDE OF</strong></p>
<p>We generally do not transfer your personal data to countries outside of. However, if we do so, typically in cases where provision of the products and/or services requested by you requires us to do so, we will obtain your consent for the transfer to be made and we will take steps to ensure that your personal data continues to receive a standard of protection that is at least comparable to that provided under the PDPA.</p>
<p>11. <strong>Cookies</strong><br />
We collect information about the pages you view, and the links you click, including advertisements, through common internet technologies such as cookies and web beacons, and your IP-address, which is a number that is automatically assigned to your computer when you use the Internet.</p>
<p>12. <strong>Who to contact?</strong><br />
You may contact our Data Protection Officer if you have any enquiries or feedback on our personal data protection policies and procedures, or if you wish to make any request, in the following manner:</p>
<p><em>Data Protection Officer</em></p>
<p>Mr Andrew Lee</p>
<p>Email address: <a href="/cdn-cgi/l/email-protection#a7c6c9c3d5c2d089cbc2c2e7ccc6d7cbc6c989c4c8ca"><span class="__cf_email__" data-cfemail="46272822342331682a2323062d27362a27286825292b">[email&#160;protected]</span></a></p>
<p>Contact number: +65 1234 5678  </p>
<p>13. <strong>EFFECT OF NOTICE AND CHANGES TO NOTICE</strong></p>
<p>This Notice applies in conjunction with any other notices, contractual clauses and consent clauses that apply in relation to the collection, use and disclosure of your personal data by us.</p>
<p>We may revise this Notice from time to time without any prior notice. You may determine if any such revision has taken place by referring to the date on which this Notice was last updated. Your continued use of our services constitutes your acknowledgement and acceptance of such changes.</p>
<p>&nbsp;</p>
<p>Effective date : 01-Feb-2023</p>
<p>Last updated : 01-Feb-2023</p>
                </h5>
            </div>
        </div>
    </div>
</section>
<?php
    include 'viewercounter.php';
    include 'footer.php';
?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
</body>
</html>