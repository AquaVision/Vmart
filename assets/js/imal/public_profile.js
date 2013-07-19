$(function(){



    $("#addNavhead").click(function(event){

        var text1	= $("#appendedInputButtoncategory").val();
        if(text1){
            var hds = $('.hds').length+1;
            var itemhead = "<li  class='accordion-group hds' id='hd"+hds+"' >"+
            "<a  data-toggle='collapse' data-target='#subnavhd"+hds+"' data-parent='#sidenav01set' class='accordion-toggle collapsed'>"+
            "<i class='icon-chevron-right pull-right'></i><span id='sphd"+hds+"'>"+text1+"</span>"+
            "<input type='hidden' name='hd"+hds+"' value='' />"+
            "</a>"+
            "<ul id='subnavhd"+hds+"' class='nav nav-list collapse accordian-child' >"+
            "<li id='hd"+hds+"it1'>"+
            "<a>"+
            "<div class='input-append' style='margin-top:5px;'>"+
            "<input class='span2' name='hd"+hds+"it1' type='text' style='width:200px;' placeholder='Item Category'>"+
            "<button class='btn additem' type='button' data-hdcount = "+hds+" data-ulid='subnavhd"+hds+"'><i class='icon-plus'></i></button> "+
            "</div> "+
            "</a>"+
            "</li>"+
            "</ul>"+
            "</li>";
			

				
            $("#sidenav01set").append(itemhead);
		
        }
    });


    $("#removeNavhead").click(function(event){

        $(".activex").closest('li').remove();


    });

    $(".additem").click(function(event){
				
        });


    $('body').delegate('.additem', 'click', function(e) {
        var subnavid = $(this).data("ulid");
        var itc = $("#"+subnavid+" li").length+1;
        var hds = $(this).data("hdcount");

        var item = "<li id='hd"+hds+"it"+itc+"'>"+
        "<a>"+
        "<div class='input-append' style='margin-top:5px;'>"+
        "<input class='span2' name='hd"+hds+"it"+itc+"' type='text' style='width:200px;' placeholder='Item Category'>"+
        "<button class='btn additem' type='button' data-hdcount = "+hds+" data-ulid='subnavhd"+hds+"'><i class='icon-plus'></i></button> "+
        "</div> "+
        "</a>"+
        "</li>";
        $("#"+subnavid).append(item);
    });

    $("#addphonenuber").click(function(){
        var phonenuber = $("#appendedInputButtophone").val();
        if(phonenuber){
            var phone = "<li style='height:30px;'><i class='icon-phone'></i> "+phonenuber+" <button class='btn btn-small removephone' style='float:right' type='button'>X</button><input type='hidden' name='phonenubers' value='"+phonenuber+"'/></li>"
            $("#phonenubersul").append(phone);
        }
    });

    $("body").delegate('.removephone','click',function(){

        $(this).closest("li").remove();
    });


    $("#appendedInputButtophone").keypress(function (e){
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
    });



    $("#soialsellerP").on("change",function(e){
        var selectedop = $(this).find(":selected").text();
        var selected = $(this).val();
        var found = false;
        $("#socialmedai li").each(function(index){
            if($(this).data("what") == selectedop){
                found =  true;
            }
        });
        
        if(!found){
            var elementx = "<li style='margin-top: 10px;' data-what='"+selectedop+"'>"
            +"<div class='row'>"
            +"<div class='span2' style='width:39px;'><img src='images/fixed_images/socialmediaicons/Icons/32/"+selected+"' /></div>"
            +"<div class='span7'> <input type='text'  style='width: 170px;' name ='stitle[]' /></div>"
            +"<div class='span2' style='margin-left: 0px;'><a class='btn removephone'>X</a></div>"
            +"</div>"   
            +"</li>";
    
            $("#socialmedai").append(elementx);
        }
    });




});
