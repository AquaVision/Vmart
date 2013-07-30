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
            
            

        </style>


    </head>
    <body style="">
        <div id="header">
            
            <?php  
            
            $this->load->view('includes/navbar'); ?>
        </div>

        <!--Modal for Sign IN-->
        <div id="modalSignIn" class="modal hide fade" aria-labelledby="modalLable" aria-hidden="true" style="width: 292px;top: 5%;left: 96%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
                <h3 id="modalLabel" style="text-align:center;">Sign In</h3>
            </div>

            <div class="modal-body">

                <div class="span2">
                    <a ><img src="./images/uploaded/facebook-login-button.png" style="width: 100%;margin-bottom: 10px;margin-left: 20px;"></a>
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
                        <span><?=$seller_shop ?></span>
                    </div>
                    <div class="mymenyu" style="display:table-cell; vertical-align:bottom; float: right">
                        <a href="<?php echo site_url().'User_store/get_data/'.$seller_id;?>"><span class="navseller">Home</span></a>
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
                        <?php if(count($featured_products) >0){ ?>
                        <div class="well well-small">
                            <h4>Featured Products <small class="pull-right"><?=count($featured_products) ?> featured products</small></h4>
                            <div class="row-fluid" style="height: 250;" >
                                <div id="featured" class="carousel slide">
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <ul class="thumbnails" id="carosalproducts">
                                                <?php foreach ($featured_products as $item): ?>
                                                <li class="span3" onclick="window.location='<?php echo site_url("Item/get_item/{$item->item_id}") ?>'">
                                                    <div class="thumbnail" style="width:198px">
                                                        <img alt="" src="<?php echo get_assets_path().$item->image_url ; ?>" height="145px" width="212px" style="height: 145px;width: 212px;">
                                                        <div class="caption">
                                                            <h6 class="itemtitle"><?php echo $item->title; ?></h6>
                                                            <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                                <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                                <div class="span1 nuberofsales" style="margin-left:0px;"><?php echo $item->rating ; ?></div>
                                                            </div>

                                                            <p>
                                                                <a class="btn primary details show_magnifier_modal" 
                                                                   data-itemid="<?php echo $item->item_id; ?>"
                                                                   data-imgurl="<?php echo get_assets_path() . $item->image_url; ?>"
                                                                   data-itemtitle="<?php echo $item->title; ?>"
                                                                   data-itemprice="<?php echo $item->price; ?>"
                                                                   ><i class="icon-zoom-in"></i>
                                                                </a> 
                                                                <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>"  rel="1"><i class="icon-shopping-cart"></i></a> 
                                                                <span class="label label-info price"><?php echo $item->price." ".$item->currency ?></span>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li>
                                                <?php endforeach; ?>                                                
                                            </ul>
                                        </div>



                                        <div class="item">
                                            <ul class="thumbnails" id="carosalproducts">
                                                <?php foreach ($featured_products as $item): ?>
                                                <li class="span3" onclick="window.location='<?php echo site_url("Item/get_item/{$item->item_id}") ?>'">
                                                    <div class="thumbnail" style="width:198px">
                                                        <img alt="" src="<?php echo get_assets_path().$item->image_url; ?>" height="145px" width="212px" style="height: 145px;width: 212px;">
                                                        <div class="caption">
                                                            <h6 class="itemtitle"><?php echo $item->title; ?></h6>
                                                            <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                                <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                                <div class="span1 nuberofsales" style="margin-left:0px;"><?php echo $item->rating ; ?></div>
                                                            </div>
                                                            <p>
                                                                <a class="btn primary details show_magnifier_modal" 
                                                                   data-itemid="<?php echo $item->item_id; ?>"
                                                                   data-imgurl="<?php echo get_assets_path() . $item->image_url; ?>"
                                                                   data-itemtitle="<?php echo $item->title; ?>"
                                                                   data-itemprice="<?php echo $item->price; ?>"
                                                                   ><i class="icon-zoom-in"></i>
                                                                </a> 
                                                                <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>"  rel="1"><i class="icon-shopping-cart"></i></a>  
                                                                <span class="label label-info price"><?php echo $item->price." ".$item->currency ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php endforeach; ?>              
                                            </ul>
                                        </div>



                                    </div>
                                    <a class="left carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#featured" data-slide="prev">‹</a>
                                    <a class="right carousel-control" href="http://bootstrapshoppingcart.com/preview/bootstrapshop/#featured" data-slide="next">›</a>
                                </div>
                            </div>
                        </div>
                        <?php  } ?>

                        <h4 class="muted">Our Products </h4>
                        <div class="mainContent" style="padding-top:1px; padding-left:0px;">

                            <ul class="thumbnails" id="selleritems" style="position: relative;">
                                <?php foreach ($all_products as $item): ?>
                                <li class="span3 masonry-brick" onclick="window.location='<?php echo site_url("Item/get_item/{$item->item_id}") ?>'">
                                    <div class="thumbnail" style="width:200px">
                                        <img alt="" src="<?php echo get_assets_path().$item->MainImageUrl ; ?>" height="145px" width="212px" style="height: 145px;width: 212px;">
                                        <div class="caption">
                                            <h6 class="itemtitle"><?php echo $item->title; ?></h6>
                                            <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                <div class="span1 nuberofsales" style="margin-left:0px;"><?php echo $item->rating ; ?></div>
                                            </div>

                                            <p>
                                                <a class="btn primary details show_magnifier_modal" 
                                                                   data-itemid="<?php echo $item->item_id; ?>"
                                                                   data-imgurl="<?php echo get_assets_path() . $item->MainImageUrl; ?>"
                                                                   data-itemtitle="<?php echo $item->title; ?>"
                                                                   data-itemprice="<?php echo $item->price; ?>"
                                                                   ><i class="icon-zoom-in"></i>
                                                                </a> 
                                                                <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>"  rel="1"><i class="icon-shopping-cart"></i></a>  
                                                <span class="label label-info price"><?php echo $item->price." ".$item->price_currancy; ?></span>
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            
                            </ul>
                            
                            <div class="pagessho" >
                                <div class="pagination">
                                    <ul>
                                        <li><a >Prev</a></li>
                                        <li class="active">
                                            <a >1</a>
                                        </li>
                                        <li><a >2</a></li>
                                        <li><a >3</a></li>
                                        <li><a >4</a></li>
                                        <li><a >Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <h4 class="muted">New Arrivales </h4>
                        <div class="mainContent" style="padding-top:1px; padding-left:0px;">
                            <ul class="thumbnails" id="selleritems" style="position: relative;">
                                
                                <?php foreach ($new_products as $item): ?>
                                <li class="span3 masonry-brick" onclick="window.location='<?php echo site_url("Item/get_item/{$item->item_id}") ?>'">
                                    <div class="thumbnail" style="width:200px">
                                        <img alt="" src="<?php echo get_assets_path().$item->MainImageUrl ; ?>"style="height: 145px;width: 212px;" >
                                        <div class="caption">
                                            <h6 class="itemtitle"><?php echo $item->title; ?></h6>
                                            <div class="row" style="margin-left:0px; margin-bottom:5px;">
                                                <div class="span6 ratex <?php echo get_formatted_rating($item->rating); ?>" style="margin-left:0px;"></div>
                                                <div class="span1 nuberofsales" style="margin-left:0px;"><?php echo $item->rating ; ?></div>
                                            </div>

                                            <p>
                                                <a class="btn primary details show_magnifier_modal" 
                                                                   data-itemid="<?php echo $item->item_id; ?>"
                                                                   data-imgurl="<?php echo get_assets_path().$item->MainImageUrl; ?>"
                                                                   data-itemtitle="<?php echo $item->title; ?>"
                                                                   data-itemprice="<?php echo $item->price; ?>"
                                                                   ><i class="icon-zoom-in"></i>
                                                </a>  
                                                <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>"  rel="1"><i class="icon-shopping-cart"></i></a>  
                                                <span class="label label-info price"><?php echo $item->price." ".$item->price_currancy; ?></span>
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                
                            </ul>
                            <div class="pagessho" >
                                <div class="pagination">
                                    <ul>
                                        <li><a >Prev</a></li>
                                        <li class="active">
                                            <a >1</a>
                                        </li>
                                        <li><a >2</a></li>
                                        <li><a >3</a></li>
                                        <li><a >4</a></li>
                                        <li><a >Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            
            <footer class="footer ">
                <?php $this->load->view('includes/footer.php'); ?>
            </footer>
            
            <!--Modal for Item Magnifier-->
            <div id="item_magnifier" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">×</a>
                    <h3 id="mag-itemtitle"></h3>
                </div>
                <div class="modal-body">
                    <div class="thumbnail img">
                        <img alt="" id="mag-itemimg">
                    </div>
                    <p id="mag-itemdesc"></p>
                </div>
                <div class="modal-footer">
                    <span class="label label-info price" id="mag-itemprice"></span>
                    <a class="btn addto add-to-cart" data-itemid="<?php echo $item->item_id; ?>"  rel="1"><i class="icon-shopping-cart"></i></a> 
                </div>
            </div>
            <!--End Modal for Item Magnifier-->
            
            
            <!-- Placed at the end of the document so the pages load faster ============================================= -->
            
            <script src="jquerylib/jquery-1.10.1.min.js" type="text/javascript"></script>
            <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/prettify_base.js"></script>
            <script src="js/bootshop_base.js"></script>
            <script src="jquerylib/jquery.lightbox-0.5.js"></script>

            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="js/accordianMenu.js"></script>
            <script src="js/sellerfront.js"></script>
            
            <script type="text/javascript" src="js/Common.js"></script>
            
            
            <script type="text/javascript">

                $('#btnModalSignIn').on('click',function(){
                    $('#usrSignInLi').css({display:'none'});
                    $('#usrLgdInLi').css({display:'block'});
                });
                
                    $(".add-to-cart").on("click",function(e){
                    alert("Click kalalu");
                    var id = $(this).data("itemid");
                    $.post("../Web_cart/add",{
                        "itemid" :id
                    }, function(data){

                        });

                });

                $(".show_magnifier_modal").on('click',function(e)
                {
                    //alert("Click kala");
                    var item_id= $(this).data("itemid");
                    var item_image = $(this).data("imgurl");
                    var item_title = $(this).data("itemtitle");
                    var item_price = $(this).data("itemprice");


                    var url = "../Vmart/get_item_details/"+item_id;
                    $.get(url, function(data) {
                        $('#mag-itemtitle').html(item_title);
                        $('#mag-itemimg').attr('src',item_image);
                        $('#mag-itemdesc').html(data);
                        $('#mag-itemprice').html(item_price);
                        $("#mngitemid").data("itemid",item_id);
                    }).success(function() {
                        $('#item_magnifier').modal({
                            show:true
                        });
                    });
                });



            </script>


            <!-- Themes switcher section ============================================================================================= -->

            <span id="themesBtn"></span>



    </body></html>