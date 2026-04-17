$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1e3, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: !0,
        navigation: !1,
        navigationText: ["", ""],
        slideSpeed: 1e3,
        singleItem: !0,
        autoPlay: !0
    })
});

var admin_email = "hello@infoskaters.com";


function send_contact_message(a) {
    var e = $("#contact_form"),
        n = e.find("[name='name']").val(),
        s = e.find("[name='email']").val(),
        i = e.find("[name='mobile']").val(),
        t = e.find("[name='message']").val();
		cph = e.find("[name='captcha_code']").val()
		
    if ("" == n || "" == s || "" == i || ""==cph) return !1;
    $(a).html('<i class="fa fa-spinner fa-spin"></i>' + $(a).html());
    var l = "<div>";
    l += "<p>" + t + "</p>", l += "Name: " + n, l += "<br>Ph No.: " + i, l += "<br>Email: " + s;
    var m = {
        from: s,
        to: admin_email,
        subject: "New Message From Contact Us Page",
		captcha_code: cph,		
        body: l += "</div>"
    };
    $.ajax({
        type: "POST",
        url: "send_mail.php",
        data: m,
        success: function(e) {
            $(a).find("i").remove(), e = JSON.parse(e), $("#contact-result-block").html('<div class="' + e.cssclass + '" >' + e.message + "</div>"), 1 == e.status && $("#contact_form")[0].reset();
            //console.log(e)
        }
    })
}

function send_quote_message(a, subject) {
    var n = $("#" + a)
        s = n.find("[name='name']").val()
        i = n.find("[name='email']").val()
        t = n.find("[name='isdcode']").val()
        l = n.find("[name='phone']").val()
        m = n.find("[name='company']").val()
        o = n.find("[name='country']").val()
        r = n.find("[name='message']").val()
		cph = n.find("[name='captcha_code']").val()
        
    //console.log("name="+s);    
    if ("" == s || "" == i || "" == l || "" == r || o=="" || cph=="") {
        console.log("Name:"+s+" Email:"+i+" Phone:"+l+" Message:"+r+" Captcha:"+cph);
        return alert("Please fill all mandatory fields!")
    }
    //console.log("sending");
    var c = "<div>";
    c += "<p>" + r + "</p>", c += "Name: " + s, c += "<br>Phone No.: " + t + " " + l, c += "<br>Email: " + i, c += "<br>Company: " + m;
    if(typeof(o)!="undefined"){
        c += "<br>Country: " + o; 
    }
    
    var f = {
        from: i,
        to: admin_email,
        subject: subject,
		captcha_code: cph,
        body: c += "</div>"
    };
    $.ajax({
        type: "POST",
        url: "send_mail.php",
        data: f,
        success: function(e) {
            e = JSON.parse(e);
            alert(e.message);
            if(1 == e.status) $("#" + a)[0].reset();
            //e = JSON.parse(e), $("#result-block").html('<div class="' + e.cssclass + '" style="margin-top:6px;margin-bottom:0" >' + e.message + "</div>"), 1 == e.status && $("#" + a)[0].reset();
            //console.log(e)
        }
    })
}