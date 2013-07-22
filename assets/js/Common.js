var timmerveraible;
$(function(){

    var userchekst = "";
    

    $("#postdiscuss").click(function(e){

        var text = $("#discuss").val();
        if(text){

            var chatx = "<li class='in'>"+
            "<img class='avatar' alt='' src='images/uploaded/users/avatar2.jpg' />"+
            "<div class='message'>"+
            "<span class='arrow'></span>"+
            "<a href='#' class='name'>Richard Doe</a>"+
            "<span class='datetime'>at Jul 25, 2012 11:09</span>"+
            "<span class='body'>"
            +text+
            "</span>"+
            "</div>"+
            "</li>";


            $("#chatparent").append(chatx);
        }

    });



    $("#usernamex").keyup(function(e){
        var typed = $(this).val();
        $("#okimage1").remove();
        $("#wrongimage").remove(); 
        //starting request
        userchekst = false;
        if(typed.match(/^[a-zA-Z0-9]*$/)){
            adjT(3);
            adjL(140);
            showLoading("#usernamex", "20px");
            $.post("../Auth/CheckUserName", {
                "username" : typed
            },
            function(data){
                hideLoading();
                if(data == "true"){
                    $("#okimage1").remove();
                    $("#wrongimage").remove();
                    abimage("right.png", "16px", "16px","109px", "250px", "okimage1","#signup_tag");
                    userchekst = true;
                }else{
                    $("#okimage1").remove();
                    $("#wrongimage").remove();
                    abimage("wrong.png", "16px", "16px", "109px", "250px", "wrongimage","#signup_tag");
                }
            
            });
        }else{
            userchekst = false; 
            $("#okimage1").remove();
            $("#wrongimage").remove();
            abimage("wrong.png", "16px", "16px", "109px", "250px", "wrongimage","#signup_tag");
        } 
    });





    $('#signup_tag').on('hide', function () {
        $("#okimage1").remove();
        $("#wrongimage").remove();
    })

    


    
    $("#sendverification").on("click",function(e){
        $("#justandid").remove();
        adjT(3);
        adjL(80);
        showLoading("#sendverification", "20px");
        $.post("../settings/sendVerificationNub",{
            "sellerphone" : $("#sellerphonenuber").val()
        },function(data){  
            var posi =  $("#loading-indicator").offset();
            hideLoading();
            var status = data.substring(0,1);
            showTextAb(posi.left+"px", posi.top+"px", "justandid", (((status == "W") || status == "U") ? "W" : ""), data);
           
        });
        
    });
    
   




    $('#sellerdata').validate({
        rules: {
            identity: {
                minlength: 3,
                required: true
            },
            accountholdername: {
                required: true
            },
            bankcode: {
                minlength: 2,
                required: true
            },
            accountnuber: {
                minlength: 2,
                required: true
            },
            branchcode :{
                minlength: 2,
                required : true
            }
        },
        highlight: function(element) {
            $(element).closest('div').removeClass('success').addClass('error');
        },
        success: function(element) {
            element
            .text('OK!').addClass('valid')
            .closest('.controls-row').removeClass('error').addClass('success');
        }
    });


    var urlx = $("#baseurl").val();
    var posi = "x";

    $("#yourid").keyup(function(e){
        $("#fullurlll").val(urlx+$(this).val());
        $("#okimage11").remove();
        $("#wrongimage2").remove();
        $("#showstate").remove();
        adjT(3);
        adjL(140);
        showLoading("#yourid", "20px");
        if(posi == "x"){    
            posi  =  $("#loading-indicator").offset();
        }
        if($(this).val().match(/^[a-zA-Z0-9]*$/) && ($(this).val() != "")){
            $.post("../settings/verifysellerid",{
                "identity" : ($(this).val())
            },function(data){
                hideLoading();
                if(data == "ok"){
                    $("#okimage11").remove();
                    $("#wrongimage2").remove();
                
                    abimage("right.png", "16px", "16px", posi.top+"px", posi.left+"px", "okimage11","body");
                
                }else{
                    $("#okimage11").remove();
                    $("#wrongimage2").remove();
                    abimage("wrong.png", "16px", "16px", posi.top+"px", posi.left+"px", "wrongimage2","body");
                }
            });
        
        }else{
            hideLoading();
            showTextAb(posi.left+"px", posi.top+"px", "showstate", "W", "This can only be a alpha numaric word without spaces");
        }
    });


    $(".add-to-cart").on("click",function(e){
        var id = $(this).data("itemid");
        $.post("../Web_cart/add",{
            "itemid" :id
        }, function(data){
            
            });
        
    });
    
    
    $(".removefromcart").on("click",function(e){
        var id = $(this).data("rowid");
        $.post("../Web_cart/remove/"+id , function(data){
            window.location = "../Web_cart/show";
        });
    });

    $(".change_qty").change(function(){
        var rowid=$(this).data("rowid");
        var qty = $(this).find(":selected").text();
        
        $.post("../Web_cart/update_qty/"+rowid+"/"+qty, function(data){
            window.location="../Web_cart/show";
        });
       
    });
    
    $("#continuexnextpage").on("click",function(e){
        var page = $(this).data("active");
        if(page == "page1"){
            $("#verifyyourslef1").show();
            $.post("../Wizardseller/stepOneInWizard", $('#sellerverificationdata').serialize() , function(data){
                $("#verifyyourslef1").hide();
                $("#verifyyourslef").html("Completed");
                $("#verifyyourslef").css("background-color","#51a351");
               
            });  
        }else if(page == "page2"){
            $("#setupyourstore1").show();
            addaboutus();
            $.post("../Wizardseller/stepTwoInWizard", $('#createstore').serialize() , function(data){
                $("#setupyourstore1").hide();
                $("#setupyourstore").html("Completed");
                $("#setupyourstore").css("background-color","#51a351");
                $("#continuexnextpage").data("active","page3");
            }); 
            
        }
    });


    $("#submitaiyox").on("click",function(e){
       
        $("#completeprofile1").show();
        $("#completeprofile").html("0%");
        timmerveraible =setInterval(function(){
            showalert()
        },400);
    });















    
    
    //important functions  Area--------------- 
    
    function validateEmail(email) { 
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    } 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 check_order_count();
    

});



function showx(mysubmitsett){
               
    adjL(-65);
    adjT(3);
    
    showLoading('#'+mysubmitsett,'20px');
    
                
}

var change = 0;
function showalert(){
    $("#completeprofile").html(change+"%");
    if(change < 30){
        change += 10;
    }else if(change <60){
        change += 30;
    }else if(change < 100){
         change += 40;
    }else if(change == 100){
        $("#completeprofile1").hide();
        $("#completeprofile").css("background-color","#51a351");
        $("#finishwizard").animate( { 'opacity': 1 }, 1000, function(){ });

        clearInterval($timmerveraible);
        //$("#finishwizard").show();
        
    }
}

function addaboutus(){
       
    $("#editordataxy").val($.trim($("#editor").html()));
    return true;
}

function check_order_count(){
            	$.get('../Vmart/get_orders', function(data) {
                    if(data == -1){
                        $('#ordercount').hide();
                    }else{
                        $('#ordercount').html(data);
                    }
                             
                });
            
            }
