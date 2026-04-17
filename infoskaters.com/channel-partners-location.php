<?php
$title = "Franchisee";
require 'header.php';
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="css/channel-partners-location.css?v=5" rel="stylesheet">
</head>
<body>
    <?php
    require 'nav.php';
    require 'franch_dbconnect.php';
    $rows = get_rows("select partners.*,user_detail.mobile_no from partners,user_detail where partners.partner_id=user_detail.user_id order by partner_id");
    ?>


    <div class="container channel_partners_details" style="">

        <div class="row col-md-12 col-sm-12">

            <div class="outer_box">

                <?php
                foreach ($rows as $row) {

                    $rating = get_row("SELECT AVG(rating) as rating,count(*) as votes FROM `review` WHERE partner_id=" . $row['partner_id']);
                    $company_rating = $rating["rating"];
                    $votes = $rating["votes"];
                    if (!$company_rating) {
                        $company_rating = 0;
                    }
                    $company_rating = round($company_rating);
                    ?>    

                    <div class="list-group-item active" style="-webkit-box-shadow: 2px 2px 8px 0px rgba(0,0,0,0.75);-moz-box-shadow: 2px 2px 8px 0px rgba(0,0,0,0.75);box-shadow: 2px 2px 8px 0px rgba(0,0,0,0.75);background-color:#fff;border:solid 1px #fff;margin-bottom: 20px;">
                        <div class="list-group list-group_lead">
                            <div class="col-md-4 col-sm-12 desc">
                                <a href="https://www.infoskaters.com/franchise/<?= $row['url'] ?>"><img src="franchise/images/<?= $row['buisness_logo'] ?>" alt="" style="border-radius:10px;"></a>
                            </div>
                            <div class="col-md-8 amt_details">
                                <div class="col-md-7 col-sm-12 partners_business_name">
                                    <h3 style="margin-bottom: 15px;"><?= $row['buisness_name'] ?></h3>
                                    <div class="col-sm-9 col-xs-12 ratings">
                                        <div class="tleorlp">
                                            <h1 class="rstotle"></h1>

                                            <input type="hidden" id="issrbt" data-rbt="0" value="0" data-vtp=''>

                                            <div>

                                                <span  class="strtngwpr" onclick="flipandscroll('rvw');
                                                        _ct('rtng', 'dtpg');
                                                        disprevs('rvw', 'toprevc');">
                                                    <span class='rating' >
                                                        <span class="total-rate"><span class="value-titles" ><?php echo $company_rating ?></span></span>													<span class="strcls">
                                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                <?php if ($i <= $company_rating) { ?> 
                                                                    <span class="s10"><i class="fa fa-star"></i></span>
                                                                <?php } else { ?>
                                                                    <span class="s10"><i class="fa fa-star-o"></i></span>
                                                                <?php } ?>
                                                            <?php } ?>	
                                                        </span>
                                                    </span>
                                                    <span class="rtngsval" > 
                                                        <span class="votes" > <?= $votes ?></span>
                                                        <span class="value-title" title="4.2"></span>
                                                        <span class="lng_commn"> Votes</span></span>
                                                </span>
                                                <ul class="rstocnct" style="margin-top:10px;">
                                                    <li>
                                                        <span class="adrsicn hidden-xs"></span>
                                                        <span class="adrstxt" onclick="goToByScrolldetail('comp-contact')">
                                                        </span>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <p class="jrcw">
                                                            <span class="ic_phn">
                                                                <i class="fa fa-phone" style="color:#000 !important;"></i>
                                                            </span>
                                                            <span class="telCntct">
                                                                <span class="telnowpr" ><?= $row['mobile_no'] ?></span>                          
                                                            </span>
                                                            <input type="hidden" value="0" dat-id="0">
                                                        </p>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-1 col-sm-12">
                                    <a href="https://www.infoskaters.com/franchise/<?= $row['url'] ?>" target="blank"><button type="button" class="btn btn-primary view_details_leads" style="margin-left:0;border-radius:0;margin-top: 10px;">View Details</button></a>
                                </div>
                            </div>
                        </div>  
                    </div>

                <?php } ?>



            </div>
        </div>
    </div>


</div>
</div>


</div>
<?php
require 'footer.php';
?>
</body>
</html>