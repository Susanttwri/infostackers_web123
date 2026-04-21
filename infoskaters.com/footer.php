<?php
?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script type= "text/javascript" src = "js/countries.js"></script>
        <script type= "text/javascript" src = "js/demo.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!-- footer -->
<div class="footer_top_agileits">
	<div class="container-fluid">
		<div class="col-md-4 footer_grid">
			<h3>About Us</h3>
			<p>We are a team of technology enthusiasts specializing in web development, software development, mobile app creation and SEO. Our goal is to ensure our services are just what your business needs to grow, gain more customers, and establish a profitable online presence.</p>
			<!-- <div class="read">
				<a href="about.html">Read more »</a>
			</div> -->
		</div>
		
		<div class="col-md-4 footer_grid footer_grid-addr" style="padding-left:23px;">
			<h3>Address</h3>
			<ul class="address">
				
                <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Bangalore Head Office</strong>
                <span style="margin-top:3px;">Infoskaters Technologies Pvt. Ltd.<br>
                C/O PRESTIGE SHANTINIKETAN, Cresent Tower 4 2nd Floor, Hobli, Krishnarajapura, Bengaluru, Karnataka 560066
                </span>
                </li>
             <!--   <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Pune Branch Offices</strong>
			
				<span>6th Floor, Pentagon P-2, Magarpatta, Hadapsar, Pune</span>	<br />
				<span>  
                Opulent Central Park No.03, Shewalewadi, Pune Maharashtra 412307</span>
				</li>-->

                <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Canada</strong>
                <span >965, Bovaird Dr West, Unit 201, Brampton, Ontario, CANADA - L6X0G3
                </span>
                </li>
                
                 <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Dubai</strong>
                <span >ELOB Office No. E-99F-10,PO.Box 50501,Sharjah, UAE
                </span>
                </li>
		
			</ul>
		</div>
		<div class="col-md-4 footer-grid_agileits_w3 footer_grid footer_grid-contact">
				<h3>Contact Details</h3>
			<ul class="address addrs snd">
				<li><i class="fa fa-envelope" aria-hidden="true" style="color:#ff6a00; border: none; background: transparent;"></i> <strong>Sales:</strong> hello@infoskaters.com</li>
				<li><i class="fa fa-envelope" aria-hidden="true" style="color:#ff6a00; border: none; background: transparent;"></i> <strong>Support:</strong> support@infoskaters.com</li>
                <li class="footer-send-wrap" style="margin-top:15px;"><a href="contact.php" class="snd-msg">Send message</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- Removed Sticky Contact Bar as per user request -->
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_w3ls">
	<div class="container">
		<div class="footer_bottom1">
			<p>&copy; 2026 Infoskaters Technologies Pvt. Ltd. All rights reserved.</p>
		</div>
		<div class="footer_bottom2">
		<ul class="terms">
			<li><a href="privacy.php" target="blank">Privacy Policy</a></li>
			<li><a href="terms.php" target="blank">Terms of Service</a></li>
		</ul>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- js -->
   <!-- countries start-->
   <script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
   </script>
   <!-- countries end -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	 <script src="js/jquery.slideshow.js"></script>
	
	<!-- <script src="js/jquery.slideshow.js"></script> -->
	
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- owl carousel -->
	<script src="js/owl.carousel.js"></script>

	<script>
        $('#J_slideShowY').slideShow({ 'events': 'click', 'type': 'y', 'speed': 800, 'time': 2400, 'plus': false, 'minus': false});
         
         
      </script>

	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				items: 3,
				itemsDesktop: [991, 2],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //owl carousel -->
	
	<!-- Responsive slider  -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Responsive slider  -->

	<!-- Flex slider-script -->
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
	<!-- //Flex slider-script -->
	
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->

	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

    
	<!-- //smooth scrolling js -->

	<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script type="text/javascript">

$(window).load(function() {
    
    
    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        itemsToScroll: 1,
        autoPlay: {
            enable: true,
            interval: 7000,
            pauseOnHover: true
        }
    });  
    
});
</script>
<script src="js/main.js?v=<?php echo time(); ?>"></script>
<script src="js/jquery.contact-buttons.js"></script>
<script src="js/demo.js"></script>
<script>
    (function() {
        var throttleTimer;
        var throttle = function(callback, time) {
            if (throttleTimer) return;
            throttleTimer = true;
            setTimeout(function() {
                callback();
                throttleTimer = false;
            }, time);
        };

        $(window).scroll(function() {
            throttle(function() {
                var position = $(this).scrollTop();
                if (position >= 40) {
                    $(".fixed-header").addClass("is-scrolled");
                } else {
                    $(".fixed-header").removeClass("is-scrolled");
                }
            }, 100); // 100ms throttle
        });
    })();
</script>
<script>
	$(document).ready(function(){
		var width = $( window ).width();
   if(width >= 1000){
    $(".nav .dropdown").mouseover(function() {
        //console.log("mouse hover");
        $(".nav .dropdown").removeClass("open");
        $(this).addClass("open");
        $(".dropdown-menu").css("margin-top", "0px");
    }).mouseout(function() {
        $(".nav .dropdown").removeClass("open");
    });
}else{
    $("#services-menu").click(function(){
       var isopen = $(this).parent().hasClass("open");

       if(isopen){
          $(this).parent().removeClass("open");
           //alert(isopen);
       }else{
        $(this).parent().addClass("open");
        alert(isopen);
       }
        
    }).off('click');
    $("#product-menu").click(function(){
       var isopen = $(this).parent().hasClass("open");
       if(isopen){
          $(this).parent().removeClass("open");
       }else{
        $(this).parent().addClass("open");
       }
        
    }).off('click');

}
	});
</script>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=11010066; 
var sc_invisible=1; 
var sc_security="e43807c7"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<!-- End of StatCounter Code for Default Guide -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101428996-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101428996-2');
</script>
<!-- End gtag -->

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4840286.js"></script>
<!-- End of HubSpot Embed Code -->

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '87ebc3a4-a41e-44f3-a637-acfbe85ce74b', f: true }); done = true; } }; })();</script>
<style type="text/css">
    #toTop{
            right: 15px;
    }
</style>
