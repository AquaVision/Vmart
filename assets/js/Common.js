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

    
    
    
   
    
    
    //important functions  Area--------------- 
    
    function validateEmail(email) { 
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    } 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

});



 function showx(){
               
        adjL(-65);
        adjT(3);
        showLoading('#mysubmitsett','20px');
        ++i;
                
    }

