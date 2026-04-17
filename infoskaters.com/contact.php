<?php
$title = "Contact Us | Infoskaters Technologies Pvt. Ltd";
require 'header.php';
?>
<style>
/* Optional styling tweaks */
.submit-btn {
  background: #0073e6;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
}
.submit-btn:hover {
  background: #005bb5;
}
</style>
</head>
<body>
<?php require 'nav.php'; ?>

<!-- banner -->
<div class="banner page-content">
  <div class="container contact-header">
    <h1 style="color: #fff;margin-top: 124px;">Contact Us</h1>
  </div>
</div>
<!--//banner -->

<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-grids">
      <div class="col-md-5 contact-form wow animated fadeInLeft">
        <h4 class="heading">Get In Touch</h4>

        <!-- ✅ Email Automation Form using FormSubmit -->
        <form action="https://formsubmit.co/hello@infoskaters.com" method="POST" id="contact_form">

          <!-- Hidden Automation Settings -->
          <input type="hidden" name="_subject" value="New Lead from Infoskaters Landing Page!">
          <input type="hidden" name="_autoresponse" value="Thank you for contacting Infoskaters! We’ve received your message and our team will reach out to you shortly. 😊">
          <input type="hidden" name="_next" value="https://www.infoskaters.com/thank-you.html">

          <!-- User Inputs -->
          <input type="text" placeholder="Your Name" name="name" style="letter-spacing:normal !important;" required>
          <input type="email" placeholder="Email ID" name="email" style="letter-spacing:normal !important;" required>
          <input type="text" placeholder="Phone" name="mobile" style="letter-spacing:normal !important;" required>
          <textarea placeholder="Message" name="message" style="letter-spacing:normal !important;" required></textarea>

          <!-- Optional Captcha (visual only) -->
          <label>Captcha Code</label>
          <input name="captcha_code" type="text" style="padding:6px;width:100%;padding-left:80px;" class="captcha-input">

          <!-- Submit Button -->
          <div class="col-md-12" id="contact-result-block"></div>
          <div class="submit1">
            <button type="submit" class="submit-btn">Send Message</button>
          </div>
        </form>
      </div>

      <!-- Google Map & Contact Info -->
      <div class="col-md-7 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.232841519221!2d77.69934651464504!3d12.956947190865503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1369dd5dbb77%3A0x1b427f36a32c4610!2sInfoskaters%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1592499552328!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>

        <div class="col-md-6 contact-grid1">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <div class="contact-right">
            <p>Bangalore Head Office</p>
            <span class="addr1">Infoskaters Technologies Pvt. Ltd.<br>
              C/O PRESTIGE SHANTINIKETAN, Cresent Tower 4 2nd Floor, Hobli, Krishnarajapura, Bengaluru, Karnataka 560066
            </span>
          </div>
          <div class="contact-right address2">
            <br/>
            <p>CANADA:</p>
            <span>&nbsp;965, Bovaird Dr West, Unit 201, Brampton, Ontario, CANADA - L6X 0G3</span><br/><br/>
            <p>DUBAI:</p>
            <span>&nbsp;ELOB Office No. E-99F-10, PO.Box 50501, Sharjah, UAE</span><br/><br/>
          </div>
        </div>

        <div class="col-md-2 contact-grid1">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <div class="contact-right">
            <p>Email</p>
            <strong>Sales:</strong> <span>hello@infoskaters.com</span><br>
            <strong>Support:</strong> <span>support@infoskaters.com</span>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<!-- //contact -->

<!-- sub-service-menu -->
<script src="js/owl.carousel.js"></script>

<?php require 'footer.php'; ?>
</body>
</html>
