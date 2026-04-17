<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refund Policy - PAS</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    /* Container */
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
    }

    /* Header */
    header {
      text-align: center;
      margin-bottom: 30px;
    }

    header h1 {
      color: #2c3e50;
      font-size: 2em;
      margin-bottom: 10px;
    }

    header p {
      color: #777;
      font-size: 1.1em;
    }

    /* Sections */
    section {
      margin-bottom: 30px;
    }

    h3 {
      color: #34495e;
      margin-bottom: 10px;
      font-size: 1.5em;
    }

    p {
      margin: 10px 0;
    }

    ul {
      margin: 10px 0;
      padding-left: 20px;
    }

    ul li {
      margin-bottom: 5px;
    }

    a {
      color: #3498db;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .navbar-toggler {
      padding: .25rem .75rem;
      font-size: 1.25rem;
      line-height: 1;
      background-color: #212529;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 

  <div class="container">
    <!-- Header -->
    <header>
      <h1>Refund Policy</h1>
      <p>This is the Refund Policy for PAS. Please read it carefully before making a purchase.</p>
    </header>

    <!-- Main Content -->
    <main>
      <section id="refund-policy">
        <h3>Refund Policy</h3>
        <p>If your purchase is eligible for a refund, please follow these steps:</p>
        <p>Contact our customer support team within seven days of receiving the service.</p>
        <p>Provide detailed information about the issue, including photos if applicable.</p>
        <p>Our team will review your request and respond within 48 hours.</p>
        <p>If your request is approved, we will initiate the refund process.</p>
        
        <p>Refunds are allowed only within six months from the date of deposit. If a refund request is not made within this period, the deposit will be considered used and allocated towards platform maintenance and operational costs. After the six-months period, no refunds will be issued under any circumstances.</p>
        <p>Refunds are issued via the original payment method used for the purchase within seven working days.</p>
      </section>

      <section id="contact-information">
        <h3>Contact Us:</h3>
        <p>If you have any questions or concerns about our Refund Policy, please contact us at <a
                        href="mailto:hello@infoskaters.com">hello@infoskaters.com</a>.</p>
      </section>
    </main>
  </div>

  <!-- Include the same scripts as the main page -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
  <script src="js/scrollIt.min.js"></script> 
  <script src="js/wow.min.js"></script> 
  <script>
    wow = new WOW();
    wow.init();

    $(document).ready(function(e) {
      // Initialize scrollIt
      $.scrollIt({
        upKey: 38,             // key code to navigate to the next section
        downKey: 40,           // key code to navigate to the previous section
        easing: 'linear',      // the easing function for animation
        scrollTime: 600,       // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null,    // function(pageIndex) that is called when page is changed
        topOffset: -63         // offset (in px) for fixed top navigation
      });

      // Debugging: Log scrollIt initialization
      console.log("scrollIt initialized");
    });
  </script>
</body>
</html>