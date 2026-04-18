<?php ?>



<!DOCTYPE html>

<html lang="en">

    <head>

        <?php

        if (!isset($title)) {

            $title = "Web Development, Website Design, Mobile Apps, Android Apps, iOS Apps";

        }

        if (!isset($keywords)) {

            $keywords = "";

        }

        if (!isset($meta_desc)) {

            $meta_desc = "";

        }

        ?>

        <title><?php echo $title; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="keywords" content="<?php echo $keywords; ?>" />

        <meta name="description" content="<?php echo $meta_desc; ?>" />

        <script type="application/x-javascript">

            addEventListener("load", function () {

            setTimeout(hideURLbar, 0);

            }, false);



            function hideURLbar() {

            window.scrollTo(0, 1);

            }

        </script>



        <!-- FlexSlider css -->

        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

        <!-- //FlexSlider css -->



        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" href="css/contact-buttons.css">



        <!-- for bootstrap carousel slider -->

        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">

        <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">

        <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">

        <link href="css/style.css?v=85" rel="stylesheet" type="text/css" media="all" />
        <link href="css/home-refresh.css?v=10" rel="stylesheet" type="text/css" media="all" />
        <link href="css/nav-modern.css?v=4" rel="stylesheet" type="text/css" media="all" />
        <link href="css/inner-pages.css?v=1" rel="stylesheet" type="text/css" media="all" />
        <link href="css/global-responsive.css?v=1" rel="stylesheet" type="text/css" media="all" />

        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

        <link href="css/font-awesome.css" rel="stylesheet">

<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">-->

        <!-- //for bootstrap carousel slider -->



        <!-- fontawesome icons  -->

        <link href="css/font-awesome.css" rel="stylesheet">



        <!-- google fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="css/modern-fonts.css?v=1" rel="stylesheet" type="text/css" media="all" />

        <meta name="google-site-verification" content="QOLSXeW4_v8Ok5TEH9XeZ0p9G0hL280BfNzk_KrUs9k" />

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

        <!-- //google fonts -->

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "@id": "https://www.infoskaters.com/#organization",
          "name": "Infoskaters Technologies Pvt Ltd",
          "url": "https://www.infoskaters.com/",
          "logo": "https://www.infoskaters.com/images/logo-2.png",
          "description": "Web development, mobile apps, and digital marketing services for businesses.",
          "email": "hello@infoskaters.com",
          "sameAs": [
            "https://www.facebook.com/infoskatersTech/",
            "https://twitter.com/infoskatersTech",
            "https://in.linkedin.com/company/infoskaters-technology-pvt-ltd"
          ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "C/O PRESTIGE SHANTINIKETAN, Crescent Tower 4, 2nd Floor",
            "addressLocality": "Bengaluru",
            "addressRegion": "Karnataka",
            "postalCode": "560066",
            "addressCountry": "IN"
          }
        }
        </script>



     <script language="javascript">

  populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down

  populateCountries("country2");

</script>

<?php
// Include WhatsApp button
//include 'whatsapp-button.php';
include 'call-button.php';
?>