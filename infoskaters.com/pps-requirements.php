<?php  
$title="Pay After Sale Marketing Bangalore| Infoskaters |Pay After Sale Lead Generation Companies";
$keywords="Pay After Sale Marketing Bangalore,Pay After Sale Lead Generation Companies, pay after sale companies";
$meta_desc="Infoskaters is one of the best pay after sale companies in bangalore that provide Pay-After-Sale Marketing services to the clients";
require 'header.php';
?>
</head>
<body>
<?php
require 'nav.php';
?>
<?php
session_start();
$mysqli = new mysqli('localhost', 'u804917992_student', '9mlCez9vRCIQe7g', 'u804917992_student') or die(mysqli_error($mysqli));
//echo "connect successfully";


$msg_err = "";
$msg_errs = "";
$mobile = $email = $Entity_Name = $Business_owner = $primary_products = $city = $pps_service = $website_URL = $Unique_visitors = $digital_marketing = $provide_details = $leads_clients = $average_sale_cost = $our_service = $business = "";

if(isset($_POST['submit'])){

		$err = 0;
		$mobile = $_POST["mobile"];
        $email = $_POST["email"];

		/*$Entity_Name = $_POST["Entity_Name"];*/
		$Business_owner = $_POST["Business_owner"];
		
	/*	$primary_products = $_POST["primary_products"];
		$city = $_POST["city"];
		$pps_service = $_POST["pps_service"];

		$website_URL = $_POST["website_URL"];
		$Unique_visitors = $_POST["Unique_visitors"];
		$digital_marketing = $_POST["digital_marketing"];

		$provide_details = $_POST["provide_details"];
		$leads_clients = $_POST["leads_clients"];
		$average_sale_cost = $_POST["average_sale_cost"];

		$our_service = $_POST["our_service"];*/
		$business = $_POST["business"];

function is_empty($data) {
    if ($data == '' || $data == NULL || !isset($data)) {
        return true;
    } else {
        return false;
    }
}
function mobile_exists($mobile) {
  $mysqli = new mysqli('localhost', 'u804917992_student', '9mlCez9vRCIQe7g', 'u804917992_student') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM `pps_requirement` WHERE `mobile` = '".$mobile."' LIMIT 1");
 if($result->num_rows > 0){
    return true;
}
}
function email_exists($email) {
  $mysqli = new mysqli('localhost', 'u804917992_student', '9mlCez9vRCIQe7g', 'u804917992_student') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM `pps_requirement` WHERE `email` = '".$email."' LIMIT 1");
 if($result->num_rows > 0){
    return true;
}
}


  	if(is_empty($mobile)){
    	$err = 1;
    	$msg_errs = '<div class="alert alert-danger">Please enter your mobile number</div>';
    }
    elseif(is_empty($email)){
    	$err = 1;
    	$msg_err = '<div class="alert alert-danger">Please enter email</div>';	
    }
   /* elseif(is_empty($Entity_Name)){
    	$err = 1;
    	$msg_err = '<div class="alert alert-danger">Please enter Entity_Name</div>';	
    }*/
    elseif(!preg_match('/@[a-zA-Z0-9\_\-]+\.[a-zA-Z0-9\_\-]{2,10}$/', $email)) {
       $err = 1;
        $msg_err = '<div class="alert alert-danger">Enter valid email Address!</div>';
    }
    elseif(!preg_match("/^[0-9]{10}$/", $mobile)) {
       $err = 1;
        $msg_err = '<div class="alert alert-danger">Enter valid Mobile Number</div>';
	}
    elseif(mobile_exists($mobile)){	
    	$err = 1;
    	$msg_err = '<div class="alert alert-danger">Mobile Number Already Exits</div>';
    }
    elseif(email_exists($email)) {
    	$err = 1;
    	$msg_err = '<div class="alert alert-danger">Email Already Exits</div>'; 
    }
if(!$err){
	$sql = "INSERT INTO `pps_requirement`( `date`, `mobile`, `email`, `Entity_Name`, `Business_owner`, `primary_products`, `city`, `pps_service`, `website_URL`, `Unique_visitors`, `digital_marketing`, `provide_details`, `leads_clients`, `average_sale_cost`, `our_service`, `business`) VALUES ( '" . date('Y-m-d H:i:s') . "', '$mobile', '$email', '$Entity_Name', '$Business_owner',  '$primary_products', '$city', '$pps_service', '$website_URL', '$Unique_visitors', '$digital_marketing', '$provide_details', '$leads_clients', '$average_sale_cost', '$our_service', '$business')";

	if ($mysqli->query($sql) === TRUE) {
		 
		//$msg_errs = '<div class="alert alert-success">Pay Per Sale Requirement Submitted sucessfully!</div>';
		echo ("<script LANGUAGE='JavaScript'>
                
                window.alert('Requirement Submitted sucessfully!');
                window.open('pps-requirements.php','_self');
                </script>");
		//echo "<script>window.open('pps-requirements.php','_self') </script>";
	//	$to = "santosh@infoskaters.com";
			$to = "manoj@infoskaters.com";
				//	$to = "shubhamgiramkar1212@gmail.com";

		

		$from = "noreply@infoskaters.com";
		$subject = "Product/Service Requirement  From Infoskaters";
    //	$message = "Pay After Sale Requirement Received From $mobile, $email,Requirement: $business";
$message = "
<!DOCTYPE html>
<html>
<head>
    <title>Product/Service Requirement</title>
</head>
<body>
    <h2>Product/Service Requirement Received</h2>
    <p><strong>Mobile:</strong> $mobile</p>
    <p><strong>Email:</strong> $email</p>
     <p><strong>Name:</strong> $Business_owner</p>
    <p><strong>Requirement:</strong> $business</p>
</body>
</html>
";
	    $headers = "From:" . $from."\r\n"."Reply-To:".$from."\r\n"."MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=iso-8859-1";
	    mail($to, $subject, $message, $headers);
	    
		} 
		else {

	    $msg_err = "Error: " . $sql . "<br>" . $mysqli->error;
		}

}
}
?>


<section style="padding-top:200px;">
	<div class="container">
			
			
				<span class="error"><?php echo $msg_err;?></span>
    			<span class="errors"><?php echo $msg_errs;?></span>
    	
			
		<h4 align="center">Product/Service Requirement Form</h4><br/><br/>
		<div class="row">
			<div class="col-xs-12 col-lg-3 col-md-3">
			</div>

			<div class="col-xs-12 col-lg-6 col-md-6 box-layout">
				Fields Marked With '<span style="color:red;font-size: 20px;">*</span>'Are Mandatory<br /><br />

			<form name="defaultForm" id="defaultForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div class="form-group row">
						    <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Mobile No</label>

						    <input type="text" class="form-control" name="mobile" id="mobile" required="required" minlength="10" value="<?php echo $mobile; ?>">
						   
						</div>

						<div class="form-group row">
						    <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Email</label>

						    <input type="email" class="form-control" name="email" id="email"   required="required" value="<?php echo $email; ?>">
						    
						</div>

					   <!-- <div class="form-group row">
					      <!-- <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Your Business Entity Name</label>

					      <input type="text" class="form-control" name="Entity_Name" id="Entity_Name"  required="required" value="<?php //echo $Entity_Name; ?>">
					    </div>-->

					    <div class="form-group row">

					      <label class="form-group"><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Contact Person Name</label>

					      <input type="text" class="form-control" name="Business_owner" id="Business_owner"  required="required" value="<?php echo $Business_owner; ?>">
					    </div>

					    <!-- <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Your primary services/products are</label>

					      <input type="text" class="form-control" name="primary_products" id="primary_products"  required="required" value="<?php //echo $primary_products; ?>">
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Your business geography/country/city</label>

					      <input type="text" class="form-control" name="city" id="city"  required="required" value="<?php //echo $city; ?>">
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;PAS required for which service/sector/geography</label>
					      <input type="text" class="form-control" name="pps_service" id="pps_service"  required="required" value="<?php// echo $pps_service; ?>">
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Do you have a website? If Yes, Enter website URL:</label>

					      <input type="text" class="form-control" name="website_URL" id="website_URL" required="required" value="<?php //echo $website_URL; ?>">
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;No. of Unique visitors /month or /day for your website</label>

					      <input type="text" class="form-control" name="Unique_visitors" id="Unique_visitors" value="<?php// echo $Unique_visitors;  ?>">
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Do you currently do digital marketing for your business</label>
					      <input type="text" class="form-control" name="digital_marketing" id="digital_marketing"  required="required" value="<?php //echo $digital_marketing; ?>">
					    </div>

					    <div class="form-group row">
					      <label>If Digital Marketing is done, provide details</label>
					      <textarea type="text" class="form-control" name="provide_details" id="provide_details"  rows="4" ><?php //echo $provide_details;?></textarea>
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Do you get leads/clients from online or offline, If both, what is the share of percentage from each source</label>
					      <input type="text" class="form-control" name="leads_clients" id="leads_clients"  required="required" value="<?php // echo $leads_clients;?>">
					    </div>

					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;What is your average sale cost(one order/one deal)</label>
					      <input type="text" class="form-control" name="average_sale_cost" id="average_sale_cost"  required="required" value="<?php// echo $average_sale_cost; ?>">
					    </div>
					    <div class="form-group row">
					      <label>What is your expectations from our service</label>
					      <textarea type="text" class="form-control" name="our_service" id="our_service"  rows="4" ><?php //echo $our_service; ?></textarea>
					    </div>-->
					    <div class="form-group row">
					      <label><i class="fa fa-asterisk" aria-hidden="true" style="font-size:9px;color:red;"></i>&nbsp;&nbsp;Requirement</label>
					      <textarea type="text" class="form-control" name="business" id="business" required="required" rows="4" ><?php echo $business; ?></textarea>
					    </div>


					    <div class="form-group row">		   
					    	<button type="submit" id="submit" class="btn btn-primary btn-block but-requirement" name="submitForm">Submit</button>
						</div>
						<input type="hidden" name="submit" value="1">
				</form>
			</div>
			<div class="col-xs-12 col-lg-3 col-md-3">
			</div>
		</div>
	</div>
</section>

</html>
<style type="text/css">
	
		.box-layout{
 	 border: 2px solid #f7f4f4;
 	background-color: #f7f4f4;
    margin-bottom: 3rem;
    padding: 40px 45px;
    position: relative;
    -webkit-box-shadow: 0px 1px 0px 0px rgba(227, 227, 227, 0.75);
    -moz-box-shadow: 0px 1px 0px 0px rgba(227, 227, 227, 0.75);
    box-shadow: 0px 1px 0px 0px rgba(227, 227, 227, 0.75);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.but-requirement{
	color: #ffffff;
	position: relative;
    border: solid 1px #ff6a00;
    background-color: #ff6a00;
    margin-left: 0px;
    font-size:16px;
}
.but-requirement:hover{
color: #ff6a00;
background-color: #ffffff; 
 border: solid 1px #ff6a00;
}
label {
    display: inline-block;
    margin-bottom: 1rem;
    font-weight: 400;
    line-height: 20px;
    font-size: 15px;
}
.form-group {
    margin-bottom: 2rem;
}
.form-group {
    width: 100%;
    display: block;
    line-height: 0;
    position: relative;
    margin: 0 auto 30px;
    backface-visibility: hidden;
}
.error {color: #FF0000;}
.errors {color: #11cf43;}
</style>
<?php  
require 'footer.php';
?>