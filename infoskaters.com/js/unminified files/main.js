
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: false,
        navigationText: ["", ""],
        slideSpeed: 1000,
        singleItem: true,
        autoPlay: true
    });
    
});
var admin_email = "hello@infoskaters.com";

function send_contact_message(el) {
    var form = $("#contact_form");
    var name = form.find("[name='name']").val();
    var email = form.find("[name='email']").val();
    var country_code=form.find("[name='isdcode']").val();
    var mobile = form.find("[name='mobile']").val();
    mobile=country_code+" "+mobile;
    var message = form.find("[name='message']").val();
    var subject = "New message from contactus form";
    if(name=="" || email=="" || mobile==""){
        return false;
    }
    $(el).html('<i class="fa fa-spinner fa-spin"></i>'+ $(el).html());
    var message_body = '<div>';
    message_body += '<p>Name:' + name + '</p>';
    message_body += '<p>Mobile No.:' + mobile + '</p>';
    message_body += '<p>Email:' + email + '</p>';
    message_body += '<p>Message:' + message + '</p>';
    message_body += '</div>';
    var data = {"from": email, "to": admin_email, "subject": subject, "body": message_body};
    $.ajax({
        type: "POST",
        url: "send_mail.php",
        data: data,
        success: success,
        
    });
    function success(response){
         $(el).find("i").remove();
        response=JSON.parse(response);
        console.log(response);
        $("#contact-result-block").html('<div class="'+response.cssclass+'" >'+response.message+'</div>');
        if(response.status==true){
            $('#contact_form')[0].reset();
        }
        
        console.log(response);
    }
}
function send_quote_message(formid,subject){
      var form = $("#"+formid);
    var name = form.find("[name='name']").val();
    var email = form.find("[name='email']").val();
    var country_code= form.find("[name='isdcode']").val();
    var mobile = form.find("[name='phone']").val();
    var company= form.find("[name='company']").val();
    var country= form.find("[name='country']").val();
    //var state= form.find("[name='state']").val();
    var message = form.find("[name='message']").val();
    var message_body = '<div>';
    message_body += '<p>Name:' + name + '</p>';
    message_body += '<p>Mobile No.:'+country_code+' '+ mobile + '</p>';
    message_body += '<p>Email:' + email + '</p>';
    message_body += '<p>Company:' + company + '</p>';
    message_body += '<p>Country:' + country + '</p>';
    //message_body += '<p>State:' + state + '</p>';
    message_body += '<p>Message:' + message + '</p>';
    message_body += '</div>';
     var data = {"from": email, "to": admin_email, "subject": subject, "body": message_body};
       $.ajax({
        type: "POST",
        url: "send_mail.php",
        data: data,
        success: success,
        
    });
    function success(response){
        response=JSON.parse(response);
        $("#result-div").html('<div class="'+response.cssclass+'" >'+response.message+'</div>');
        if(response.status==true){
            $('#'+formid)[0].reset();
        }
        console.log(response);
    }
}
