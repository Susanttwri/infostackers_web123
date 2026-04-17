<?php
$con = mysqli_connect("localhost", "infoskat_leadd", '(~EcTOsoi~uJ', "infoskat_leaddist");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$title = "Buy Leads | Purchase Leads Online | B2B Leads | Projects | Verified Latest Leads";
$keywords = "Buy Leads,Purchase Leads Online, Buy B2B Leads";
$meta_desc = "Find Latest product leads, latest projects, verified leads from businesses, manufacturers, buyers, sellers from India.";
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
    <div class="buy_leads" style="padding-bottom:60px;padding-top:20px;">
    <div class="container lead_info">
        <div class="row about_us_row" style="margin-left:15px;">
            <div class="col-md-12 about_para_column">
                <h1 style="margin-top: 20px;">Buy Leads, B2B Leads, Purchase Leads Online</h1>
                <p>Find Latest product leads, latest projects, verified leads from businesses, manufacturers, buyers, sellers from India.<br> Construction, Software, Telecommunication, Real Estate, Services Industry, Education Training leads and projects that are verified.</p>
                <br>


            </div>
        </div>

    </div>
    <div class="container">
        <div class="row col-md-12">

            <?php
            $res = mysqli_query($con, "select name, city, project_detail, project_value, project_end_date from lead where tags like '%featured%' order by created desc limit 10");
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    ?>
                    <div class="outer_box">
                      <div class="list-group-item active buy_lead_details" style="-webkit-box-shadow: 2px 2px 8px 0px rgba(0,0,0,0.75);-moz-box-shadow: 2px 2px 8px 0px rgba(0,0,0,0.75);box-shadow: 2px 2px 8px 0px rgba(0,0,0,0.75);background-color:#fff;border:solid 1px #fff;">
                        <div class="list-group list-group_lead">
                            <div class="col-lg-6 col-sm-12 desc">
                                <h4 class="list-group-item-heading"><?php echo $row['name'] ?></h4>
                                <p class="list-group-item-text"><?php $detail = $row['project_detail'];
                                    if (strlen($detail) > 150) echo substr($detail, 0, 150) . "...";
                                    else echo $detail; ?></p>
                            </div>
                            <div class="col-md-6 amt_details amt_details2">
                                <div class="col-lg-1 col-sm-12">
                                    <span ><i class="fa fa fa-inr"></i></span>
                                    <span ><i class="fa fa-map-marker"></i></span>
                                    <span ><i class="fa fa-clock-o"></i></span>
        <!--                                <span ><i class="fa fa-hashtag"></i></span>-->
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <p><?php echo $row['project_value']; ?></p>
                                    <p><?php echo $row['city']; ?></p>
                                    <p><?php if ($row['project_end_date']) echo date('d M, Y', strtotime($row['project_end_date'])); ?></p>
                                </div>
                                <div class="col-lg-1 col-sm-12">
                                    <a href="https://www.infoskaters.com/leads/register" target="blank"><button type="button" class="btn btn-primary view_details_leads" style="margin-left:0;border-radius:0;margin-top: 10px;">View Details</button></a>
                                </div>
                            </div>
                        </div>  
                        </div>
                    </div>
                        <?php
                    }
                }
                ?>
        </div>
        <div class="row col-md-12" style="text-align:center;">
         <a href="https://www.infoskaters.com/leads/register" target="blank"><button type="button" class="btn btn-primary view_details_leads" style="margin-left:0;border-radius:0;margin-top: 10px;">View More Leads<i class="fa fa-arrow-right" style="font-weight:400;margin-left:10px;"></i></button></a>
         </div>
    </div>
    </div>
  

        <?php
        require 'footer.php';
        ?>

</body>
</html>