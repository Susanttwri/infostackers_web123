<?php
$title="HR management system|HR management system software Company in India";
$keywords="HR management system portal company, HR management system portal development, best HR management system websites, HR management system software , reword website script";
/*$meta_desc="The best advance support ticket system software which is ready to use and manage with no technical skill requirement,has plenty of features including CMS,shopping cart, automated sales tracking and commission and auto-credited cashback.";*/
require 'header.php';
?>
<style>
@media (max-width: 767px) {
  .cashback-header-details {
    margin-top: 200px !important;
  }
}

@media (max-width: 767px) {
    .content-block-container p {
        font-size: 16px;
        margin-left: 0px;
       /* width: 230%;*/
        text-align: justify;
    }
    .container, .container-fluid {
  padding-right: 0px;
  padding-left: 0px;
}

.gfort-42-column{
    height:200px;
}

    .frontendLoginDetailsContainer{
        margin-left:60px;
    }
    .login-para{
         width: 200%;
    }
    
}
@media (min-width: 768px) {
.frontendLoginDetailsContainer{
       margin-left:260px;
    }
    .login-para{
         width: 100%;
    }
    .gfort-42-column{
    height:400px;
    top:20%;
}
}
@media only screen and (min-width: 768px) {
  .section-container {
    margin-top: 0px;
  }
}
    .btn{
    background-color:#ff6a00 !important;
    color:white;
    font-family:bold;
    text-decoration:none;
    font-size:18px;
}
/****/

/**/
/**/
/**/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
:root {
	--vs-primary: 29 92 255;
}

/*Dialog Styles*/
dialog {
	padding: 1rem 3rem;
	background: white;
	max-width: 400px;
	padding-top: 2rem;
	border-radius: 20px;
	border: 0;
	box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
	animation: fadeIn 1s ease both;
	&::backdrop {
		animation: fadeIn 1s ease both;
		background: rgb(255 255 255 / 40%);
		z-index: 2;
		backdrop-filter: blur(20px);
	}
	.x {
		filter: grayscale(1);
		border: none;
		background: none;
		position: absolute;
		top: 15px;
		right: 10px;
		transition: ease filter, transform 0.3s;
		cursor: pointer;
		transform-origin: center;
		&:hover {
			filter: grayscale(0);
			transform: scale(1.1);
		}
	}
	h2 {
		font-weight: 600;
		font-size: 2rem;
		padding-bottom: 1rem;
	}
	p {
		font-size: 1rem;
		line-height: 1.3rem;
		padding: 0.5rem 0;
		a {
			&:visited {
				color: rgb(var(--vs-primary));
			}
		}
	}
}

/*General Styles*/
body {
	/*height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: Poppins, sans-serif;
	background: url(https://images.unsplash.com/photo-1574169208507-84376144848b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=879&q=80)
		no-repeat center center;
	background-size: cover;*/
}
button.primary {
	display: inline-block;
	font-size: 0.8rem;
	color: #fff !important;
	background: rgb(var(--vs-primary) / 100%);
	padding: 13px 25px;
	border-radius: 17px;
	transition: background-color 0.1s ease;
	box-sizing: border-box;
	transition: all 0.25s ease;
	border: 0;
	cursor: pointer;
	box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
	&:hover {
		box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
		transform: translateY(-5px);
	}
}

@keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}

/****************/
/* Custom body styles */
.custom-body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Align items to the top */
   /* min-height: 100vh;*/
}

/* Custom Card container using CSS Grid */
.custom-card-container {
    display: grid;
    gap: 20px;
    padding: 20px;
    width: 100%;
    max-width: 1200px;
    justify-content: center;
    margin-top: 20px; /* Add 20px distance from the top */
}
.custom-body h2 {
    text-align: center;
    font-size: 2rem; /* Adjust the font size if needed */
    color: #333;
    margin-bottom: 20px; /* Add some space below the heading */
}
/* Custom Card styles */
.custom-card {
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.custom-card h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.custom-card p {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
}

/* Hover effect for the custom card */
.custom-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* Laptop view: 4 cards per row */
@media (min-width: 1024px) {
    .custom-card-container {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* Tablet view: 2 or 3 cards per row */
@media (min-width: 768px) and (max-width: 1023px) {
    .custom-card-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 600px) and (max-width: 767px) {
    .custom-card-container {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Mobile view: 1 card per row */
@media (max-width: 599px) {
    .custom-card-container {
        grid-template-columns: 1fr;
    }
}

</style>
</head>
<body>
<?php
require 'nav.php';
?>
<div class="page-content page-content_mobile">
<div id="breadcrumb-section-1" class="breadcrumb-section grey-section section-no-padding">
    <!-- Section Container -->
    <div class="section-container section-container_mobile cashback-software-details" style="">


        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- col-md-12 -->
                <div class="col-md-12">

                    <!-- breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="index.php" title="Home" class="home-clr">Home</a></li>
                        <li>Products</li>
                        <li class="active">HR management system</li>
                    </ol><!-- /End breadcrumb -->

                </div><!-- /End col-md-12 -->

            </div><!-- /End row -->
        </div><!-- /End container -->


    </div><!-- /End Section Container -->
</div><!-- /End Breadcrumb Section 1 -->



            <div id="content-section-46" class="content-section grey-section">
                <!-- Section Container -->
                <div class="section-container" style="padding-top:40px;">


                    <!-- gfort-42-column -->
                    <div class="gfort-42-column">

                        <!-- Background Image Block -->
                        <div class="background-image-block parallax-effect gfort-image">
                            <img src="images/hr_mng.png" alt="News Portal" / style="" class="cashback_image">
                        </div><!-- /End Background Image Block -->

                    </div><!-- /End gfort-42-column -->


                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">


                            <!-- col-md-7 -->
                            <div class="col-md-7 pull-right padding-left-50 cashback-header-details">
                                <!-- row -->
                                <div class="row">


                                    <!-- Title Block -->
                                    <div class="col-md-12 title-block">
                                        <!-- Title Block Container -->
                                        <div class="title-block-container">

                                            <!-- Title -->
                                            <h1>HR management system</h1>

                                            <!-- Line Separator -->
                                            <div class="line-separator"></div>

                                        </div><!-- /End Title Block Container -->
                                    </div><!-- /End Title Block -->


                                    <!-- Content Block -->
                                    <div class="col-md-12 content-block">
                                        <!-- Content Block Container -->
                                        <div class="content-block-container" style=" margin-left:20px;">

                                            <!-- Description -->
                                            <p>human resources management system, is a suite of software applications used to manage human resources and related processes throughout the employee lifecycle.</p>

                                        </div><!-- /End Content Block -->

                                        
                                          <p class="login-para"style="margin-top:20px;margin-left:20px;font-size:18px;font-weight:bold">Login details are provided below to try the demo. Click Here to view login details:-</p>

<div class="login-details-container" style="margin-top: 5px; display: flex; justify-content: left; align-items: center;">
    <!-- Admin Login Details Button -->
    <button onclick="window.dialog1.showModal();" class="btn  wave-effect">Admin Login </button>

    <!-- Frontend Login Details Button -->
    

    
</div>
<div class="login-details-content" style="margin-top: 10px; display: flex; ">
    <!-- Admin Login Details Container -->
    <div id="adminLoginDetailsContainer" class="login-details-box" style="display: none;margin-left:30px">
        <p style="font-size: 17px; font-weight: bold;"> Super Admin Login Details:</p>
        <p style="font-size: 16px;">Username: superadmin@example.com</p>
        <p style="font-size: 16px;">Password: 1234</p>
         <p style="font-size: 17px; font-weight: bold;"> Company Login Details:</p>
        <p style="font-size: 16px;">Username: company@example.com</p>
        <p style="font-size: 16px;">Password: 1234</p>
          <p style="font-size: 17px; font-weight: bold;"> HR Login Details:</p>
        <p style="font-size: 16px;">Username: hr@example.com</p>
        <p style="font-size: 16px;">Password: 1234</p>
        <a href="https://infoskaters.com/demo/HrManagement/login" target="_blank">View Demo</a>
    </div>

    <!-- Frontend Login Details Container -->
    <div id="frontendLoginDetailsContainer" class="login-details-box" style="display: none;">
      
    </div>

</div>
        </div>
                                        <!-- Buttons 
                                        <a href="https://www.infoskaters.com/cbdemo" title="Read More" class="btn btn-gfort wave-effect">TRY DEMO</a>-->
                                        <a href="pps_requirement.php" title="Purchase Now" class="btn btn-gfort-white wave-effect">PURCHASE NOW</a>

                                    </div><!-- /End Content Block Container -->



                                </div><!-- /End row -->
                            </div><!-- /End col-md-7 -->


                        </div><!-- /End row -->
                    </div><!-- /End container -->


                </div><!-- /End Section Container -->
            </div><!-- /End Content 46 -->
</div>

<h2 style="text-align: center;">Heading 2 for testing purpose</h2>
 <div class="custom-body">
     
    <div class="custom-card-container">
        <div class="custom-card">
            <h2>Card 1</h2>
            <p>This is a responsive card. It adapts to various screen sizes.</p>
        </div>
        <div class="custom-card">
            <h2>Card 2</h2>
            <p>This is a responsive card. It adapts to various screen sizes.</p><p>This is a responsive card. It adapts to various screen sizes.</p>
        </div>
        <div class="custom-card">
            <h2>Card 3</h2>
            <p>This is a responsive card. It adapts to various screen sizes.</p>
        </div>
        <div class="custom-card">
            <h2>Card 4</h2>
            <p>This is a responsive card. It adapts to various screen sizes.</p>
        </div>
    </div>
</div>

  <!-- sub-service-menu- mouse over -->
  <script src="js/owl.carousel.js"></script>
  <!-- end of sub-service-menu- mouse over -->
  <script>
    // Function to show Admin Login Details
    function showAdminLoginDetails() {
        document.getElementById("adminLoginDetailsContainer").style.display = "block";
        document.getElementById("frontendLoginDetailsContainer").style.display = "none";
        document.getElementById("backendLoginDetailsContainer").style.display = "none";
    }

    // Function to show Frontend Login Details
    function showFrontendLoginDetails() {
        document.getElementById("adminLoginDetailsContainer").style.display = "none";
        document.getElementById("frontendLoginDetailsContainer").style.display = "block";
        document.getElementById("backendLoginDetailsContainer").style.display = "none";
    }


</script>


<!--<button class="primary" onclick="window.dialog1.showModal();">Open Dialog</button>-->

<dialog id="dialog1">
	<h2>Admin Login</h2>
	 <div id="adminLoginDetailsContainer" class="login-details-box" style="margin-left:30px">
        <p style="font-size: 17px; font-weight: bold;"> Super Admin Login Details:</p>
        <p style="font-size: 16px;">Username: superadmin@example.com</p>
        <p style="font-size: 16px;">Password: 1234</p>
         <p style="font-size: 17px; font-weight: bold;"> Company Login Details:</p>
        <p style="font-size: 16px;">Username: company@example.com</p>
        <p style="font-size: 16px;">Password: 1234</p>
          <p style="font-size: 17px; font-weight: bold;"> HR Login Details:</p>
        <p style="font-size: 16px;">Username: hr@example.com</p>
        <p style="font-size: 16px;">Password: 1234</p>
        <button class="primary"><a href="https://infoskaters.com/demo/HrManagement/login" target="_blank" style="color:white;font-style:bold">View Demo</a></button>
    </div>
	<button onclick="window.dialog1.close();" aria-label="close" class="x">❌</button>
</dialog>

<?php
require 'footer.php';
?>
</body>
</html>