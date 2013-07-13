$(function(){

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








});





