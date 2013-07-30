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

            .p-about-us:first-letter
            {
                style="float:left;width:0.7em;font-size:400%;font-family:algerian,courier;line-height:80%;
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
                        <span><?=$seller_shop ?> </span>
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
                        
                        <!--About us Content-->
                        <div class="about-us-div" style="-webkit-border-radius: 10px;min-height: 800px;">
                            <div class="" style="text-algin:center;"></div>
                            <div class="" style="text-algin:center;">
                              <img src="images/fixed_images/backgrounds/about-us.jpg" height="100%" width="100%/">
                            </div>
                            <div style="padding: 35px 6px 1px 50px;text-align: justify;text-indent: 0px;">
                                <p class="p-about-us"><?php echo $aboutus->aboutus;?></p>
                            </div>
                        </div>
                        
                        <!--End About us Content-->

                    </div>
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

                $('#btnModalSignIn').on('click',function(){
                    $('#usrSignInLi').css({display:'none'});
                    $('#usrLgdInLi').css({display:'block'});
                });


            </script>


            <!-- Themes switcher section ============================================================================================= -->

            <span id="themesBtn"></span>



    </body></html>