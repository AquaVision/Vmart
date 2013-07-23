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


            #seller-loc-map
            {
                -webkit-border-radius: 20px;
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

                                            <li class="active"><a href="<?php echo site_url().'User_store'?>"><i class="icon-home icon-white"></i> Home</a></li>
                                            <li><a href="<?php echo site_url().'About_us/get_data/21'?>">About us</a></li>
                                            <li><a href="<?php echo site_url().'Contact_us/get_data/21'?>">Contact us</a></li>
                                            
                                        </ul>
                                        <form class="navbar-search pull-right" >
                                            <input type="text" class="search-query" placeholder="Search">
                                        </form>
                                    </div><!-- /.nav-collapse -->
                                </div>
                            </div><!-- /navbar-inner -->
                        </div>
                        
                        <!--Contact us Content-->
                        <div class="contact-us-div" style="-webkit-border-radius: 10px;min-height: 800px;">

                            <div class="" style="text-algin:center;">
                              <img src="images/fixed_images/backgrounds/contact_us.jpg" height="100%" width="100%/">
                            </div>
                            
                            <table class="contact-us-tbl">
                                <colgroup>
                                    <col width="50%">
                                    <col width="50%">
                                </colgroup>

                                <tbody>
                                    <tr>
                                        
                                        <td>
                                            <div class="contact-detials-div">
                                                
                                                <table class="contact-details-tbl">
                                                    
                                                     <!--Social Media-->
                                                    <tr>
                                                        <td>
                                                            <h5>Like us on :</h5> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            
                                                            <?php foreach ($seller_media as $media):?>
                                                                <a href="<?php echo $media->socialmediaURL; ?>">
                                                                    <img src="<?php echo get_images_path()."fixed_images/socialmediaicons/Icons/32/".$media->socialmediaImg ;?>">
                                                                </a>
                                                            <?php endforeach;?>
                                                        </td>    
                                                    </tr>
                                                    <!--End Social Media-->

                                                    <!--Emails-->
                                                    <tr>
                                                        <td>
                                                            <h5>Emails : </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href=""><?php echo $seller_contacts->email_for_meesage;  ?></a></br>
                                                            <a href=""><?php echo $seller_contacts->email_for_display;  ?></a>                                                            
                                                        </td>
                                                    </tr>
                                                    <!--End Emails-->

                                                    <!--Seller Data BLOB-->
                                                    <tr>
                                                        <td>
                                                            <h5>Further Details</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:justify;">
                                                            <?php echo $seller_contacts->contactus ; ?>
                                                        </td>
                                                    </tr>
                                                    <!--End Data BLOB-->

                                                    <!--Seller Phones-->
                                                    <tr>
                                                        <td>
                                                            <h5>Phones</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            
                                                            <?php foreach ($seller_phones as $phone):?>
                                                                <p><?php echo $phone->phone_number; ?></p>
                                                            <?php endforeach;?>
                                                        </td>
                                                    </tr>
                                                    <!--End Seller Phones-->

                                                    <!--
                                                    <tr>
                                                        <td>
                                                            <h5>Our Location : </h5>
                                                            <div class="seller-loc-map">
                                                                <img src="" height="100px" width="100px">
                                                            </div>
                                                        </td>
                                                    </tr>-->
                                                </table>

                                            </div>
                                        </td>

                                        <td>
                                            <div class="contact-form-div">
                                                <form method="post" action="<?php echo site_url('Contact_us/insert_feedback') ; ?>">
                                                    <label><h5>Feel free to contact us : </h5></label>
                                                    <div class="controls control-group">
                                                        <input type="text" class="span4" placeholder="Email" name="customer_email">
                                                        <textarea class="span4" rows="10" name="customer_feedback" ></textarea>
                                                    </div>
                                                    <button type="submit" class="btn">Submit</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>

                                <tfoot>
                                </tfoot>

                            </table>

                            <div id="seller-map-div" style= "padding: 10px 10px 10px 1px;">
                                <iframe id="seller-loc-map" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Colombo,+Sri+Lanka&amp;aq=0&amp;oq=colom&amp;sll=37.0625,-95.677068&amp;sspn=49.310476,68.818359&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Colombo,+Western+Province,+Sri+Lanka&amp;ll=6.927079,79.861243&amp;spn=0.243348,0.268822&amp;t=m&amp;z=12&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Colombo,+Sri+Lanka&amp;aq=0&amp;oq=colom&amp;sll=37.0625,-95.677068&amp;sspn=49.310476,68.818359&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Colombo,+Western+Province,+Sri+Lanka&amp;ll=6.927079,79.861243&amp;spn=0.243348,0.268822&amp;t=m&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                            </div>
                            
                        </div>
                        <!--Contact us Content-->
                        

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