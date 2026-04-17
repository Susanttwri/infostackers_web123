<?php
$title="SSL Certificates & Setup for your Website | Website Security";
$keywords="best ssl certificate, website security certificate, ssl website, website security, ssl security certificate";
$meta_desc="Digital SSL Certificate: Secure your website using Comodo digital ";
require 'header.php';
?>
<style>
.webdesign-name{
  background-color:#000;
}  
</style>
</head>
<body>
<?php
require 'nav.php';
?>
<div class="banner-img page-content">
	<img src="images/ssl-certificate.jpg" alt="SSL Certificate, Secure Website with SSL">
</div>
<div class=" container-fluid webdesign-name">
  <div class="container">
	<h1>SSL Certificates & Setup for your Website | Website Security</h1>
	</div>
</div>
<div class="container">
  <div class="row web-details">
    <div class="col-lg-8 codeigniter_inner">
      <p>A security protocol known as SSL (Secure Socket Layer) is most commonly used to encrypt the information transmitted over the internet. Secure server certificates allow web servers to establish secure sessions with web servers, once an SSL certificate successfully installed on web servers, then the transactions between the server and client are encrypted.</p>
      <h2 style="margin-bottom:20px; font-size:26px; margin-top:40px;  ">SSL Certificate works process</h2>
      <p>1. User requests for website/webpage like XYZ offers next generation domains for the next generation of internet users.</p>  
      <p>2. The web browser attempts to connect to a website/webpage which is secured with SSL.</p>  
      <p>3. The same browser also requests that the web server identify too.</p>  
      <p>4. After that, server sends browser a copy of its SSL certificate.</p>  
      <p>5. The browser checks whether it trusts the SSL certificate or not.</p>  
      <p>6. If trusts then it sends a message to the server.</p>  
      <p>7. After that, server sends back a digitally signed acknowledgment to start an SSL encrypted session.</p>  
      
      <a href="https://securemysite.in/" class="read-more">Read More</a>

    </div>
    <div class="col-lg-4 get-form">  
       <div class="get_quote_dv brd">
          <h3>Get a Quote</h3>
          <div class="get_quote_frm_contianer">
              <?php $subject="New message from SSL-Certificate service enquiry"; require 'sendmail_form1.php'; ?>
        </div>
        </div>

      </div>
    </div>
  </div>
</div>


	

	<!-- sub-service-menu- mouse over -->
	<script src="js/owl.carousel.js"></script>
  <!-- end of sub-service-menu- mouse over -->

	
<?php
require 'footer.php';
?>
</body>
</html>