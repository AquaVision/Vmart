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
            <div id="myCarousel" class="carousel slide" style="margin-top:23px;">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" ></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item"><img style="width:100%" src="images/fixed_images/1.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                    <div class="item"><img style="width:100%" src="images/fixed_images/2.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                    <div class="item"><img style="width:100%" src="images/fixed_images/3.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                    <div class="item"><img style="width:100%" src="images/fixed_images/4.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="left carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#myCarousel" data-slide="next">›</a>
            </div>
        </div>

        <div id="mainBody">
            <div class="container">
                <div class="row">


                    <!-- Sidebar ================================================== -->
                    <?php include_once "includes/leftbar_seller.php" ?>

                    <!-- Sidebar end=============================================== -->
                    <div class="span9"> 
                        <div class="navbar navbar-inverse" style="position: static;">
                            <div class="navbar-inner ">
                                <div class="container ">
                                    <div class="brand"></div>
                                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    <div class="nav-collapse collapse navbar-inverse-collapse">
                                        <ul class="nav pull-right">

                                            <li class="active"><a href="<?php echo site_url().'User_store/get_data/'.$item_data['seller_data']->userid;?>"><i class="icon-home icon-white"></i> Home</a></li>
                                            <li><a href="<?php echo site_url().'About_us/get_data/'.$item_data['seller_data']->userid;?>">About us</a></li>
                                            <li><a href="<?php echo site_url().'Contact_us/get_data/'.$item_data['seller_data']->userid;?>">Contact us</a></li>
                                            
                                        </ul>
                                        <form class="navbar-search pull-right" >
                                            <input type="text" class="search-query" placeholder="Search">
                                        </form>
                                    </div><!-- /.nav-collapse -->
                                </div>
                            </div><!-- /navbar-inner -->
                        </div>
                    </div>
                    
                    <!--Item Content-->

                    <!--Item Content-->
                    
                    <!--User Item Page-->
                    <div class="row">   
                            <div id="gallery" class="span5" >
                                <a href="" title="<?php echo $item_data['seller_data']->title ; ?>">
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
                                            <input type="number" value="0" min="0" max="<?php echo $item_data['seller_data']->Qty ?>"  placeholder="Qty."  style="width:60px; margin-top:20px" >
                                        </div><br>
                                        <button type="submit" class="btn addto add-to-cart btn-large btn-primary pull-right "> Add to cart <i class=" icon-shopping-cart"></i></button>
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
                                        <h4>Customer Reviews</h4>
                                        <?php foreach($item_reviews as $review): ?>
                                        <div>
                                            <h5><?php echo $review->buyer_response_type; ?></h5>
                                            <p><?php echo $review->buyer_response; ?></p>
                                            <p><?php echo $review->date_int; ?></p>
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
            <script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
            <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/prettify_base.js"></script>
            <script src="js/bootshop_base.js"></script>
            <script src="jquerylib/jquery.lightbox-0.5.js"></script>

            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="js/accordianMenu.js"></script>
            <script src="js/sellerfront.js"></script>
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
                
                
                
            </script>


            <!-- Themes switcher section ============================================================================================= -->

            <span id="themesBtn"></span>

            <a class="media-links" href="">
                <img class="media-imgs" src="">
            </a>


    </body></html>