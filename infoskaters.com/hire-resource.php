<?php
$title="Job Vacancies  | immediate Projects  | Bangalore";
$keywords="";
$meta_desc="Infoskaters HR is one of the best staffing agencies in the bangalore with its base in India. It provides both flexible and permanent staffing services.";
require 'header.php';
?>
<style>
.webdesign-name{
  background-color:#013f54;
}  

</style>
</head>
<body>
<?php
require 'nav.php';
?>

<div class="banner-img page-content">
	<img src="images/hire-resource.jpg" alt="Hire IT Resources, Contract Staffing Services">
</div>
<div class=" container-fluid webdesign-name">
  <div class="container">
	<h1>Job Vacancies | immediate Projects | Bangalore</h1>
	</div>
</div>
<div class="container">
  <div class="row web-details">
    <div class="col-lg-8 codeigniter_inner">
      <p>Businesses can benefit from the flexibility offered by our Hire Resource that allows to add talent as and when it is required.</p>
      <p>Business or Organizations can utilize the power of extra resource or talent to make available critical knowledge & expertise to their processes at any time whenever they require it.</p>
      <p>Leavaging on Hire Resources will minimise the talent and resource gap quickly.</p>
      <p>It enables businesses or organizations to hire talent on a contract basis for a specified period of time.</p>
      <p>We offer the option to evaluate our resource professional without spending much on employee benefits or overheads that are mandatory in case of regular employees.</p>
      <p>We will be in a position to meet your staffing requirements across all experience levels and domains, and it will be done by our expert approach towards it with speed.</p>
      
      
      
    </div>
    <div class="col-lg-4 wow animated fadeInDown">
       <div class="get_quote_dv brd">
          <h3>Hire Resources</h3>
          <div class="get_quote_frm_contianer">
         <form id="GetAQuateVerticle" class="newform" action="javascript:void(0)" method="post">
          <div class="col-md12" id="result-block"></div>
          <ul>
                <li>
                  <input placeholder="Your full Name" name="name" class="txt" required="" type="text">
                </li>
                <li>
                  <input placeholder="Email Address" name="email" class="txt" required="" type="email">
                </li>
                <li>
                  <label class="first">
                    <input placeholder="+91" name="isdcode" class="txt" required="" type="text">
                  </label>
                  <label class="second">
                    <input title="10 numeric characters only" pattern="^[0-9-]+$" placeholder="Phone Number" name="phone" class="txt" required="" type="text">
                  </label>
                </li>
                <li>
                  <input placeholder="Company Name" name="company" class="txt" required="" type="text">
                  
                </li>
                <li>
                
                <textarea placeholder="Resource Requirements / Job Requirements " name="message" class="txt" required=""></textarea>
                
                  
                </li>
                
                <li>
				<div id="resp"></div>
				<input name="action" value="GetAQuateVerticlefrom" type="hidden">	
                <button class="hvr-wobble-vertical" onclick="send_quote_message('GetAQuateVerticle','New message from Hire Resources  service enquiry')">Send</button>
                </li>
                
              </ul>
              </form>
              
              
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