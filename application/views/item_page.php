<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <base href="<?= base_url() . "assets/"; ?>">
        <title>Aqua Vision</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">


        <!-- Bootstrap style --> 
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">


        <!--Main style for all pages-->
        <link href="css/MainStyleForAllpages.css" rel="stylesheet" media="screen">   
        <link href="css/sellerfrontstyle.css" rel="stylesheet"> 

        <!-- Bootstrap style responsive --> 
        <link href="css/responseive_base/bootstrap-responsive.min.css" rel="stylesheet">

        <!-- Google-code-prettify --> 

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="images/fixed_images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fixed_images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fixed_images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fixed_images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/fixed_images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="http://wbpreview.com/previews/WB00H3A42/images/favicon.ico">
        <style type="text/css" id="enject"></style>


        <style type="text/css">
            .footera
            {
                color:#ccc; font-size:11px; padding:0; line-height:24px; display:block;
            }

            .contact-us-tbl
            {
                width: 100%;
                margin-top:25px;
            }

            .contact-us-tbl tbody td
            {
                padding: 10px 10px 10px 10px;
            }
            
            #seller-map-div iframe
            {
                width: 100%;
                -webkit-border-radius: 20px;
            }
            
            img.media-imgs
            {
                -webkit-border-radius: 20px;
            }
            
            img.media-imgs:hover
            {
                   
                    -webkit-animation-name: greenPulse;
                    -webkit-animation-duration: 2s;
                    -webkit-animation-iteration-count: 1;
                    -webkit-box-shadow: 0 0 18px #0088cc;
            }
            
            a.media-links:hover,a.media-links:focus
            {
                    text-decoration: none;
            }
            
            div .good
            {
                width: 32px !important;
                height: 32px !important;
                padding: 0px !important;
                background: url(images/icons/good.gif) no-repeat center !important;
                background-size:32px 32px !important;
            }
            
            div .bad
            {
                width: 32px !important;
                height: 32px !important;
                padding: 0px !important;
                background: url(images/icons/bad.gif) no-repeat center !important;
                background-size:32px 32px !important;
            }



        </style>


    </head>
    <body style="">
        <div id="header">
            <?php $this->load->view('includes/navbar'); ?>
        </div>

        <!--Modal for Sign IN-->
        <div id="modalSignIn" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 292px;top: 5%;left: 96%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
                <h3 id="modalLabel" style="text-align:center;">Sign In</h3>
            </div>

            <div class="modal-body">

                <div class="span2">
                    <a href=""><img src="./images/uploaded/facebook-login-button.png" style="width: 100%;margin-bottom: 10px;margin-left: 20px;"></a>
                </div>

                <form>
                    <div class="controls">
                        <!--<div class="span2" style="text-align:center;padding-top:6px;">Username :</div>-->
                        <input type="text" class="span3" placeholder="username" id="inputinfo"><br>

                        <!--<div class="span2" style="text-align:center;padding-top:6px;">Password :</div>-->
                        <input type="text" class="span3" placeholder="password" id="inputinfo">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button id="btnModalSignIn" class="btn btn-primary" data-dismiss="modal" aria-hidden="ture">Sign In</button>
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="ture">Cancel</button>
            </div>
        </div>


        <!--End Modal for Sign IN-->

        <!-- Header End====================================================================== -->
       <div id="carouselBlk" class="container" >
           
              <div class="span12 sellerlandata container" >
                <div style="display:table; width: 100%">
                    <div style="display:table-cell">
                        <span>AccessoryFort </span>
                    </div>
                    <div class="mymenyu" style="display:table-cell; vertical-align:bottom; float: right">
                        <a href="<?php
                        
                      $seller_id =  $item_data["seller_data"]->userid;
                         echo site_url().'User_store/get_data/'.$seller_id;?>"><span class="navseller">Home</span></a>
                                            <a href="<?php echo site_url().'About_us/get_data/'.$seller_id;?>"><span class="navseller">About Us</span></a>
                                            <a href="<?php echo site_url().'Contact_us/get_data/'.$seller_id;?>"><span class="navseller">Contact Us</span></a>
                    </div>
                   
              
                </div>
                
                <hr/>
            </div>
            <div class="container" >
            <div id="myCarousel" class="carousel slide" >
                
                <?php 
                if(count($cover_images) >0){
                
                ?>
                <ol class="carousel-indicators">
                    <?php 
                    $active = "active";
                    for($i=0; $i< count($cover_images); ++$i){  
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?=$i ?>" class="<?=$active ?>"></li>
                   
                    <?php  
                    $active = "";
                    }  
                    ?>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">

                    <?php 
                    $active = "active";
                    foreach ($cover_images as $cover_image): 
                        
                        ?>
                    <div class="item <?=$active ?>">
                        <img style="width:1170px; height: 300px;" src="<?php echo get_assets_path().$cover_image->cover_image; ?>" alt="">
                    </div>
                    <?php
                    $active = "";
                    endforeach;
                    ?>
                    
                    

                </div>
                <!-- Carousel nav -->
                <a class="left carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#myCarousel" data-slide="next">›</a>
                 <?php 
                }
                
                ?>
            </div>
                </div>
        </div>

        <div id="mainBody">
            <div class="container">
                <div class="row">


                    <!-- Sidebar ================================================== -->
                     <?php $this->load->view("includes/leftbar_seller",loadNavBar($seller_id,$seller_shop,$sellerunique)) ?>

                    <!-- Sidebar end=============================================== -->
                    <div class="span9"> 
                         <div class="navbar navbar-inverse" style="position: static; border: #ffffff !important;">
                           
                        </div>
                    </div>
                    
                    <!--Item Content-->

                    <!--Item Content-->
                    
                    <!--User Item Page-->
                    <div class="row">   
                            <div id="gallery" class="span5" >
                                <a title="<?php echo $item_data['seller_data']->title ; ?>">
                                    <img id="item_l_image" src="" style="width:471px;height:354px;" alt="<?php echo $item_data['seller_data']->title ; ?>">
                                </a>

                                <div class="span12 moroptions" style="width:470px; margin-left:0px;">
                                    <div class="item">
                                        <?php foreach($item_images as $image): ?>
                                       
                                            <img class="item_s_image" src="<?php echo get_assets_path()."/".$image->item_image;?>" style="width:141px;height:108px;">
                                        
                                        <?php endforeach; ?>
                                        
                                    </div>
                                </div>



                            </div>
                            <div class="span4">
                                <h3><?php echo $item_data['seller_data']->title ; ?></h3>
                                <small>- <?php echo $item_data['seller_data']->title ; ?></small>
                                <hr class="soft">
                                <form class="form-horizontal qtyFrm">
                                    <div class="control-group">
                                        <label class="control-label" style="text-align:left" ><h3><?php echo $item_data['seller_data']->price."  ".$item_data['seller_data']->price_currancy ;  ?></h3></label>
                                        <div class="controls" style="height:60px; text-align:right">
                                            <input id="item_amt" type="number" value="0" min="0" max="<?php echo $item_data['seller_data']->Qty ?>"  placeholder="Qty."  style="width:60px; margin-top:20px" >
                                        </div><br>
                                        
                                        <button  class="btn addto add-amt-to-cart btn-large btn-primary pull-right " data-itemid="<?php echo $item_data['seller_data']->item_id; ?>"  rel="1"> Add to cart <i class=" icon-shopping-cart"></i></button>
                                        
                                    </div>
                                </form>




                                <hr class="soft clr">
                                <p>
                                    <?php echo $item_data['seller_data']->breif_description; ?>
                                </p>
                                <a id="item_more" class="btn btn-small pull-right" >More Details</a>
                                <br class="clr">


                            </div>

                            <div id="item_details" class="span9" style="margin-top:50px;">
                                
                                <ul id="productDetail" class="nav nav-tabs">
                                    <li class="active"><a href="#product_info" data-toggle="tab">Product Details</a></li>
                                    <li><a href="#customer_reviews" data-toggle="tab" >Customer Reviews</a></li>
                                </ul>
                                
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="product_info">
                                        <h4>Product Information</h4>
                                        <?php echo $item_data['seller_data']->complete_description; ?>
                                    </div>
                                    <div class="tab-pane fade  in" id="customer_reviews">
                                        <h4 style="margin-bottom: 30px;">Customer Reviews</h4>
                                        <?php foreach($item_reviews as $review): ?>
                                        <div>
                                            <div class="row">
                                                <div class="span1 <?php echo $review->buyer_response_type; ?>"></div>
                                                <div class="span6"><?php echo $review->buyer_response; ?></div>
                                                
                                                <div class="span2" >
                                                    <p><?php echo $review->date_int; ?></p>
                                                    <a><p><?php echo $review->username; ?></p></a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <hr>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <br class="clr">
                            </div>
                        </div>
                    <!--End User Item Page-->

                </div>

            </div>


            <footer class="footer ">
                <?php $this->load->view('includes/footer.php'); ?>
            </footer>
            <!-- Placed at the end of the document so the pages load faster ============================================= -->
            <script src="jquerylib/jquery-1.10.1.min.js"></script>
            <script src="js/jquery.masonry.min.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
            <script src="js/sellerfront.js"></script>
            <script type="text/javascript" src="js/jquery.totemticker.js"></script>
            <script src="js/bootvalidate/assets/js/jquery.validate.min.js"></script>
            <script type="text/javascript" src="js/Common.js"></script>
            
            <script type="text/javascript">
                $(window).load(function(){
                    //alert(":P");
                    var s_src = $($('.item_s_image')[0]).attr("src");
                    $("#item_l_image").attr("src",s_src);
                });


                $('#btnModalSignIn').on('click',function(){
                    $('#usrSignInLi').css({display:'none'});
                    $('#usrLgdInLi').css({display:'block'});
                });

                $('#item_more').on('click',function(){
                    $('html,body').animate({scrollTop: $('#item_details').offset().top}, 1000);
                });
                
                $('.item_s_image').on('click',function(){
                    var s_src = $(this).attr("src");
                    var l_src = $('#item_l_image').attr('src');
                    $("#item_l_image").attr("src",s_src);
                });
                
                $(".add-amt-to-cart").on("click",function(e){
                alert("Click kalalu");
                var id = $(this).data("itemid");
                var item_amt = $('#item_amt').val();
                $.post("../Web_cart/add_specific_amt/",{
                    "itemid" :id,
                    "item_amt" : item_amt
                }, function(data){

                    });});
                
                
            </script>


            <!-- Themes switcher section ============================================================================================= -->

            <span id="themesBtn"></span>

            <a class="media-links" href="">
                <img class="media-imgs" src="">
            </a>


    </body></html>