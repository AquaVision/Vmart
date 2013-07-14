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
        adjT(3);
        adjL(140);
        $("#okimage1").remove();
        $("#wrongimage").remove();
        showLoading("#usernamex", "20px");
        
        //starting request
        userchekst = false;
        $.post("../Auth/CheckUserName", {
            "username" : typed
        },
        function(data){
            
            
            var position = $("#loading-indicator").offset();
            var topx = position.top;
            var leftx = position.left;
            
            hideLoading();
            if(data == "true"){
                abimage("right.png", "16px", "16px", topx+"px", leftx+"px", "okimage1");
                userchekst = true;
            }else{
                abimage("wrong.png", "16px", "16px", topx+"px", leftx+"px", "wrongimage");
            }
            
        });
    
        
    });

    $('#signup_tag').on('hide', function () {
        $("#okimage1").remove();
        $("#wrongimage").remove();
    })




});





